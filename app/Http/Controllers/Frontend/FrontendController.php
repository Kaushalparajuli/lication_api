<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Documentation;

class FrontendController extends Controller
{
    public function index($slug)
    {
        $doc = Documentation::where('slug', $slug)->first();
        if (!$doc) {
            abort(404);
        }
        $all_title = Documentation::select('title', 'slug')->get();
        return view('frontend.welcome', [
            'doc' => $doc,
            'all_title' => $all_title,
        ]);
    }
}