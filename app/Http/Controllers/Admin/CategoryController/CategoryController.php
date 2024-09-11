<?php

namespace App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Controller;
use App\Interface\Admin\CategoryInterface\CategoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private CategoryInterface $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->middleware('auth');
        $this->categoryInterface = $categoryInterface;
    }

    public function index()
    {
        try {

            if (Auth::user()->role != 1) {

                $categories = $this->categoryInterface->index();

                return view('admin.pages.category.all_category', compact('categories'));
            } else {

                return redirect()->route('admin.dashboard');
            }
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function createUI()
    {
        $categories = $this->categoryInterface->filterData();

        return view('admin.pages.category.components.create_category', compact('categories'));
    }

    public function create(Request $request)
    {
        try {

            if (Auth::user()->role != 1) {

                $this->categoryInterface->create($request);

                return redirect()->route('admin.category.index')->with('success', 'Category created successfully');

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

                $categoryData = $this->categoryInterface->editUI($id);

                $categories = $this->categoryInterface->filterData();

                return view('admin.pages.category.components.update_category', compact('categoryData', 'categories'));
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

                $this->categoryInterface->update($request);

                return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {

        try {

            if (Auth::user()->role != 1) {

                $this->categoryInterface->destroy($id);

                return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');

            } else {

                return redirect()->route('admin.dashboard');
            }

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
