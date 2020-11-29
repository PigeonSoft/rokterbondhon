@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>caption</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
            <tr>
              <td>{{ $photo->id }}</td>
              <td>{{ $photo->caption }}</td>
              <td>{{ $photo->description }}</td>
              <td> <img src="{{ asset('public/uploads/'.$photo->photo) }}" width="80px" height="60px" alt="Photo"></td>
              <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['sliders.destroy', $photo->id] ]) !!}
                {!! Form::submit('Delete', ['class' => 'btn-sm btn-danger pull-left']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection