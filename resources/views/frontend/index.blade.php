<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{-- nav --}}
<div class="container-fluid nav-section py-3 d-none d-md-block">
    <div class="container ">
        <div class="row">
            <div class="col-lg-3 col-md-4 nav-logo col-sm-6">
                <a href="#" class="navbar-brand p-0">
                    <img src="{{url('/img/logo2.png')}}" width="220" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-4 nav-search d-none d-md-block">
                <div class="input-group ">
                    <input type="text" class="form-control search-item" name="search-item" placeholder="Item Name..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="form-control search-zip" name="search-zip" placeholder="Zip Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="d-none d-lg-block text-center mt-1">
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                    <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                    <a href="#" class="mx-2 my-1 tag-a">手机</a>
                    <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                    <a href="#" class="mx-2 my-1 tag-a">箱包</a>
                    <a href="#" class="mx-2 my-1 tag-a">其他</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <div class="container d-flex justify-content-center">
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-sign-in-alt fa-2x"></i><br>登录
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>注册
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="far fa-mobile fa-2x"></i><br>APP
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>社区
                    </a>&nbsp;
                    <a href="#" class="navbar-brand p-0 a-icon">
                        <i class="fas fa-building fa-2x"></i><br>关于
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-section-sm d-md-none d-sm-block d-xs-block">
    <div class="row ">
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
        <div class="col col-sm-3 text-center">
            <a href="">
                <i class="fas fa-home fa-4x"></i>
            </a>
        </div>
    </div>
</div>
<div class="bg-success d-md-none d-sm-block d-xs-block text-center ">
    <img src="{{url('/img/logo.png')}}" width="200" alt="">
</div>
{{-- slide --}}
<div class="slide-long d-none d-md-block">
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        {{--<ol class="carousel-indicators">--}}
        {{--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
        {{--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
        {{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        {{--</ol>--}}
        <div class="carousel-inner">
            <div id="img-slide-div" class="carousel-item active ">
                <img class="slide-long-img" src="{{asset('/img/long1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="slide-long-img" src="{{asset('/img/long2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="slide-long-img" src="{{asset('/img/long3.png')}}" alt="Third slide">
            </div>
        </div>
        {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>--}}
    </div>
    <div class="container d-none d-xl-block">
        <div class="row">
            <div class="col-md-4 categories-trans">
                <ul>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                    <li class="">
                        <a href="#">CPU</a>
                        <span>|</span>
                        <a href="">内存</a>
                        <span>|</span>
                        <a href="">显卡</a>
                        <span>|</span>
                        <a href="">音箱</a>
                        <span>|</span>
                        <a href="">鼠键</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>
</div>
{{-- adv-left --}}
<div class="container adv-section-left my-5">
    <div class=" adv-main">
        <div class="row">
            <div class="col-lg-8 text-left d-none d-md-block">
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            </div>
            <div class="col-lg-4 text-right">
                <a href="">
                    <h3 class="mb-3 ">精品速递<i class="fas fa-caret-down"></i></h3>
                </a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- card vertical --}}
<div class="container my-3 card-vertical-section">
    <div class="card-vertical-main p-3">
        <div class="row card-main-header">
            <div class="col-md-4 text-left">
                <a href="">
                    <h3 class="mb-3 ">每日推荐<i class="fas fa-caret-down"></i></h3>
                </a>
            </div>
            <div class="col-md-8 text-right d-none d-md-block">
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-vertical-main-row">
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-vertical">
                    <span class="badge badge-success badge-hot">Success</span>
                    <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <div class="card-row-info">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-row-btn">
                            <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                        <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- adv-right --}}
<div class="container adv-section-right my-5">
    <div class=" adv-main">
        <div class="row">
            <div class="col-md-4 text-left">
                <a href="">
                    <h3 class="mb-3 ">精品速递<i class="fas fa-caret-down"></i></h3>
                </a>
            </div>
            <div class="col-md-8 text-right d-none d-md-block">
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
                <a href="#" class="mx-2 my-1 tag-a">手机</a>
                <a href="#" class="mx-2 my-1 tag-a">电脑</a>
                <a href="#" class="mx-2 my-1 tag-a">美妆</a>
                <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
                <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-80 img-fluid" src="{{asset('/img/adv3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- card horizontal  --}}
<div class="container card-horizontal-section p-3 my-3">
    <div class="row card-main-header">
        <div class="col-md-4 text-left">
            <a href="">
                <h3 class="mb-3 ">每日推荐<i class="fas fa-caret-down"></i></h3>
            </a>
        </div>
        <div class="col-md-8 text-right d-none d-md-block">
            <a href="#" class="mx-2 my-1 tag-a">手机</a>
            <a href="#" class="mx-2 my-1 tag-a">电脑</a>
            <a href="#" class="mx-2 my-1 tag-a">美妆</a>
            <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
            <a href="#" class="mx-2 my-1 tag-a">保健品</a>
            <a href="#" class="mx-2 my-1 tag-a">手机</a>
            <a href="#" class="mx-2 my-1 tag-a">电脑</a>
            <a href="#" class="mx-2 my-1 tag-a">美妆</a>
            <a href="#" class="mx-2 my-1 tag-a">鞋帽</a>
            <a href="#" class="mx-2 my-1 tag-a">保健品</a>
        </div>
    </div>
    <div class="row card-horizon-main">
        <div class="col-md-8 card-horizon-main-left">
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-fluid img-thumbnail card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail img-fluid card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 card-horizon-main-right"></div>
    </div>
</div>
<script src="/js/app.js"></script>
<script src="/js/font-awesome.js"></script>
</body>
</html>