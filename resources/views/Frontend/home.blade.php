<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        background-color: blue;
        margin: 10px 1%;
    }
    .item .pic{
        width: 100%;
        height: 70%;
        background-color: black;
    }

    .item .pic img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .item .description{
        width: 100%;
        height: 30%;
        background-color: orange;
    }
    .description h3{
        font-size: 20px;
        text-align: center;
        margin-top: 0px;
        font-family: 'Courier New', Courier, monospace;
    }

</style>
<body>
    <div class="container">
        <div class="item">
            <div class="pic">
                <img src="" alt="">
            </div>
            <div class="description">
                <h3>This is shirt for boys</h3>
                <p>price:23$</p>
            </div>
        </div>
    </div>
</body>
</html>
