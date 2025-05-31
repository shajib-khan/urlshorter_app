<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index(){
        return view('index');
    }
    public function store(Request $request)
{
    // Validate URL
    $request->validate([
        'original_url' => 'required|url'
    ]);

    // Check if it already exists
    $existing = ShortUrl::where('original_url', $request->original_url)->first();
    if ($existing) {
        return back()->with('original_url', url($existing->short_code));
    }

    // Generate unique short code
    do {
        $code = Str::random(6); // e.g. 'aZ8xY2'
    } while (ShortUrl::where('short_code', $code)->exists());

    // Save to DB
    $shortUrl = ShortUrl::create([
        'original_url' => $request->original_url,
        'short_code' => $code
    ]);

    return back()->with('original_url', url($code));
}
}
