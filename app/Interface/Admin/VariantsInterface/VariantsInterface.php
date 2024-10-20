<?php

namespace App\Interface\Admin\VariantsInterface;

use Illuminate\Http\Request;

interface VariantsInterface
{
    public function index();
    public function store(Request $request);
    public function update(Request $request);
    public function destroy(Request $request);
}
