<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $user->password = Hash::make($request->password);
        $user->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function traitantCreate(){
        return view('admin.traitant.create');
    }
    public function traitantIndex(){
        $users = User::where('role', '2')->get();
        return view('admin.traitant.index', compact('users'));
    }
}
