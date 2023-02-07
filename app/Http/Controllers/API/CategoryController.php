<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ICategoryRepository;

class CategoryController extends Controller
{
    private $category;
    
    public function __construct(ICategoryRepository $category)
    {
        $this->category = $category;
    }

    public function showCategories()
    {
        $categories = $this->category->getAllCategories();
        return response()->json($categories,200);
    }

}
