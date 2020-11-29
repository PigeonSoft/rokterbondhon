<?php

namespace App\Http\Controllers;

use App\Slider;
use Exception;
use Illuminate\Http\Request;
use Validator;

class SliderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $photos = Slider::all();
       return view('gallery.photo_list',compact('photos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'photo'=> 'mimes:jpeg,jpg,png,ico,JPG|max:2048',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=$request->all();
      if($request->hasFile('photo')) {
            $file=$request->file('photo');
            $data['photo']=$this->image_upload($file);
    } 
     try{
          $input = Slider::create($data);
          return redirect()->back()->with('success','Photo has been added');
     }
     catch(Exception $exception){
        return redirect()->back()->with('error', $exception->getMessage())->withInput();
     }
       
    }

    public function image_upload($file)
    {
        $fileType=$file->getClientOriginalExtension();
        $fileName=rand(1,1000).date('dmyhis').".".$fileType;
        $file->move('public/uploads/',$fileName);
        return $fileName;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $photo_delete = 'public/uploads/'.$slider->photo;
        if(file_exists($photo_delete)){
             unlink($photo_delete);
        }
        $slider->delete();
        return redirect()->back()->with('success','Data has been deleted');
    }
}

