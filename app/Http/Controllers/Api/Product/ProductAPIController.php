<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAPIController extends Controller
{
    public function index(){

        $products = Product::all();

        return response()->json($products);

    }
}
