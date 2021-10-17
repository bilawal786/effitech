<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Http\Controllers\Controller;
use App\Problem;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class ClientController extends Controller
{
    public function problemCreate(){
        $categories = Category::all();
        $sites = Site::where('client_id', Auth::user()->id)->get();
        return view('client.problem.create', compact('categories', 'sites'));
    }
    public function problemStore(Request $request){
        $problem = new Problem();
        $problem->client_id = Auth::user()->id;
        $problem->category_id = $request->category_id;
        $problem->subcategory_id = $request->subcategory_id;
        $problem->site = $request->site;
        $problem->description = $request->description;
        if($request->hasfile('photos')){
            foreach($request->file('photos') as $image)
            {
                $name = time().'photos'.'.'.$image->getClientOriginalName();
                $destinationPath ='photos/';
                $image->move($destinationPath, $name);
                $data9[] = $name;
                $problem->photos = json_encode($data9);
            }
        }
        $problem->save();
        Session::flash('message', 'Votre problème est soumis avec succès. Ladministrateur citera votre problème, vous devez valider le devis. Merci');
        return redirect()->back();
    }
    public function problemIndex(){
        $problems = Problem::where('client_id', Auth::user()->id)->get();
        return view('client.problem.index', compact('problems'));
    }
    public function problemView($id){
        $problem = Problem::find($id);
        return view('client.problem.view', compact('problem'));
    }
    public function problemQuote_status($id, $status){
        $problem = Problem::find($id);
        $problem->quote_status = $status;
        $problem->update();
        Session::flash('message', 'Le statut de votre problème est update. Ladministrateur vous attribuera bientôt un fournisseur daffaires.');
        return redirect()->back();
    }
    public function sites(){
        $sites = Site::where('client_id', Auth::user()->id)->get();
        return view('client.site.index', compact('sites'));
    }
    public function siteView($id){
        $site = Site::find($id);
        return view('client.site.view', compact('site'));
    }
    public function profile(){
        $user = Auth::user();
        return view('client.profile', compact('user'));
    }
}
