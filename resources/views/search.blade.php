<!-- Created by Ariful Islam at 11/07/2020 - 10:12 AM -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="table-heading">
                    <h2>{{$group}}  রক্তবন্ধুর তালিকা</h2>
                </div>
            </div>
        </div>
        <div class="row section_padding">
            <div class="col-xl-12">
                <div class="table-area">

                    <table class="table table-striped">
                        <thead>
                        <tr class="table_top">
                            <th>নং</th>
                            <th>নাম</th>
                            <th>ঠিকানা</th>
                            <th>যোগাযোগ</th>
                            <th>সর্বশেষ রক্তদান</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donors as $donor)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$donor->name}}</td>
                            <td>{{$donor->district}}<span style="font-size: 11px;color: #000;display:block;">{{$donor->address}}</span>
                                <!-- Nijs Address -->
                            </td>

                            <td  style="font-family: 'Roboto'">
                                <a href="tel:{{$donor->mobile}}">
                                    {{$donor->mobile}}</a>

                            </td>

                            <td style="font-family: 'Roboto'">{{$donor->donation_date}}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
