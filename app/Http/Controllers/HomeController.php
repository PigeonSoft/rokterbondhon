<?php
namespace App\Http\Controllers;
use App\Donor;
use App\Helpers\StaticData;
use App\Organization;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        $districts = StaticData::get_district();
        $groups = StaticData::get_blood_group();
        $sliders = Slider::all();

        return view('welcome', compact('districts', 'groups','sliders'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        $user = Auth::user();
        $districts = StaticData::get_district();
        $groups = StaticData::get_blood_group();

        $donor = Donor::where('user_id', $user->id)->first();

        return view('donor.profile', compact('donor', 'districts', 'groups'));
    }

    public function update_profile(Request $request, $id)
    {
        $this->middleware('auth');
        $input = $request->all();
        $data = Donor::findOrFail($id);
        $data->update($input);
        return redirect('/')->with('success', 'Information Updated');
    }

    public function redirect_to_home()
    {
        return redirect('/');
    }

    public function search(Request $request)
    {
        $input = $request->all();
        $group = $input['blood_group'];
        $donors = Donor::where('blood_group', '=', $input['blood_group'])->where('district', '=', $input['district'])->get();

        return view('search', compact('donors', 'group'));
    }
    // photo gallery 
    public function gallery(){
           $photos = Slider::all();
           return view('gallery.photo-gallery',compact('photos'));
    }
    // organization forum
    public function forum(){
           $forums = Organization::all();
           return view('forum.organization-forum',compact('forums'));
    }
}
