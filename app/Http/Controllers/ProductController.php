<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function getAll(): Response
    {
        return response(Product::all());
    }

    public function getById(Product $product) : Response {
        return response($product);
    }

    public function update(Product $product):Response {
        $product->save();
        return response($product);
    }
}
