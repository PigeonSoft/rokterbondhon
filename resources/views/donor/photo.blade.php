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
              <td> <img src="{{ asset($photo->photo) }}" width="80px" height="60px" alt="Photo"></td>
              <td>
                  <a href="{{ route('delete',['id'=>$photo->id]) }}" class="btn btn-danger" onclick="return confirm('If you are sure to delete this item Press Ok')">Delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection