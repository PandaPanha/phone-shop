<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .bg{
        background-image: url('/assets/screenlogin.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center;
    }
    .height{
        height: 100vh;
    }
    .color{
        background-color: #f0ffff;
        padding: 10%;
        border-radius: 15px;
        font-size: 20px;
    }
    img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
<body>

    <div class="container-fluid bg">
        <div class="row">
          <div class="col-sm-7 ">
            {{-- <img src="/assets/screenlogin.jpg" alt=""> --}}
          </div>
          <div class="col-sm-5 color height">
            <form action="{{route('loginA')}}" method="POST">
                @csrf
                <div class="title">
                    <h4 class="text-center text-dark p-3 mt-4 color">Login to Shop</h4>
                    <div class="text-center  m-b-20 ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="email" class="text-grey mt-5">Email or Phone Number</label>
                        <input class="form-control" type="text" name="email" id="email" autofocus>
                    </div>
                </div>
                <div class="form-group password">
                    <div class="col-xs-12">
                        <label for="password"  class="text-grey mt-5">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">
                    </div>
                </div>
                <div class="form-group text-center p-b-10" style="margin-bottom: 10px">
                   <div class="row color">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-info mt-5 w-100">Login</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-info mt-5">Forgot Password</button>
                    </div>
                   </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</body>
</html>
