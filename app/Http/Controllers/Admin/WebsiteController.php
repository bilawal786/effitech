<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function slider(){
        $gs = Content::find(1);
        return view('admin.settings.slider', compact('gs'));
    }
    public function services(){
        $gs = Content::find(1);
        return view('admin.settings.services', compact('gs'));
    }
    public function testimonial(){
        $gs = Content::find(1);
        return view('admin.settings.testimonial', compact('gs'));
    }
    public function sliderStore(Request $request){
        $gs = Content::find(1);
        $gs->h1 = $request->h1;
        $gs->h2 = $request->h2;
        $gs->h3 = $request->h3;
        $gs->h4 = $request->h4;
        $gs->h5 = $request->h5;
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->image1 = 'allimages/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image2 = $request->file('image2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $gs->image2 = 'allimages/' . $name2;
        }
        if ($request->hasfile('image3')) {
            $image3 = $request->file('image3');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $gs->image3 = 'allimages/' . $name3;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function serviceStore(Request $request){
        $gs = Content::find(1);
        $gs->st1 = $request->st1;
        $gs->st2 = $request->st2;
        $gs->st3 = $request->st3;
        $gs->st4 = $request->st4;
        $gs->st5 = $request->st5;
        $gs->st6 = $request->st6;

        $gs->sd1 = $request->sd1;
        $gs->sd2 = $request->sd2;
        $gs->sd3 = $request->sd3;
        $gs->sd4 = $request->sd4;
        $gs->sd5 = $request->sd5;
        $gs->sd6 = $request->sd6;
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function testimonialStore(Request $request){
        $gs = Content::find(1);
        if ($request->hasfile('timage')) {
            $image1 = $request->file('timage');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->timage = 'allimages/' . $name;
        }
        $gs->review1 = $request->review1;
        $gs->review2 = $request->review2;
        $gs->rg1 = $request->rg1;
        $gs->rg2 = $request->rg2;
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
