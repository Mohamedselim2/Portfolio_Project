@extends('layouts/master')
@section('title')
    {{--    {{$product['name']}}--}}
    Project name
@endsection
@section('content')
    <div class="page-header breadcrumb-wrap" style="background: white ;margin-top: 7px">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{'/'}}" rel="nofollow">Home</a>
                <i class="ti-arrow-right" style="font-size: 10px; margin-left: 2px;margin-right: 6px"></i>Projects
                <i class="ti-arrow-right" style="font-size: 10px; margin-left: 1px;"></i> {{$project['name']}}
            </div>
        </div>
    </div><br>


    <div class="container" style="margin-bottom: 227px">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50">
                        <div class="col-md-6 col-sm-12 col-xs-12" >
                            <div class="detail-info">
                                <h2 class="title-detail">{{$project['name']}}</h2>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Project Type: {{$project['major']}}</span>
                                    </div>

                                </div>
                                <div class="product_sort_info font-xs mb-30">
                                    <ul>
                                        <li class="mb-10" style="font-size:20px; font-style: normal"><i class="fi-rs-crown "></i>{{$project['bio']}}</li>
                                        <li class="mb-10"><i class="fi-rs-refresh mr-5"></i></li>
                                        <li><i class="fi-rs-credit-card " ></i> <a href="{{$project['link']}}" target="_blank" style="font-size: 20px">Here is Project Link </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="detail-gallery">
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10" >
                                        <img style="width: 700px; height: 450px" src="{{ asset('import/assets/images/Screenshot 2023-11-21 070410.png') }}" alt="product image">
                                    </figure>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
   </div>{{-- <br><br><br><br><br><br><br><br><br><br>--}}
@endsection
