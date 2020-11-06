<!-- Created by Ariful Islam at 11/04/2020 - 2:27 PM -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">রক্তদাতার তথ্য</div>

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
                                            <select name="s_district" class="form-control custom-select"  id="s_district">
                                                <option value="{{$donor->s_district}}">{{$donor->s_district}}</option>
                                                <option value="পঞ্চগড়">পঞ্চগড়</option>
                                                <option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
                                                <option value="দিনাজপুর">দিনাজপুর </option>
                                                <option value="রংপুর">রংপুর </option>
                                                <option value="ঢাকা">ঢাকা</option>
                                                <option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
                                                <option value="লালমনিরহাট">লালমনিরহাট</option>
                                                <option value="নীলফামারী">নীলফামারী </option>
                                                <option value="গাইবান্ধা">গাইবান্ধা</option>
                                                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                                <option value="রাজশাহী">রাজশাহী </option>
                                                <option value="সিলেট"> সিলেট </option>
                                                <option value="যশোর">যশোর</option>
                                                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                                                <option value="কুমিল্লা">কুমিল্লা </option>
                                                <option value="বরিশাল">বরিশাল</option>
                                                <option value="ফরিদপুর">ফরিদপুর </option>
                                                <option value="বগুড়া">বগুড়া </option>
                                                <option value="পাবনা">পাবনা </option>
                                                <option value="রাঙ্গামাটি">রাঙ্গামাটি </option>
                                                <option value="কুষ্টিয়া">কুষ্টিয়া </option>
                                                <option value="নোয়াখালী">নোয়াখালী </option>
                                                <option value="খুলনা">খুলনা</option>
                                                <option value="টাঙ্গাইল">টাঙ্গাইল </option>
                                                <option value="ভোলা">ভোলা </option>
                                                <option value="বান্দরবান">বান্দরবান </option>
                                                <option value="চাঁদপুর">চাঁদপুর </option>
                                                <option value="হবিগঞ্জ">হবিগঞ্জ </option>
                                                <option value="লক্ষীপুর">লক্ষীপুর</option>
                                                <option value="বরগুনা">বরগুনা </option>
                                                <option value="ঝালকাঠি">ঝালকাঠি </option>
                                                <option value="পিরোজপুর">পিরোজপুর </option>
                                                <option value="পটুয়াখালী">পটুয়াখালী </option>
                                                <option value="ঝিনাইদহ">ঝিনাইদহ</option>
                                                <option value="নড়াইল">নড়াইল </option>
                                                <option value="মাগুরা">মাগুরা </option>
                                                <option value="সাতক্ষিরা">সাতক্ষিরা</option>
                                                <option value="বাগেরহাট">বাগেরহাট </option>
                                                <option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা </option>
                                                <option value="মেহেরপুর">মেহেরপুর </option>
                                                <option value="সিরাজগঞ্জ">সিরাজগঞ্জ </option>
                                                <option value="জয়পুরহাট">জয়পুরহাট </option>
                                                <option value="নাটোর">নাটোর</option>
                                                <option value="নওগাঁ">নওগাঁ </option>
                                                <option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>
                                                <option value="খাগড়াছড়ি">খাগড়াছড়ি </option>
                                                <option value="ফেনী">ফেনী </option>
                                                <option value="ব্রাহ্মণবাড়ীয়া">ব্রাহ্মণবাড়ীয়া </option>
                                                <option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
                                                <option value="কক্সবাজার">কক্সবাজার </option>
                                                <option value="মৌলভীবাজার">মৌলভীবাজার </option>
                                                <option value="গোপালগঞ্জ">গোপালগঞ্জ </option>
                                                <option value="শরীয়তপুর">শরীয়তপুর </option>
                                                <option value="মাদারীপুর">মাদারীপুর </option>
                                                <option value="রাজবাড়ী">রাজবাড়ী </option>
                                                <option value="গাজীপুর">গাজীপুর </option>
                                                <option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
                                                <option value="জামালপুর">জামালপুর </option>
                                                <option value="শেরপুর">শেরপুর </option>
                                                <option value="নেত্রকোনা">নেত্রকোনা</option>
                                                <option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ </option>
                                                <option value="নরসিংদী">নরসিংদী </option>
                                                <option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
                                                <option value="মানিকগঞ্জ">মানিকগঞ্জ </option>
                                                <option value="অন্যান্য">অন্যান্য</option>
                                            </select>
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
                                            <select name="district" class="form-control custom-select"  id="district">
                                                <option value="{{$donor->district}}">{{$donor->district}}</option>
                                                <option value="পঞ্চগড়">পঞ্চগড়</option>
                                                <option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
                                                <option value="দিনাজপুর ">দিনাজপুর </option>
                                                <option value="রংপুর">রংপুর </option>
                                                <option value="ঢাকা">ঢাকা</option>
                                                <option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
                                                <option value="লালমনিরহাট">লালমনিরহাট</option>
                                                <option value="নীলফামারী">নীলফামারী </option>
                                                <option value="গাইবান্ধা">গাইবান্ধা</option>
                                                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                                <option value="রাজশাহী">রাজশাহী </option>
                                                <option value="সিলেট"> সিলেট </option>
                                                <option value="যশোর">যশোর</option>
                                                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                                                <option value="কুমিল্লা">কুমিল্লা </option>
                                                <option value="বরিশাল">বরিশাল</option>
                                                <option value="ফরিদপুর">ফরিদপুর </option>
                                                <option value="বগুড়া">বগুড়া </option>
                                                <option value="পাবনা">পাবনা </option>
                                                <option value="রাঙ্গামাটি">রাঙ্গামাটি </option>
                                                <option value="কুষ্টিয়া">কুষ্টিয়া </option>
                                                <option value="নোয়াখালী">নোয়াখালী </option>
                                                <option value="খুলনা">খুলনা</option>
                                                <option value="টাঙ্গাইল">টাঙ্গাইল </option>
                                                <option value="ভোলা">ভোলা </option>
                                                <option value="বান্দরবান">বান্দরবান </option>
                                                <option value="চাঁদপুর">চাঁদপুর </option>
                                                <option value="হবিগঞ্জ">হবিগঞ্জ </option>
                                                <option value="লক্ষীপুর">লক্ষীপুর</option>
                                                <option value="বরগুনা">বরগুনা </option>
                                                <option value="ঝালকাঠি">ঝালকাঠি </option>
                                                <option value="পিরোজপুর">পিরোজপুর </option>
                                                <option value="পটুয়াখালী">পটুয়াখালী </option>
                                                <option value="ঝিনাইদহ">ঝিনাইদহ</option>
                                                <option value="নড়াইল">নড়াইল </option>
                                                <option value="মাগুরা">মাগুরা </option>
                                                <option value="সাতক্ষিরা">সাতক্ষিরা</option>
                                                <option value="বাগেরহাট">বাগেরহাট </option>
                                                <option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা </option>
                                                <option value="মেহেরপুর">মেহেরপুর </option>
                                                <option value="সিরাজগঞ্জ">সিরাজগঞ্জ </option>
                                                <option value="জয়পুরহাট">জয়পুরহাট </option>
                                                <option value="নাটোর">নাটোর</option>
                                                <option value="নওগাঁ">নওগাঁ </option>
                                                <option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>
                                                <option value="খাগড়াছড়ি">খাগড়াছড়ি </option>
                                                <option value="ফেনী">ফেনী </option>
                                                <option value="ব্রাহ্মণবাড়ীয়া">ব্রাহ্মণবাড়ীয়া </option>
                                                <option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
                                                <option value="কক্সবাজার">কক্সবাজার </option>
                                                <option value="মৌলভীবাজার">মৌলভীবাজার </option>
                                                <option value="গোপালগঞ্জ">গোপালগঞ্জ </option>
                                                <option value="শরীয়তপুর">শরীয়তপুর </option>
                                                <option value="মাদারীপুর">মাদারীপুর </option>
                                                <option value="রাজবাড়ী">রাজবাড়ী </option>
                                                <option value="গাজীপুর">গাজীপুর </option>
                                                <option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
                                                <option value="জামালপুর">জামালপুর </option>
                                                <option value="শেরপুর">শেরপুর </option>
                                                <option value="নেত্রকোনা">নেত্রকোনা</option>
                                                <option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ </option>
                                                <option value="নরসিংদী">নরসিংদী </option>
                                                <option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
                                                <option value="মানিকগঞ্জ">মানিকগঞ্জ </option>
                                                <option value="অন্যান্য">অন্যান্য</option>
                                            </select>
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
                                        <select name="blood_group" class="form-control custom-select"  id="district">
                                            <option value="{{$donor->blood_group}}">{{$donor->blood_group}}</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
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
                                        <input type="date" name="birthday" value="{{$donor->name}}" class="form-control" placeholder="জন্ম তারিখ" autocomplete="off">
                                    </div>

                                    <div class="submit " >
                                        <input type="submit" name="register_button" value="রেজিস্ট্রেশন" />
                                    </div>

                                {!! Form::close() !!}

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="bottom_text_area">
                                            <div class="text_area">
                                                <a href=""><p>পাসওয়ার্ড ভুলে গেলে যোগাযোগ করুন</p></a>
                                            </div>
                                            <div class="requeryment_area">
                                                <ul>
                                                    <li>১.রোগীর ব্যাপারে বিস্তারিত জেনে নিশ্চিত হয়ে রক্ত দিন  </li>
                                                    <li>২.প্রতিবার রক্তদানের পর করে তারিখ পরিবর্তন করে দিন বা  যোগাযোগ  করুন  </li>
                                                    <li>৩. রোগি দেখে রক্তদান করুন। অবশ্যই রোগির নিকট উপস্থিত রোগির আত্মীয়ের সাথে কথা বলে জানিয়ে দিন যে আপনি স্বেচ্ছায় এবং বিনামূল্যে রক্তদান করছেন। যাতে দালাল, আত্মীয় সেজে কিংবা তৃতীয় পক্ষের কেউ দুর্নীতি করতে না পারে।</li>
                                                    <li>৪.আপনার সংগঠনের নাম দেখতে চাইলে আমাদের সাথে যোগাযোগ করুন  </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

