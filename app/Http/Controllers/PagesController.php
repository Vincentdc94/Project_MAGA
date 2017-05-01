<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Sight;
use App\Article;
use App\School;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function adminDashboard()
    {
        $schools = School::all();
        $articles = Article::all();
        $sights = Sight::all();

    	return view('admin', compact('sights', 'articles', 'schools'));
    }

    public function campi()
    {
    	$campi = DB::table('campi')->get();
        return view('campi.show', compact('campi'));
    }

    public function testimonials()
    {
    	return view('testimonials');
    }

    public function sights()
    {
    	$sights = DB::table('sights')->get();
        return view('sights', compact('sights'));
    }

    public function news()
    {
        $articles = DB::table('articles')->get();
    	return view('news', compact('articles'));
    }

    public function tim()
    {
        return view('tim');
    }
}
