<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News_team;
use App\User;
class NewsController extends Controller
{
    public function index()
    {
    $news = News_team::all();
        return view('news-folder.newsIndex', compact('news'));
    }

    public function show($id)
    {
        $new = News_team::findOrFail($id);
        return view('news-folder.newsShow',compact('new'));

    }

}
