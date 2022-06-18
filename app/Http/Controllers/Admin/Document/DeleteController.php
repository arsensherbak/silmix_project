<?php

namespace App\Http\Controllers\Admin\Document;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Document $document)
    {
        $document->delete();
        return back();
    }
}
