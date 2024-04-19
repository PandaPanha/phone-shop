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
    .bd{
      width: 94vw;
      margin: 3vw;
    }
    .slide{
      display: flex;
      justify-content: center;
      height: 400px;
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
<div class="bd">
    <div class="slide">
        <img src="/assets/1.jpg"  alt="...">
    </div>
</div>
<div class="container">
    <h2>Smart Phone</h2><hr>

        @foreach ($products as $item) 

                <div class="pic">
                    <img src="<?php echo $item['img']?>" alt="">
                </div>
                <div>{{$item->price}}</div>
                <div>{{$item->product_code}}</div>
        @endforeach
</div>
<div class="container">
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
</div>
@endsection

