<?php

namespace App\Http\Controllers\Admin\VariantsController;

use App\Http\Controllers\Controller;
use App\Interface\Admin\VariantsInterface\VariantsInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VariantsController extends Controller
{

    private VariantsInterface $variantsInterface;

    public function __construct(VariantsInterface $variantsInterface)
    {
        $this->variantsInterface = $variantsInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $variants = $this->variantsInterface->index();

            return view('admin.pages.variants.all_variants', compact('variants'));

        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            DB::beginTransaction();
            $variants = $this->variantsInterface->store($request);

            DB::commit();

            return back()->with('success', 'Variant created successfully');

        } catch(\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {

            DB::beginTransaction();

            $variants = $this->variantsInterface->update($request);

            DB::commit();

            return back()->with('success', 'Variant updated successfully');

        } catch(\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {

            $variants = $this->variantsInterface->destroy($request);

            return back()->with('success', 'Variant deleted successfully');

        } catch(\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
