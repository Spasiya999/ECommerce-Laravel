<?php
namespace App\Services\Admin\VariantsService;

use App\Interface\Admin\VariantsInterface\VariantsInterface;
use App\Models\VariantType;
use Illuminate\Http\Request;

class VariantsService implements VariantsInterface
{

    public function index()
    {
        $variants = VariantType::paginate(10);

        return $variants;
    }

    public function store(Request $request)
    {
        $variant = new VariantType();

        $variant->name = $request->name;
        $variant->description = $request->description;
        $variant->status = $request->status;

        $variant->save();
        return $variant;
    }

    public function update(Request $request)
    {
        $variant = VariantType::find($request->id);

        $variant->name = $request->name;
        $variant->description = $request->description;
        $variant->status = $request->status;

        $variant->save();
        return true;
    }

    public function destroy(Request $request)
    {
        $variant = VariantType::find($request->id);

        if ($variant == null) {
            return array(
                'status' => 'error',
                'message' => 'Variant not found',
            );
        }

        $variant->delete();

        return array(
            'status' => 'success',
            'message' => 'Variant deleted successfully',
        );
    }
}
