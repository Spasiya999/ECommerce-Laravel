<?php
namespace App\Services\Admin\CategoryService;

use App\Interface\Admin\CategoryInterface\CategoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService implements CategoryInterface
{
    public function index()
    {
        $categories = Category::with('parent')->get();
        return $categories;
    }

    public function filterData()
    {
        $categories = Category::with('parent')->where('status', 1)->get();
        return $categories;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->type = $request->type;
        $category->slug = $request->slug;
        $category->status = $request->status;

        $category->save();

    }

    public function editUI($id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return array(
                'status' => 'error',
                'message' => 'Category not found',
            );
        }

        return $category;
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $category = Category::find($request->id);

        if ($category == null) {
            return array(
                'status' => 'error',
                'message' => 'Category not found',
            );
        }

        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->type = $request->type;
        $category->slug = $request->slug;
        $category->status = $request->status;

        $category->save();

        return $category;

    }

    public function destroy($id)
    {

        $category = Category::find($id);

        if ($category == null) {
            return array(
                'status' => 'error',
                'message' => 'Category not found',
            );
        }

        $category->delete();

        return $category;
    }
}
