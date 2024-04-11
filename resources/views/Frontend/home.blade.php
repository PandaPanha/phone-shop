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
        background-color: rgb(183, 223, 223);
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px

    }
    .description h3{
        font-size: 20px;
        /* text-align: center; */
        margin-top: 0px;
        font-family: 'Courier New', Courier, monospace;
    }
    .bd{
      width: 94vw;
      margin: 3vw;
    }
    .slide{
      display: flex;
      justify-content: center;
      height: 400px;
    }
    .card{
      display: flex;
      justify-content: space-between;
      margin-top: 10px; 
      padding-left: 20px;
      margin: 10px;
      border: none;
    }
    .prodcut{
      display: flex;
    }
    .card-product{
      border: 1px solid rgb(146, 139, 139) ;
      border-radius: 5px;
      margin-right: 10px;
    }
    .text {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* number of lines to show */
              line-clamp: 2; 
      -webkit-box-orient: vertical;
    }

  .img{
    width: 215px;
    height: 200px;
    margin-top: 10px;
  }
  .col-sm-2{
    width: 16%;
  }

</style>
    {{-- <div class="container">
        <div class="item">
            <div class="pic">
                <img src="assets/bglogin1.avif" alt="">
            </div>
            <div class="description">
                <h3>This is shirt for boys</h3>
                <p>price:23$</p>
            </div>
        </div>
    </div> --}}

@section('content')
    <div class="bd">
        <div class="slide">
            <img src="/assets/1.jpg"  alt="...">
        </div>
    </div>

    <?php
    $product = array(
        array("img" => "bglogin1.avif", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"25$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"26$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"28$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"240$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"299$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"249$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),
        array("img" => "1.jpg", "dis" =>"50%","des"=>"this is product", "price" =>"24$"),

    );
    ?>
    <div class="container">
        <h2>Smart Phone</h2><hr>
    <?php
    
    foreach ($product as $item) {
        // foreach ($item as $key => $val) {
            ?>
            <div class="item">
                <div class="pic">
                    <img src="assets/<?php echo $item['img'] ?>" alt="">
                </div>
                <div class="description">
                    <h3><?php echo $item['des'] ?></h3>
                    <p><?php echo $item['price'] ?></p>
                </div>
            </div>

            <?php 
            
        // }
    }
    ?>
    </div>
    <div class="container">
        <h2>Laptop</h2><hr>
    <?php
    
    foreach ($product as $item) {
        // foreach ($item as $key => $val) {
            ?>
            <div class="item">
                <div class="pic">
                    <img src="assets/<?php echo $item['img'] ?>" alt="">
                </div>
                <div class="description">
                    <h3><?php echo $item['des'] ?></h3>
                    <p><?php echo $item['price'] ?></p>
                </div>
            </div>

            <?php 
            
        // }
    }
    ?>
    </div>


@endsection
