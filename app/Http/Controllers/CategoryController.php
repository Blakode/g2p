<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('categoryDetails.images')->get();
        $first_category = $categories->shift();
        return view('portfolio', compact('categories', 'first_category'));
    }

/*
-----------------------------------
| create category render page
-----------------------------------
*/
    public function create(){
        return View('category.create'); 
    }


/*
-----------------------------------
| render admin dashboard
-----------------------------------
*/
    public function dashboard() {
        $categories = Category::with('categoryDetails.images')->get();
        $first_category = $categories->shift();
        return view('category.dashboard', compact('categories', 'first_category'));
    }

    /*
    -----------------------------------
    | create category
    -----------------------------------
    */
    public function store(Request $request)  {
 
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'key_word' => 'nullable|string|max:255'
        ]);

    if ($validator->fails()) {
        return redirect()
            ->route('category-create') 
            ->withErrors($validator)
            ->withInput();
    }

        $category = Category::Create([
            'name' => $request->input('name'), 
            'key_word' => $request->input('key_word')
        ]);
    
        return redirect()
        ->route('category-create') 
        ->with('success', 'Category created successfully'); 
    }

    /*
    -----------------------------------
    | show category
    -----------------------------------
    */
    public function show() {
        return view('categoryDetails.show'); 
    }

    /*
    -----------------------------------
    | manage category
    -----------------------------------
    */
    public function manage() {
        $categories = Category::with('categoryDetails.images')->get();
        return view('category.manage')->with('categories', $categories); 
    }

    /*
    -----------------------------------
    | show edit category
    -----------------------------------
    */
    public function edit($id) {
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Category not found.');
        }

        $categoryDetails = CategoryDetails::where('category_id', $category->id)->get();

        return view('category.edit', compact('category', 'categoryDetails'));
    }

    /*
    -----------------------------------
    | update category
    -----------------------------------
    */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'key_word' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('category.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $category = Category::find($id);

        $category->update([
            'name' => $request->input('name'),
            'key_word' => $request->input('key_word'),
        ]);

        return redirect()
            ->route('category-manage')
            ->with('success', 'Category updated successfully');
    }


    /*
    -----------------------------------
    | delete category
    -----------------------------------
    */
    public function delete($id) {
        $category = Category::find($id);
    
        if (!$category) {
            return redirect()->route('category-manage')->with('error', 'Category not found.');
        }
        
        $category->delete();
        return redirect()->route('category-manage')->with('success', 'Category Detail deleted successfully.');
    }
}
