<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();


        if (isset($data['img'])) {

            $data['img'] = Storage::disk('public')->put('/image', $data['img']);
        }
        Product::firstOrCreate($data);
        return redirect()->route('admin.product.index');
    }
}
