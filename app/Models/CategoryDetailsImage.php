<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDetailsImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'dimension',
        'category_details_id',
    ];

    /***
     -------------------------------------
    |associate a category details to category
    -------------------------------------
    ***/
    public function categoryDetails()
    {
        return $this->belongsTo(CategoryDetails::class);
    }
}
