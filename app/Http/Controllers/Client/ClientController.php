<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Http\Controllers\Controller;
use App\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class ClientController extends Controller
{
    public function problemCreate(){
        $categories = Category::all();
        return view('client.problem.create', compact('categories'));
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
}
