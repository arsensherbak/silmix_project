<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/image', $data['img']);
        }
        $product->update($data);
        return view('admin.products.show', compact('product'));
    }
}
