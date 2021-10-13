<?php

namespace App\Http\Controllers\Front;

use App\Content;
use App\Http\Controllers\Controller;
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
    public function contact(){
        return view('front.contact');
    }
    public function clientDashboard(){
        return view('client.dashboard');
    }
    public function providerDashboard(){
        return view('provider.dashboard');
    }
}
