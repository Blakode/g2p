<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDetails extends Model
{
    use HasFactory;
    
    protected $table = 'category_details';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'client',
        'services',
        'date',
    ];

    /*
    -----------------------------------
    | associate a category details (portfolio) to a category
    -----------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        return $this->hasMany(CategoryDetailsImage::class);
    }
}