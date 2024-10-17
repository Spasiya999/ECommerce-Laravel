<?php

namespace App\Services\Admin\ProductService;

use App\Interface\Admin\ProductInterface\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImages;
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

        if ($request->image != null) {
            $imageName = 'image_' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('images/uploads/projects/images/'), $imageName);
            $bannerPath = 'images/uploads/projects/images/' . $imageName;

            $image = $bannerPath;
        }

        $product->save();

        $productImage = new ProductImages();

        $productImage->product_id = $product->id;
        $productImage->image = $image;
        $productImage->save();

        return $product;
    }

    public function editUI($id)
    {
        $product = Product::with('category', 'productImages')->find($id);
        return $product;
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        // Update product fields
        $product->name = $request->name;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->base_price = $request->base_price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->slug = $request->slug;

        // Handle the image if provided
        if ($request->hasFile('image')) {
            $imageName = 'image_' . time() . '.' . $request->image->extension();

            $request->image->move(public_path('images/uploads/projects/images/'), $imageName);
            
            $imagePath = 'images/uploads/projects/images/' . $imageName;
        }

        $product->save();

        // Check if a ProductImage exists, otherwise create a new one
        $productImage = ProductImages::firstOrNew(['product_id' => $product->id]);

        // Update the image only if a new one was uploaded
        if (isset($imagePath)) {
            $productImage->image = $imagePath;
        }

        $productImage->save();

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
