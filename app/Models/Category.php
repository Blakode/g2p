<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = [
        'name',
        'key_word',
    ]; 

    /***
     -------------------------------------
    |associate a category to multiple category details (portfolio)
    -------------------------------------
    ***/
    public function categoryDetails() {
        return $this->hasMany(CategoryDetails::class, 'category_id'); 
    }
}
