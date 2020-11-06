<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $donor = Donor::where('user_id', $user->id)->first();
//        return $donor;


        return view('donor.profile', compact('donor'));
    }

    public function update_profile(Request $request, $id)
    {
        $input = $request->all();
        $data = Donor::findOrFail($id);
        $data->update($input);
        return redirect('/')->with('success', 'Information Updated');
    }
}
