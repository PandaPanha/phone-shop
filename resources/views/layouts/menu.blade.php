<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    footer{
        background-color: #111;
        height: 90px;

    }
    .footerContainer{
        width: 100%;
        padding: 10px 10px 0px 0px;
    }
    .socialIcons{
        display: flex;
        justify-content: right;
    }
    .socialIcons a{
        text-decoration: none;
        padding:  10px;
        background-color: white;
        margin: 10px;
        border-radius: 50%;
    }
    .socialIcons a i{
        font-size: 2em;
        color: black;
        opacity: 0,9;
    }
    /* Hover affect on social media icon */
    .socialIcons a:hover{
        background-color: #111;
        transition: 0.5s;
    }
    .socialIcons a:hover i{
        color: white;
        transition: 0.5s;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* overflow: hidden; */
    }

    nav {
        background-color: #f2f2f2;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: grey 0px 1px 0px;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .logo a{
        text-decoration: none;
        color: #b5b5b5;
        font-weight: bold;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    li {
        margin-right: 20px;
    }

    li a {
        text-decoration: none;
        color: #b5b5b5;
        font-weight: bold;
    }

    li a:hover {
        color: #78c4c7;
    }
</style>
<body>
    <div id="app">
        <nav>
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="assets/logo.jpg" alt="Logo">
                    <span>SHOP</span>
                </a>
            </div>
            <div class="right">
                <ul>
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="{{ url('/product') }}">PRODUCT</a></li>
                    <li><a href="{{ url('/about') }}">ABOUT</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </div>
            
        </nav>
        <div class="test">
        </div>
        @yield('content')
        @extends('layouts.footer')
</body>
</html>