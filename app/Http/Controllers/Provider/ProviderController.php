<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Problem;
use App\Site;
use App\Steps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function assignProblems(){
        if (Auth::user()->role == 2){
            $problems = Problem::where('contractor_id', Auth::user()->id)->where('contractor_status', 0)->get();
        }elseif (Auth::user()->role == 3){
            $problems = Problem::where('supervisor_id', Auth::user()->id)->where('supervisor_status', 0)->get();
        }elseif (Auth::user()->role == 4){
            $problems = Problem::where('owner_id', Auth::user()->id)->where('owner_status', 0)->get();
        }
        return view('provider.problems', compact('problems'));
    }
    public function completeProblems(){
        if (Auth::user()->role == 2){
            $problems = Problem::where('contractor_id', Auth::user()->id)->where('contractor_status', 1)->get();
        }elseif (Auth::user()->role == 3){
            $problems = Problem::where('supervisor_id', Auth::user()->id)->where('supervisor_status', 1)->get();
        }elseif (Auth::user()->role == 4){
            $problems = Problem::where('owner_id', Auth::user()->id)->where('owner_status', 1)->get();
        }
        return view('provider.problems', compact('problems'));
    }
    public function problemView($id){
        $problem = Problem::find($id);
        return view('provider.problemView', compact('problem'));
    }
    public function problemStatus($id){
        $problem = Problem::find($id);
        if (Auth::user()->role == 2){
            $problem->contractor_status = 1;
        }elseif (Auth::user()->role == 3){
            $problem->supervisor_status = 1;
        }elseif (Auth::user()->role == 4){
            $problem->owner_status = 1;
        }
        $problem->update();
        return redirect()->back();
    }
    public function siteStatus($id){
        $step = Steps::find($id);
        if (Auth::user()->role == 2){
            $step->contractor_status = 1;
        }elseif (Auth::user()->role == 3){
            $step->supervisor_status = 1;
        }
        $step->update();
        return redirect()->back();
    }
    public function sites(){
        if (Auth::user()->role == 2){
            $site = Steps::where('contractor_id', Auth::user()->id)->where('contractor_status', 0)->get();
        }elseif (Auth::user()->role == 3){
            $site = Steps::where('supervisor_id', Auth::user()->id)->where('supervisor_status', 0)->get();
        }
        return view('provider.sites', compact('site'));
    }
    public function sitescomplete(){
        if (Auth::user()->role == 2){
            $site = Steps::where('contractor_id', Auth::user()->id)->where('contractor_status', 1)->get();
        }elseif (Auth::user()->role == 3){
            $site = Steps::where('supervisor_id', Auth::user()->id)->where('supervisor_status', 1)->get();
        }
        return view('provider.sites', compact('site'));
    }
    public function siteView($id){
        $step = Steps::find($id);
        return view('provider.siteView', compact('step'));
    }
    public function profile(){
        $user = Auth::user();
        return view('provider.profile', compact('user'));
    }
}
