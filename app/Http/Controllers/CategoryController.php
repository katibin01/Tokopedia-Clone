<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $categoryModel;

    public function __construct(CategoryModel $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function index()
    {
        $categories = [
            ['title' => 'Gtx 1050 Ti', 'products' => '7rb produk'],
            ['title' => 'S22 Ultra', 'products' => '119rb produk'],
            // ... other categories
        ];

        return view('navigation.asset-content.main', compact('categories'));
    }

    public function generateImagePath($title)
    {
        return asset('products/' . Str::slug($title) . '.jpg');
    }
}
