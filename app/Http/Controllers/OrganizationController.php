<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Organization::all();
        if (Auth::check() && Auth::user()->is_admin == 1)
            return view('forum.forum_list', compact('forums'));
        else
            return view('forum.organization-forum', compact('forums'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required','string','min:11','max:13'],
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin == 1)
            return view('forum.add_forum');
        else
            return abort('404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::check();
        try {
            $data = Organization::create($request->all());
            return redirect('organizations')->with('success','Data Successfully Added');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        Auth::check();
        $forum = $organization;
        return view('forum.edit_forum', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        Auth::check();
        try {
            $organization->update($request->all());
            return redirect('organizations')->with('success', 'Data has been updated');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('error', $exception->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        Auth::check();
        $organization->delete();
        return redirect('organizations')->with('info', 'Data has been deleted');
    }
}
