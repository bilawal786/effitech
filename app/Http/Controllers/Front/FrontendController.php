<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Content;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Offers;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function admin(){
        return view('auth.admin');
    }
    public function provider(){
        return view('auth.provider');
    }
    public function index(){
        $gs = Content::find(1);
        return view('front.index', compact('gs'));
    }
    public function gallery(){
        $gallery = Gallery::all();
        return view('front.gallery', compact('gallery'));
    }
    public function offers(){
        $offers = Offers::all();
        return view('front.offers', compact('offers'));
    }
    public function offersDetails($id){
        $offer = Offers::find($id);
        return view('front.offerDetails', compact('offer'));
    }
    public function galleryView($id){
        $gallery = Gallery::find($id);
        return view('front.galleryView', compact('gallery'));
    }
    public function contact(){
        $gs = Content::find(1);
        $categories = Category::all();
        return view('front.contact', compact('gs', 'categories'));
    }
    public function renovation(){
        $page = Page::find(1);
        return view('front.renovation', compact('page'));
    }
    public function construction(){
        $page = Page::find(1);
        return view('front.construction', compact('page'));
    }
    public function clientDashboard(){
        return view('client.dashboard');
    }
    public function providerDashboard(){
        return view('provider.dashboard');
    }
}
