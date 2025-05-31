<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        dd($request)
;         $request->validate([
            'original_url' => 'required|url'
        ]);
        $code=Str::random(6);
        $shorturl =ShortUrl::create([
            'original_url'=>$request->original_url,
            'short_url'=>$code
        ]);
    }
}
