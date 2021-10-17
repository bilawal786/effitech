<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Content;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Offers;
use App\Page;
use App\Problem;
use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
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
        $problems = Problem::where('client_id', Auth::user()->id)->get();
        $sites = Site::where('client_id', Auth::user()->id)->get();
        return view('client.dashboard', compact('sites', 'problems'));
    }
    public function providerDashboard(){
        return view('provider.dashboard');
    }
    public function profileupdate(Request $request){
        $id = Auth::user();
        $user = User::where('id', $id->id)->first();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->company = $request->company;
        $user->siret = $request->siret;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'profile' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profile/';
            $image1->move($destinationPath, $name);
            $user->image = 'profile/' . $name;
        }

        if ($request->oldpassword){
            $oldpass = $request->oldpassword;
            $pass = $user->password;
            if (Hash::check($oldpass , $pass)) {
                $user->password = Hash::make($request->newpassword);
                $user->save();
                Auth::logout();
                Session::flash('message', 'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe');
                return Redirect()->route('login');
            }else{
                Session::flash('message', 'Lancien mot de passe ne correspond pas!');

                return Redirect()->back();
            }
        }


        $user->update();
        Session::flash('message', 'Sauvegarde réussie!');

        return redirect()->back();
    }
}
