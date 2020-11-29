
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="form-start">
                                {!! Form::open(array('route'=> ['organizations.update', $forum->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}
                                <div class="input_item">
                                        <label for="name">নাম<span>*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="নাম" value="{{ $forum->name }}" required>
                                    </div>
                                <div class="input_item">
                                        <label for="name">ঠিকানা <span>*</span></label>
                                        <input type="text" name="address" class="form-control" placeholder="ঠিকানা " value="{{ $forum->address }}" required>
                                    </div>
                                <div class="input_item">
                                        <label for="name">মোবাইল নম্বর <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="মোবাইল নম্বর" value="{{ $forum->phone }}" required>
                                    </div>
                                    <button class="btn btn-danger" type="submit">Submit</button>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

