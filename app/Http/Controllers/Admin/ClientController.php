<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Exports\PartUsersExport;
use App\Exports\ProUsersExport;
use App\Exports\RenovationExport;
use App\Http\Controllers\Controller;
use App\Problem;
use App\Quote;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Session;
class ClientController extends Controller
{
    public function create(){
        return view('admin.client.create');
    }
    public function professional(){
        $users = User::where('type', 'Professionnel')->where('role', '1')->where('status', 1)->get();
        return view('admin.client.index', compact('users'));
    }
    public function particular(){
        $users = User::where('type', 'Particulier')->where('role', '1')->where('status', 1)->get();
        return view('admin.client.index', compact('users'));
    }
    public function store(Request $request){
        $validator=$request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = new User();
        $user->c_id = Auth::user()->id;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->type = $request->type;
        $user->company = $request->company;
        $user->siret = $request->siret;
        $user->role = $request->role;
        $user->construction_type = $request->construction_type;
        $user->notes = $request->notes;
        if (Auth::user()->role == 4){
            $user->status = 2;
        }
        $user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->password = Hash::make($request->password);
        $user->save();
        Session::flash('message', 'Les détails du nouveau client sont enregistrés avec succès');
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function viewClient($id){
        $client = User::find($id);
        return view('admin.client.view', compact('client'));
    }
    public function clientquotestore(Request $request){
        $quote = new Quote();
        $quote->client_id = $request->client_id;
        $quote->title = $request->title;
        $quote->price = $request->price;
        $quote->start_date = $request->start_date;
        $quote->end_date = $request->end_date;
        $quote->details = $request->details;
        $quote->save();
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
        $categories = Category::all();
        $users = User::where('role', '2')->get();
        return view('admin.traitant.index', compact('users', 'categories'));
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
        $subcontractor = User::where('role', 2)->get();
        $supervisor = User::where('role', 3)->get();
        $owner = User::where('role', 4)->get();
        $problem = Problem::find($id);
        return view('admin.client.problemView', compact('problem', 'subcontractor', 'supervisor', 'owner'));
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
    public function problemAssign(Request $request, $id){
        $problem = Problem::find($id);
        $problem->contractor_id = $request->contractor_id;
        $problem->supervisor_id = $request->supervisor_id;
        $problem->owner_id = $request->owner_id;
        $problem->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function exportPart(){
        return Excel::download(new PartUsersExport, 'Clients Particuliers.xlsx');
    }
    public function exportPro(){
        return Excel::download(new ProUsersExport(), 'Clients Professionnel.xlsx');
    }
    public function exportSite(){
        return Excel::download(new RenovationExport(), 'Tout Chantier.xlsx');
    }
    public function profile(){
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }
}
