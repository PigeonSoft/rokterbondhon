@extends('layouts.app')
@section('content')
<div class="w-100" >
    <h3 class="mb-4 text-center text-light bg-danger p-2">সংগঠন ফোরাম</h3>
</div>
<div class="container">
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin == 1)
        <div class="forum pull-right"><a href="{{ route('organizations.create') }}" class="btn btn-danger-custom">Add New Forum</a></div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>আইডি</th>
                <th>নাম</th>
                <th>ঠিকানা</th>
                <th>মোবাইল</th>
                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin == 1)
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($forums as $forum)
            <tr>
              <td>{{ $forum->id }}</td>
              <td>{{ $forum->name }}</td>
              <td>{{ $forum->address }}</td>
              <td>{{ $forum->phone }}</td>
                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin == 1)
              <td>

                  <a href="{{ route('organizations.edit', $forum->id) }}" class="btn btn-sm btn-info pull-left" style="margin-right: 3px;">Edit</a>

                  {!! Form::open(['method' => 'DELETE', 'route' => ['organizations.destroy', $forum->id] ]) !!}
                  {!! Form::submit('Delete', ['class' => 'btn-sm btn-danger pull-left']) !!}
                  {!! Form::close() !!}

              </td>

                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
