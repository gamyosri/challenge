<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

;

class homeController extends Controller
{
    public function index()
    {
        return view('home')->with('articles', Article::all());
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'description' => 'required',
            'image' => 'required|mimes:jpg,png|max:5120'
        ]);

        $fileName = $request->image->hashName();
        $request->image->move(Storage::disk('local')->path('public/image_thumbnails'), $fileName);
        Article::create(['description' => $request->description, 'image' => $fileName]);

        return redirect()->route('home');
    }


    public function delete($article)
    {
        Article::destroy($article);
        return redirect()->route('home');
    }
}
