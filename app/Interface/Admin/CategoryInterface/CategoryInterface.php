<?php
namespace App\Interface\Admin\CategoryInterface;

use Illuminate\Http\Request;

interface CategoryInterface
{
    public function index();

    public function filterData();

    public function create(Request $request);

    public function editUI($id);

    public function update(Request $request);

    public function destroy($id);
}
