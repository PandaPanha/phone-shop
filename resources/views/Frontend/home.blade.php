@extends('layouts.menu')
<style>
    body{
         padding: 0;
         margin: 0;
    }
    .container{
        width: 80%;
        overflow: hidden;
        background-origin: pink;
        margin: auto;
    }
    .container .item{
        width: 23%;
        height: 300px;
        float: left;
        /* background-color: blue; */
        margin: 10px 1%;
    }
    .item .pic{
        width: 100%;
        height: 70%;
        background-color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .item .pic img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .item .description{
        width: 100%;
        height: 30%;
        background-color: rgb(192, 233, 245);
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .description h3{
        font-size: 20px;
        /* text-align: center; */
        margin-top: 0px;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
@section('content')

<?php
    $product = array(
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/bglogin1.avif', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),
        array('img' => 'assets/1.jpg', 'dis' => '50%', 'des' =>' This is Product','price' => ' 24$'),


    );
?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- <hr> --}}
<div class="m-4">
    <h3 class="">Smart Phone</h3>
    <hr>
    <div class="item p-2 d-flex  ">
        @foreach ($products as $item)
        <a href="{{route('home.productDetail', ['id'=>$item->id])}}" class=" text-decoration-none m-3 p-3">
            <div class="card p-4 " >
                @foreach ($product_imgs as $img)
                    @if ($item->id == $img->product_id )
                        <img src="{{ '/assets/' . $img->product_img }}" alt="" width="200px" height="200px">
                    @endif
                @endforeach
                <div class="card-body">
                    <hr>
                    <h4 class="card-text">{{$item->product_name}}</h4>
                    <h5 class="card-title text-warning"><strong>$ {{$item->price}}</strong></h5>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
{{-- <div class="container">
    <h2>Laptop</h2><hr>
    <?php
        foreach ($product as $item) {
            ?>
            <div class="item">
                <div class="pic">
                    <img src="<?php echo $item['img'] ?>" alt="">
                </div>
                <div class="description">
                    <h3><?php echo $item['des'] ?></h3>
                    <p><?php echo $item['price'] ?></p>
                </div>
            </div>
            <?php
        }
    ?>
</div> --}}
<br><br>
@endsection

