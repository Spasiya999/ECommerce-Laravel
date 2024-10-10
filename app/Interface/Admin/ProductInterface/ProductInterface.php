<?php
namespace App\Interface\Admin\ProductInterface;

use Illuminate\Http\Request;

interface ProductInterface
{
    public function index();

    public function create(Request $request);

    public function editUI($id);

    public function update(Request $request);

    public function delete($id);

    public function categories();
}
