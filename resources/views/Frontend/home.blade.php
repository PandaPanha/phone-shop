@extends('layouts.menu')
@section('content')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="m-4">
        <h3  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Smart Phone</h3>
        <hr>
        <div class="item p-2 d-flex row row-cols-3 justify-content-center  align-content-center flex-wrap">
            @foreach ($products as $item)
                <a href="{{ route('home.productDetail', ['id' => $item->id]) }}" class=" text-decoration-none m-3 p-3">
                    <div class="card p-4 ">
                        @foreach ($product_imgs as $img)
                            @if ($item->id == $img->product_id)
                                <img src="{{ '/assets/' . $img->product_img }}" alt="" width="200px"
                                    height="200px">
                            @endif
                        @endforeach
                        <div class="card-body">
                            <hr>
                            <h4 class="card-text">{{ $item->product_name }}</h4>
                            <h5 class="card-title text-warning"><strong>$ {{ $item->price }}</strong></h5>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <br><br>
</div>
@endsection
