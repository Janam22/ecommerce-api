<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Models\Category;

class CategoryController extends BaseController
{
    
    public function index(): JsonResponse
    {
        try{

            $categories = Category::all();
            return $this->sendResponse($categories, 'Categories retrieved successfully.');

        } catch (Exception $e) {
            return $this->sendError('An error occurred while retrieving categories.', $e->getMessage());
        }
    }
}
