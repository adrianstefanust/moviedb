<?php

namespace App\Http\Libraries;

use App\Models\Category as CategoryModel;
use Exception;

class Category
{

    //get list category
    public function index(){
        $query =  CategoryModel::select('name','slug');
        $query = $query->where('status',1)->get();

        return $query;
    }

    //store new category to database
    public function store($name, $slug){
        $category = new CategoryModel();
        $category->name = $name;
        $category->slug = $slug;
        $category->created_at = date("Y-m-d H:i:s");
        if ($category->save()) {
            return $category;
        } else {
            throw new Exception("failed to add new category.");
        }
    }

    //get category by id
    public function detail($id){
        $query =  CategoryModel::query()->select()->where("status", 1)->where("id", $id)->first();
        if (!$query) {
            throw new Exception("Category not found.");
        }
        return $query;
    }

    //update category by id
    public function update($id, $name, $slug){
        $category = $this->detail($id);
        $category->name = $name;
        $category->slug = $slug;
        $category->updated_at = date("Y-m-d H:i:s");
        if ($category->save()) {
            return $category;
        } else {
            throw new Exception("failed to edit category.");
        }
    }

    //soft delete category
    public function destroy($id){
        $category = $this->detail($id);
        $category->status = 0;
        $category->updated_at = date("Y-m-d H:i:s");
        if ($category->save()) {
            return $category;
        } else {
            throw new Exception("failed to delete category.");
        }
    }
}