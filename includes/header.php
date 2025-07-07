<?php

 define ("APPURL", "http://localhost/anime-main");

?><!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/style.css" type="text/css">
</head>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Magic</a></li>
                                        <li><a href="./categories.html">Drama</a></li>
                                        <li><a href="./categories.html">Adventure</a></li>
                                        <li><a href="./categories.html">Action</a></li>
                                        <li><a href="./categories.html">Romance</a></li>
                                        <li><a href="./categories.html">Horror</a></li>
                                        <li><a href="./categories.html">Comedy</a></li>
                                        <li><a href="./categories.html">Sci-Fi</a></li>
                                        <li><a href="./categories.html">Mystery</a></li>
                                        <li><a href="./categories.html">Fantasy</a></li>
                                        <li><a href="./categories.html">Supernatural</a></li>
                                        <li><a href="./categories.html">Thriller</a></li>
                                        <li><a href="./categories.html">Historical</a></li>
                                        <li><a href="./categories.html">Sports</a></li>
                                        
                                    </ul>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
