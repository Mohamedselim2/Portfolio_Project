@extends('layouts/admin_master')
@section('title')
    Message
@endsection
@section('content')
    <br><br><br><br>
    <div class="container" style="max-width: 700px;">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Customer message</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h5>From:</h5>
                                <h6 style="margin-left: 10px">{{$msg['name']}}</h6>
                                <h6 style="margin-left: 10px">{{$msg['email']}}</h6>
                                <h6 style="margin-left: 10px">{{$msg['phone']}}</h6>
                                <br>
                                <p style="text-align: center; font-size: 20px">{{$msg->message}}</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
