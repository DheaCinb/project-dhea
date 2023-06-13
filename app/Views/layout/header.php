<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo CSS . 'style.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .fContainer {
        display: flex;
        width: 100%;
        height: 100%;
        background-color: lightslategray;
    }

    .wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        padding: 20px;
        width: 100%;
        height: 80px;
        color: black;
        background-color: white;
        box-shadow: 0 8px 15px 0 green;
    }

    .navbar-brand {
        margin-left: 45px;
    }


    .navigation {
        display: flex;
    }

    .navigation>li {
        list-style-type: none;
        padding: 10px;
        margin-right: 45px;
    }

    .navigation>li>a {
        color: black;
        font-size: 20px;
        text-decoration: none;
        padding: 0px;
    }

    .navigation>li>a:hover {
        color: cadetblue;
        transition: all .3s ease-in-out;
    }
    </style>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar  p-0 text-light-emphasis bg-success">
        <div class="container-fluid">
            <span class="navbar-text mb-1">Melayani jasa service motor mulai jam 08.00 WIB - 21.00 WIB di Bengkel
                Dafa Motor.</span>
        </div>
    </nav>

    <nav class="navbar p-0">

        <div class="fContainer">
            <nav class="wrapper">
                <a class=" navbar-brand" href="#">
                    <img src="logo.png" alt="logo" width="80" height="70">
                </a>
                <ul class="navigation">
                    <li><a href="pages">Home</a></li>
                    <li><a href="/">Tentang</a></li>
                    <li><a href="/">Servis</a></li>
                    <li><a href="/">Foto</a></li>
                </ul>
            </nav>
        </div>
    </nav>