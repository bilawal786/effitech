<?php

namespace App\Http\Controllers\Provider;

use App\Category;
use App\Http\Controllers\Controller;
use App\Needs;
use App\Problem;
use App\Site;
use App\Steps;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
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
    public function OwnerCreateClient(){
        $categories = Category::all();
        return view('provider.owner.client.create', compact('categories'));
    }
    public function OwnerCreateIndex(){
        $clients = User::where('c_id', Auth::user()->id)->get();
        return view('provider.owner.client.index', compact('clients'));
    }
    public function OwnerProjectIndex(){
        $project = User::where('c_id', Auth::user()->id)->pluck('id');
        $sites = Site::whereIn('client_id', $project)->get();
        return view('provider.owner.project.index', compact('sites'));
    }
    public function OwnerClientStatus($id, $status){
        $user = User::find($id);
        $user->status = $status;
        $user->update();
        Session::flash('message', 'Réussite de la mise à jour du statut');
        return redirect()->back();
    }
    public function OwnerSiteView($id){
        $site = Site::find($id);
        return view('provider.owner.project.view', compact('site'));
    }
    public function OwnerClientNeeds(){
        $clients = User::where('c_id', Auth::user()->id)->get();
        return view('provider.owner.client.index', compact('clients'));
       /* $needs = Needs::where('provider_id', Auth::user()->id)->get();
        return view('provider.owner.needs.index', compact('needs'));*/
    }
    public function OwnerNeedCreate(){
        $clients = User::where('c_id', Auth::user()->id)->get();
        $categories = Category::all();
        return view('provider.owner.needs.create', compact('categories', 'clients'));
    }
    public function OwnerNeedStore(Request $request){
        $need = new Needs();
        $need->provider_id = Auth::user()->id;
        $need->client_id = $request->client_id;
        $need->category_id = $request->category_id;
        $need->subcategory_id = $request->subcategory_id;
        $need->construction_type = $request->construction_type;
        $need->notes = $request->notes;
        $need->save();
        Session::flash('message', 'Enregistrer avec succès');
        return redirect()->back();
    }
    public function OwnerClientView($id){
        $client = User::find($id);
        return view('provider.owner.client.view', compact('client'));
    }
}
