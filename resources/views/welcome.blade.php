@extends('layouts.app')

@section('content')

        <!-- Start Search Area -->
        <section class="header_search_area">
            <div class="container">
                <div class="header_content_area">

                    <div class="row section_padding home_search_area" >
                        <div class="col-md-8 platelet-left-header offset-2">
                            <h2>রক্তদাতা খুঁজুন  ....</h2>
                            <hr>
                            {!! Form::open(array('route'=> 'search','method'=>'POST')) !!}
                                <div class="form-group">
                                    <div class="select_grouph_area">
                                        {{ Form::select('blood_group', $groups, null, ['class'=>'form-control custom-select']) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="select_location_area select_grouph_area">
                                        {{ Form::select('district', $districts, null, ['class'=>'form-control custom-select']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="search_button">
                                        <!-- <input name="send" value="খুঁজুন" name="search_button" type="submit"> -->
                                        <button type="submit" name="search_button"><i class="fa fa-search"></i> <span>খুঁজুন</span></button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Search Area -->

        <!-- Start services Area  -->
        <section class="services-area">
            <div class="container">
                <div class="row section_padding">
                    <div class="col-xl-12 col-md-12">
                        <div class="services_chat_area text-center">
                            <a href="{{url('register')}}">রক্তদাতা হতে রেজিস্ট্রেশন করুন</a>
                        </div>
                        <br>

                    </div>

                </div>

            </div>
        </section>
        <!-- End services Area  -->

        <!-- Start Image slider Area -->
         <section class="slider_area">
            <div class="container">
                <div class="row slider_margin">
                        <div class="owl-carousel owl-theme">
                            @foreach($sliders as $slide)
                            <div class="item"> <img src="{{asset('public/uploads/'.$slide->photo)}}" height="200px;" alt=""></div>
                            @endforeach
                        </div>
                </div>
            </div>
         </section>
        <!-- End Image slider Area -->
        
{{-- owl carousel script --}}
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,
            autoplay:true,
            autoplay:true,
        },
        600:{
            items:3,
            autoplay:true,
            nav:false,
        },
        1000:{
            items:4,
            autoplay:true,
            nav:false,
        }
    }
})
</script>
@endsection
