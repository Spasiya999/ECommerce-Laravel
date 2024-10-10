<?php
namespace App\Services\Admin\ProductService;

use App\Interface\Admin\ProductInterface\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductService implements ProductInterface
{
    public function index()
    {
        $products = Product::paginate(10);
        return $products;
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->base_price = $request->base_price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->slug = $request->slug;

        $product->save();
        return $product;
    }

    public function editUI($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->base_price = $request->base_price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->slug = $request->slug;

        $product->save();
        return $product;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $product;
    }

    public function categories()
    {
        $categories = Category::where('status', 1)->get();
        return $categories;
    }
}
