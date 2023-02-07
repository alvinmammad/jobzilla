<?php
namespace App\Repositories\Classes;

use App\Models\Categories;
use App\Repositories\Interfaces\ICategoryRepository;

class CategoryRepository implements ICategoryRepository
{   
    protected $category = null;

    public function getAllCategories()
    {
        return Categories::all();
    }

    public function getCategoryById($id)
    {
        return Categories::find($id);
    }

    public function createOrUpdate( $id = null, $collection = [] )
    {   
        if(is_null($id)) {
            $category = new Categories;
            $category->category_name = $collection['category_name'];
            return $category->save();
        }
        $category = Categories::find($id);
        $category->category_name = $collection['category_name'];
        return $category->save();
    }
    
    public function deleteCategory($id)
    {
        return Categories::find($id)->delete();
    }
}