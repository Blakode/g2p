<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetails as ModelsCategoryDetails;
use App\Models\CategoryDetailsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryDetails extends Controller
{

    /*
    -----------------------------------
    | render create category page
    -----------------------------------
    */
    public function create() {
        $categories = Category::all();
        return view('categoryDetails.create')->with('categories', $categories); 
    }

    /*
    -----------------------------------
    | store category
    -----------------------------------
    */
        
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:category,id',
        'services' => 'nullable|string|max:255', 
        'description' => 'required|string',
        'client' => 'required|string|max:255',
        'date' => 'required|date',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'dimension' => 'nullable|in:portrait,landscape',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->route('create-catDetails')
            ->withErrors($validator)
            ->withInput();
    }

    try {
        $categoryDetails = ModelsCategoryDetails::firstOrCreate([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'client' => $request->input('client'), 
            'services' => $request->input('services'),
            'date' => $request->input('date'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('category_images', 'public');
                $dimension = $request->input('dimension');
                CategoryDetailsImage::create([
                    'category_details_id' => $categoryDetails->id,
                    'url' => $imagePath,
                    'dimension' => $dimension,
                ]);
            }
        }

        return redirect()
            ->route('create-catDetails')
            ->with('success', 'Category Details created successfully');
    } catch (\Exception $e) {
        // Log the error for further investigation
        logger('Error creating category details: ' . $e->getMessage());

        return redirect()
            ->route('create-catDetails')
            ->with('error', 'Error creating category details');
    }
}
    

    /*
    -----------------------------------
    | show category details
    -----------------------------------
    */
    public function show($categoryDetailsId) {

        try {
          
            $categoryDetails = ModelsCategoryDetails::with('images')
                ->where('id', $categoryDetailsId)
                ->firstOrFail();
            return view('categoryDetails.show', ['categoryDetails' => $categoryDetails]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Category details not found');
        }
    }

    public function showPortfolio($categoryDetailsId) {

        try {
                // Retrieve the current category details
                $currentCategory = ModelsCategoryDetails::find($categoryDetailsId);

                // Retrieve the previous category details
                $prevCategoryDetails = ModelsCategoryDetails::where('id', '<', $currentCategory->id)
                ->orderBy('id', 'desc')
                ->first();

                // Retrieve the next category details
                $nextCategoryDetails = ModelsCategoryDetails::where('id', '>', $currentCategory->id)
                ->orderBy('id', 'asc')
                ->first();

            $categoryDetails = ModelsCategoryDetails::with('images')
                ->where('id', $categoryDetailsId)
                ->firstOrFail();
            return view('show', ['categoryDetails' => $categoryDetails, 'prevCategoryDetails' => $prevCategoryDetails,
            'nextCategoryDetails' => $nextCategoryDetails,]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Category details not found');
        }
    }

    /*
    -----------------------------------
    | edit category details
    -----------------------------------
    */
    public function edit( $id) {
        $categoryDetail = ModelsCategoryDetails::find($id);

        if (!$categoryDetail) {
            return redirect()->route('category-details.index')->with('error', 'Category Detail not found.');
        }

        return view('categoryDetails.edit', compact('categoryDetail'));
    }

    /*
    -----------------------------------
    | edit category details
    -----------------------------------
    */
    public  function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:category,id',
            'services' => 'nullable|string|max:255', 
            'description' => 'required|string',
            'client' => 'required|string|max:255',
            'date' => 'required|date',
        ]);
    
        $categoryDetail = ModelsCategoryDetails::find($id);

        if (!$categoryDetail) {
            return redirect()->route('category-details.index')->with('error', 'Category Detail not found.');
        }
    
        $categoryDetail->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'client' => $request->input('client'),
            'date' => $request->input('date'),
            'services' => $request->input('services'),
        ]);
    
        return redirect()->route('edit-catDetails',['id' => $categoryDetail->id] )->with('success', 'Category Detail updated successfully.');
    }

    public function delete($id) {

        $categoryDetail = ModelsCategoryDetails::find($id);
    
        if (!$categoryDetail) {
            return redirect()->route('category-manage')->with('error', 'Category Detail not found.');
        }
        $categoryDetail->delete();
    
        return redirect()->route('category-manage')->with('success', 'Category Detail deleted successfully.');
    }
    }


