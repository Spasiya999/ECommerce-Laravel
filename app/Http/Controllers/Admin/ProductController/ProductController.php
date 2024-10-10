<?php

namespace App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Controller;
use App\Interface\Admin\ProductInterface\ProductInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private ProductInterface $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function index()
    {
        try {

            if (Auth::user()->role != 1) {

                $products = $this->productInterface->index();

                return view('admin.pages.product.all_product', compact('products'));

            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function createUI()
    {
        try {

            if (Auth::user()->role != 1) {

                $categories = $this->productInterface->categories();

                return view('admin.pages.product.create', compact('categories'));
            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }

    }

    public function create(Request $request)
    {
        try {

            if (Auth::user()->role != 1) {

                $this->productInterface->create($request);

                return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function editUI($id)
    {
        try {

            if (Auth::user()->role != 1) {

                $product = $this->productInterface->editUI($id);

                $categories = $this->productInterface->categories();

                return view('admin.pages.product.update', compact('product', 'categories'));

            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {

            if (Auth::user()->role != 1) {

                $this->productInterface->update($request);

                return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            if (Auth::user()->role != 1) {

                $this->productInterface->delete($id);

                return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');

            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
