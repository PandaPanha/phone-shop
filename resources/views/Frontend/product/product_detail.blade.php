@extends('layouts.menu')
@section('content')

<div class="container p-2 bg-light">
    <div class="row">
        <div class="col-sm-6 p-4 bg-white text-center">
            <div>
                <img src="{{ '/assets/' . $productImg->product_img }}" alt="" width="320px" height="300px">
            </div>
            <hr class="text-warning font-weight-bold">
            <div class="justify-content-center m-auto">
                {{-- <div class="col-sm-3 border shadow-sm"><img src="/assets/iphone-1.jpg" width="80%"  alt=""></div> --}}
                <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
                <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
                <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
            </div>
            <br>
            <hr>
            <div id="carouselExampleIndicators" class="carousel slide text-center w-100 h-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/assets/cover-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/cover-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/cover-5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> --}}
            </div>
        </div>
        <div class="col-sm-6 p-4">
            {{-- <h3>id:{{$product->id}}</h3> --}}
            <h3>{{$product->product_name}} {{$product->storage}}G USA (New)</h3>
            <hr class="text-warning font-weight-bold">
            <h4 class="text-warning font-weight-bold"><strong>$ {{$product->price}}</strong></h4>
            <h6>Ram: <strong>{{$product->ram}}G</strong></h6>
            <h6>Storage: <strong>{{$product->storage}}G</strong></h6>
            <h6>Display: <strong>6.7" </strong>1284x2778 pixels</h6>
            <h6>Battery: <strong>{{$product->battery}}mAh</strong></h6>
            <h6>Color: <strong>{{$productImg->color_name}}</strong></h6>
            <h6>Weight:	<strong>240 g (8.47 oz)</strong></h6>
            <h6>In Box:
                <li class="text-info">Free Jelly Case</li>
                <li class="text-info">Free Temper Glass</li>
                <li class="text-info">Free Adaptor 20W</li>
            </h6>
            <h6>Apple Store Warranty: <strong>1 Year</strong></h6>
            <h6>Call Us: <strong>081 6216/0665855 :49</strong></h6>
            <h6>Location: <strong>Phnom Penh</strong></h6>
            <br>
            <hr>
            <div class = "product-content">
                <div class = "product-rating">
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star text-warning"></i>
                    <i class = "fas fa-star-half-alt text-warning"></i>
                    <span>4.7(21)</span>
                </div>
                <br>
                <div class = "product-detail">
                    <h6>Available: <span class="font-weight-bold">In stock</span></h6>
                    <h6>Category: <span>iPhone, Smartphone</span></h6>
                    <h6>Shipping Fee: <span>Free</span></h6>
                    <h6>Shipping Area: <span>All over the world</span></h6>
                </div>
                <p><strong>Disclaimer. </strong>We can not guarantee that the information on this page is 100% correct.</p>
                <hr>
                <div class = "purchase-info d-flex p-2">
                    <input type="number" class="form-control w-25 m-2" min="0" value="1">
                    <button type="button" class="btn bg-warning text-bold text-white m-2">
                        Buy now <i class="fas fa-shopping-cart text-danger"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
