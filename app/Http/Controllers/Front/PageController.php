<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about($locale)
    {
        return view('front.pages.about');
    }


    public function production($locale)
    {
        return view('front.pages.production');
    }

    public function exports($locale)
    {
        return view('front.pages.export');
    }

    public function sustainability($locale)
    {
        return view('front.pages.sustainability');
    }

    public function gallery($locale)
    {
        return view('front.pages.gallery');
    }

}
