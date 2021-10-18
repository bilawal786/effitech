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
        $site->details = $request->details;
        $site->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function viewSite($id){
        $subcontractor = User::where('role', 2)->get();
        $supervisor = User::where('role', 3)->get();
        $site = Site::find($id);
        return view('admin.site.view', compact('site', 'subcontractor', 'supervisor'));
    }
    public function stepSiteStore(Request $request){
        $step = new Steps();
        $step->title = $request->title;
        $step->start_date = $request->start_date;
        $step->end_date = $request->end_date;
        $step->details = $request->details;
        $step->site_id = $request->site_id;
        $step->contractor_id = $request->contractor_id;
        $step->supervisor_id = $request->supervisor_id;
        if($request->hasfile('gallery')){
            foreach($request->file('gallery') as $image)
            {
                $name = time().'photos'.'.'.$image->getClientOriginalName();
                $destinationPath ='photos/';
                $image->move($destinationPath, $name);
                $data9[] = $name;
                $step->gallery = json_encode($data9);
            }
        }
        $step->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function stepStatus($id, $status){
        $step = Steps::find($id);
        $step->work_status = $status;
        $step->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
