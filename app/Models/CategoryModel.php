<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    
    protected $fillable = ['title', 'product_count', 'image_path'];

    public function getAllCategories()
    {
        return $this->all();
        
    }

    public function getCategoriesWithPagination($perPage = 8)
    {
        return $this->paginate($perPage);
    }
}
