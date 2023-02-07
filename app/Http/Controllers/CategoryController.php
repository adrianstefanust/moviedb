<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Libraries\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends ApiController
{

    //get list category
    public function index(Request $request, Category $categoryLibrary)
    {
        try {
            
            $data = $categoryLibrary->index();

            return $this->showAll($data,200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),500);
        }
    }

    //store new category to database
    public function store(Request $request, Category $categoryLibrary)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required'
            ]);
            if ($validator->fails()) {
                throw new Exception("Invalid Format.");
            }

            $data = $categoryLibrary->store($request->name, $request->slug);
            return $this->successResponse($data,201);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),500);
        }
    }

    //soft delete category 
    //change status to 1
    public function destroy($id, Category $categoryLibrary)
    {
        try {
            $data = $categoryLibrary->destroy($id);
            return $this->successResponse($data,200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),500);
        }
    }

    //update category by id
    public function update($id, Request $request, Category $categoryLibrary)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required'
            ]);
            if ($validator->fails()) {
                throw new Exception("Invalid Format.");
            }

            $data = $categoryLibrary->update($id, $request->name, $request->slug);
            return $this->successResponse($data,201);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),500);
        }
    }

    public function show($id, Category $categoryLibrary)
    {
        try {

            $data = $categoryLibrary->detail($id);
            return $this->successResponse($data,201);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),500);
        }
    }
}
