<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use App\Page;
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
    public function settings(){
        $gs = Content::find(1);
        return view('admin.settings.settings', compact('gs'));
    }
    public function settingsStore(Request $request){
        $gs = Content::find(1);
        $gs->email = $request->email;
        $gs->phone = $request->phone;
        $gs->address = $request->address;
        $gs->fax = $request->fax;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
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
    public function construction(){
        $page = Page::find(1);
        return view('admin.settings.construction', compact('page'));
    }
    public function constructionStore(Request $request){
        $page = Page::find(1);
        $page->h1 = $request->h1;
        $page->h2 = $request->h2;
        $page->d1 = $request->d1;
        $page->d2 = $request->d2;
        $page->video = $request->video;
        $page->title1 = $request->title1;
        $page->title2 = $request->title2;
        $page->de1 = $request->de1;
        $page->de2 = $request->de2;

        if ($request->hasfile('vimage')) {
            $image3 = $request->file('vimage');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $page->vimage = 'allimages/' . $name3;
        }
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $page->image1 = 'allimages/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image2 = $request->file('image2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $page->image2 = 'allimages/' . $name2;
        }
        $page->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function renovation(){
        $page = Page::find(1);
        return view('admin.settings.renovation', compact('page'));
    }
    public function renovationStore(Request $request){
        $page = Page::find(1);
        $page->rh1 = $request->rh1;
        $page->rh2 = $request->rh2;
        $page->rd1 = $request->rd1;
        $page->rd2 = $request->rd2;
        $page->rvideo = $request->rvideo;
        $page->rtitle1 = $request->rtitle1;
        $page->rtitle2 = $request->rtitle2;
        $page->rde1 = $request->rde1;
        $page->rde2 = $request->rde2;

        if ($request->hasfile('rvimage')) {
            $image3 = $request->file('rvimage');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $page->rvimage = 'allimages/' . $name3;
        }
        if ($request->hasfile('rimage1')) {
            $image1 = $request->file('rimage1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $page->rimage1 = 'allimages/' . $name;
        }
        if ($request->hasfile('rimage2')) {
            $image2 = $request->file('rimage2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $page->rimage2 = 'allimages/' . $name2;
        }
        $page->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
