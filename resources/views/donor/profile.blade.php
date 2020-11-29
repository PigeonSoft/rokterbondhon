<!-- Created by Ariful Islam at 11/04/2020 - 2:27 PM -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">রক্তদাতার তথ্য</div>
                    <div class=""><a class="btn btn-danger-custom text-light float-right mt-2 p-2"
                     data-toggle="modal" data-target="#photoModal">ছবি সংরক্ষণ করুন</a>
                    </div>
                     <div></div>
                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="form-start">
                                {!! Form::open(array('route'=> ['profile.update', $donor->id],'method'=>'PUT', 'files'=>true)) !!}

                                <div class="input_item">
                                        <label for="name">নাম<span>*</span></label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="নাম" value="{{$donor->name}}" required>
                                    </div>
                                    <fieldset>
                                        <legend>স্থায়ী ঠিকানা</legend>
                                        <div class="form-group input_item">
                                            <label for="s_district">জেলা<span>*</span></label>
                                            {{ Form::select('s_district', $districts, $donor->s_district, ['class'=>'form-control custom-select']) }}
                                        </div>
                                        <div class="input_item">
                                            <label for="s_address">ঠিকানা<span>*</span></label>
                                            <input type="text" name="s_address" class="form-control" id="s_address" placeholder="ঠিকানা" value="{{$donor->s_address}}" required>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>বর্তমান ঠিকানা </legend>
                                        <div class="form-group input_item">
                                            <label for="district">জেলা<span>*</span></label>
                                            {{ Form::select('district', $districts, $donor->district, ['class'=>'form-control custom-select']) }}

                                        </div>
                                        <div class="input_item">
                                            <label for="address">ঠিকানা<span>*</span></label>
                                            <input type="text" name="address" value="{{$donor->address}}" class="form-control" id="address" placeholder="ঠিকানা" required>
                                        </div>
                                    </fieldset>


                                    <div class="input_item mobile_update">
                                        <label for="mobile">মোবাইল নাম্বার ( ইংরেজি )<span>*</span></label>
                                        <input type="number" name="mobile" value="{{$donor->mobile}}" class="form-control" id="mobile" placeholder="মোবাইল নাম্বার" maxlength="11" required>
                                        <span class="white"></span>
                                    </div>

                                    <div class="form-group input_item">
                                        <label for="district">রক্তের  গ্রুপ<span>*</span></label>
                                        {{ Form::select('blood_group', $groups, $donor->blood_group, ['class'=>'form-control custom-select']) }}

                                    </div>

                                    <div class="date_top_text">
                                        <div class="input_item">
                                            <label for="countingD">সর্বশেষ রক্ত দানের তারিখ<span>*</span></label>
                                            <input type="date" name="donation_date" value="{{$donor->donation_date}}" class="form-control" id="donation_date" placeholder="" autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="input_item">

                                        {!! Form::select('gender', ['male'=>'পুরুষ', 'female'=>'মহিলা'], $donor->gender, ['class'=>'form-control custom-select'])!!}
                                        <span><small>নারী ডোনারদের ফোন নম্বর গোপন রাখা হবে।</small></span>
                                    </div>
                                    <div class="input_item">
                                        <label for="birthday">জন্ম তারিখঃ<span>*</span></label>
                                        <input type="date" name="birthday" value="{{$donor->birthday}}" class="form-control" placeholder="জন্ম তারিখ" autocomplete="off">
                                    </div>

                                    <div class="submit pull-right" >
                                        <p align="right"><input type="submit" name="register_button" value="তথ্য হালনাগাদ" class="btn btn-danger-custom" /></p>
                                    </div>

                                {!! Form::close() !!}
<br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bottom_text_area">
                                            <div class="row">
                                                <a href=""><p>পাসওয়ার্ড ভুলে গেলে যোগাযোগ করুন</p></a>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                                <ul>
                                                    <li>১.রোগীর ব্যাপারে বিস্তারিত জেনে নিশ্চিত হয়ে রক্ত দিন  </li>
                                                    <li>২.প্রতিবার রক্তদানের পর করে তারিখ পরিবর্তন করে দিন বা  যোগাযোগ  করুন  </li>
                                                    <li>৩. রোগি দেখে রক্তদান করুন। অবশ্যই রোগির নিকট উপস্থিত রোগির আত্মীয়ের সাথে কথা বলে জানিয়ে দিন যে আপনি স্বেচ্ছায় এবং বিনামূল্যে রক্তদান করছেন। </li>
                                                    

                                                </ul>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
  <div id="photoModal" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ছবি সংরক্ষণ করুন</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- show error message for sql query --}}
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="modal-body pd-25">
          <form action="{{ route('sliders.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
         <div class="form-group row">
           <label for="caption" class="col-sm-3">ক্যাপশন</label>
           <input type="text" class="form-control col-sm-8" name="caption" autofocus>
           </div>

         <div class="form-group row">
           <label for="description" class="col-sm-3">বর্ণনা</label>
           <input type="text" class="form-control col-sm-8" name="description" autofocus>
           </div>

         <div class="form-group row">
           <label for="photo" class="col-sm-3">ছবি</label>
           <input type="file" class="form-control col-sm-8" name="photo">
           </div>
           <div class="modal-footer">
            <button type="submit" class="btn btn-danger-custom pd-x-20">সংরক্ষণ</button>
            <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal">কেটে দিন</button>
               </div>
           </form>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
@endsection

