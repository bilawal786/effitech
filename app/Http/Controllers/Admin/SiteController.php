<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Site;
use App\Steps;
use Illuminate\Http\Request;
use App\User;
class SiteController extends Controller
{
    public function indexSite(){
        $sites = Site::all();
        return view('admin.site.index', compact('sites'));
    }
    public function createSite(){
        $categories = Category::all();
        $client = User::where('role', '1')->get();
        return view('admin.site.create', compact('client', 'categories'));
    }
    public function storeSite(Request $request){
        $site = new Site();
        $site->title = $request->title;
        $site->client_id = $request->client_id;
        $site->category_id = $request->category_id;
        $site->subcategory_id = $request->subcategory_id;
        $site->details = $request->details;
        $site->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function viewSite($id){
        $site = Site::find($id);
        return view('admin.site.view', compact('site'));
    }
    public function stepSiteStore(Request $request){
        $step = new Steps();
        $step->title = $request->title;
        $step->start_date = $request->start_date;
        $step->end_date = $request->end_date;
        $step->details = $request->details;
        $step->site_id = $request->site_id;
        $step->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
