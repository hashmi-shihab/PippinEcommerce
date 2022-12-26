@extends('frontend.layouts.app')

@section('content')
    
<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Categories</h4>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="" >
                            <div class="category-card-img">
                                <img src="{{url('image/image1.jpg')}}" class="w-100" alt="Laptop">
                            </div>
                            <div class="category-card-body">
                                <h5>Laptop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="{{url('image/image1.jpg')}}" class="w-100" alt="Mobile Devices">
                            </div>
                            <div class="category-card-body">
                                <h5>Mobile</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="{{url('image/image1.jpg')}}" class="w-100" alt="Mens Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Mens Fashion</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="{{url('image/image1.jpg')}}" class="w-100" alt="Women Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Women Fashion</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
