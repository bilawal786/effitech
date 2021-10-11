<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function admin(){
        return view('auth.admin');
    }
    public function index(){
        return view('front.index');
    }
    public function contact(){
        return view('front.contact');
    }
    public function clientDashboard(){
        return view('client.dashboard');
    }
}
