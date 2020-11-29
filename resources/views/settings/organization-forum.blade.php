@extends('layouts.app')
@section('content')
<div class="w-100" >
    <h3 class="mb-4 text-center text-light bg-danger p-2">সংগঠন ফোরাম</h3>
</div>
    <div class="container">
      <div class="row">
        @foreach($forums as $forum)
        <div class="card border border-danger m-2" style="width: 22rem;">
          <div class="card-body text-center">
           <h5 class="card-title">{{ $forum->name }}</h5>
           <h6 class="card-text">{{ $forum->address }}</h6>
           <p class="card-text">{{ $forum->phone }}</p>
               </div>
            </div>
         @endforeach

        @foreach($forums as $forum)
        <div class="card border border-danger m-2" style="width: 22rem;">
          <div class="card-body text-center">
           <h5 class="card-title">{{ $forum->name }}</h5>
           <h6 class="card-text">{{ $forum->address }}</h6>
           <p class="card-text">{{ $forum->phone }}</p>
               </div>
            </div>
         @endforeach
    </div>
 </div>
@endsection
