<?php
namespace App\Repositories\Interfaces;

interface ICategoryRepository 
{
    public function getAllCategories();

    public function getCategoryById($id);

    public function createOrUpdate( $id = null, $collection = [] );

    public function deleteCategory($id);
}