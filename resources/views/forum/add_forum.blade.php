@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="form-start">
                                <form action="{{ route('organizations.store')}}" method="post">
                                    @csrf
                                <div class="input_item">
                                        <label for="name">নাম<span>*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="নাম" value="" required>
                                    </div>
                                <div class="input_item">
                                        <label for="name">ঠিকানা <span>*</span></label>
                                        <input type="text" name="address" class="form-control" placeholder="ঠিকানা " value="" required>
                                    </div>
                                <div class="input_item">
                                        <label for="name">মোবাইল নম্বর <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="মোবাইল নম্বর" value="" required>
                                    </div>
                                    <button class="btn btn-danger-custom" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

