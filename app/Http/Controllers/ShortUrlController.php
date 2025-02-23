<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ShortUrlController extends Controller
{

    public function create(){
        return view('clientadmin.create');
    }
    public function store(Request $request) {
        $shortCode = Str::random(6);
        ShortUrl::create(['short_code' => $shortCode, 'long_url' => $request->long_url, 'user_id' => auth()->id()]);
        return redirect()->back()->with('success', 'Short URL created!');
    }

    public function redirect($shortCode) {
        $url = ShortUrl::where('short_code', $shortCode)->firstOrFail();
        return redirect($url->long_url);
    }
}
