<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categories::all();
        return CategoryResource::collection($categories);        
    }
    public function show($id){
        $category = Categories::find($id);
        return $category
            ? response()->json(['data'=>$category],200) 
            : response()->json(['message'=>'No category found with id : $id'],201);
    }
    public function store(CategoryRequest $request){
        $validated = $request->validated();
        // dd($validated);
        // var_dump($validated);
        if($request->validated()){
            dd('validated');
        }
        else{
            dd('not validated');
        }
            // dd($validated);
        // try{
        //     $validated = $request->validated();
        //     dd($validated);
        //     // $request->validate([
        //     //     'category_name'=>'required|max:35'
        //     // ]);
        //     $newCategory = Categories::create($request->all());
        //     return $newCategory;
        // }
        // catch(ValidationException $e){
        //     return response()->json(['errors'=>$e->errors()],422);

        // }
       
    }
    public function update(Request $request,$id){
        try{
            $request->validate([
                'category_name'=>'required|max:35'
            ]);
            $category = Categories::find($id);
            if($category){
                $category->update($request->all());
                return response()->json(['message'=>'Category updated succesfully !']);
            }
            else{
                return response()->json(['message'=>'Category not found with this id :(']);
            }
        }
        catch(ValidationException $e){
            return response()->json(['errors'=>$e->errors()],422);
        }
    }

    public function destroy($id){
        $category = Categories::find($id);
        if($category){
            $category->delete();
            return response()->json(['message'=>'Category deleted successfully !'],200);
        }
        else{
            return response()->json(['message'=>'No category found'],404);
        }
    }
}
