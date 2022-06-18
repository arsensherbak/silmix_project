<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Work\StoreRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreImageController extends Controller
{
    public function __invoke(Request $request, Work $work)
    {

        $data = $request->validate([
            'image' => 'required'
        ]);
        $image = $data['image'];
        $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
        $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);

        Image::create([
            'image'=>url('/storage/' . $filePath),
            'work_id'=> $work->id
        ]);
        return back();
    }
}
