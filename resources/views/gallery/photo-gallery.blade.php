@extends('layouts.app')
@section('content')
<div class="w-100" >
    <h3 class="title text-center text-light bg-danger p-2">ফটো গ্যালারি</h3>
</div>
    <div class="container">
        <div class="row">
            @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin == 1)
        <div><a href="{{ route('sliders.index') }}" class="btn btn-danger-custom p-2">Manage Gallery</a></div>
           @endif
            @foreach ($photos as $photo)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 p-2">
                <a href="{{ asset('public/uploads/'.$photo->photo)}}" data-lightbox="roadtrip"><img src="{{ asset('public/uploads/'.$photo->photo)}}" class="w-100" alt="image"></a>
            </div>
            @endforeach
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