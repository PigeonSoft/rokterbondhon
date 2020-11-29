@extends('layouts.app')
@section('content')
<div class="w-100" >
    <h3 class="title text-center text-light bg-danger p-2">ফটো গ্যালারি</h3>
</div>
    <div class="container">
        <div class="row">
        {{-- <div><a href="" class="btn btn-danger p-2">Manage Gallery</a></div> --}}
            @guest
            @foreach ($sliders as $slide)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 p-2">
                <a href="{{asset($slide->photo)}}" data-lightbox="roadtrip"><img src="{{asset($slide->photo)}}" class="w-100" alt="image"></a>
            </div>
            @endforeach
            @else
            @if(Auth::user()->is_admin == 0)
            <div><a href="{{ route('photo')}}" class="btn btn-danger">Manage Gallery</a></div>
            @foreach ($sliders as $slide)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 p-2">
            <a href="{{asset($slide->photo)}}" data-lightbox="roadtrip"><img src="{{asset($slide->photo)}}" class="w-100" alt="image"></a>
            </div>
            @endforeach
            @endif
            @if(Auth::user()->is_admin == 1)
            <div><a href="" class="btn btn-danger">Manage Gallery</a></div>
            @endif
            @endguest
        </div>
     </div>
 </div>
{{-- lightbox 2 --}}
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>


@endsection