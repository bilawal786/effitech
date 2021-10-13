<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Problem;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function create(){
        return view('admin.client.create');
    }
    public function professional(){
        $users = User::where('type', 'Professionnel')->where('role', '1')->get();
        return view('admin.client.index', compact('users'));
    }
    public function particular(){
        $users = User::where('type', 'Particular')->where('role', '1')->get();
        return view('admin.client.index', compact('users'));
    }
    public function store(Request $request){
        $validator=$request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->type = $request->type;
        $user->company = $request->company;
        $user->siret = $request->siret;
        $user->role = $request->role;
        $user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->password = Hash::make($request->password);
        $user->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function traitantCreate(){
        $categories = Category::all();
        return view('admin.traitant.create', compact('categories'));
    }
    public function traitantIndex(){
        $users = User::where('role', '2')->get();
        return view('admin.traitant.index', compact('users'));
    }
    public function commercialCreate(){
        $categories = Category::all();
        return view('admin.commercial.create', compact('categories'));
    }
    public function commercialIndex(){
        $users = User::where('role', '3')->get();
        return view('admin.commercial.index', compact('users'));
    }
    public function conducteurCreate(){
        $categories = Category::all();
        return view('admin.conducteur.create', compact('categories'));
    }
    public function conducteurIndex(){
        $users = User::where('role', '4')->get();
        return view('admin.conducteur.index', compact('users'));
    }
    public function problems(){
        $problems = Problem::where('quote_status', 0)->get();
        return view('admin.client.problems', compact('problems'));
    }
    public function problemsQuote(){
        $problems = Problem::where('quote_status', 3)->get();
        return view('admin.client.problems', compact('problems'));
    }
    public function problemsAccept(){
        $problems = Problem::where('quote_status', 1)->get();
        return view('admin.client.problems', compact('problems'));
    }
    public function problemView($id){
        $problem = Problem::find($id);
        return view('admin.client.problemView', compact('problem'));
    }
    public function problemQuote(Request $request, $id){
        $problem = Problem::find($id);
        $problem->price = $request->price;
        $problem->service_date = $request->service_date;
        $problem->quote_status = 3;
        $problem->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
