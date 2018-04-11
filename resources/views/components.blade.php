<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{-- nav --}}
<div class="container-fluid nav-section mt-3">
    <div class="container ">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="navbar-brand p-0">
                    <img src="{{url('/img/logo2.png')}}" width="180" alt="">
                </a>
            </div>
            <div class="col-md-6 nav-search">
                <div class="input-group">
                    <input type="text" class="form-control search-item" name="search-item" placeholder="Item Name..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="text" class="form-control-sm search-zip" name="search-zip" placeholder="Zip Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
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
            <div class="col-md-3 p-0 ">
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
<div class="container mt-1">
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="btn btn-main mx-2">小铺</a>
            <a href="#" class="btn btn-main mx-2">商城</a>
            <a href="#" class="btn btn-main mx-2">转寄</a>
            <a href="#" class="btn btn-main-outline mx-2">社区</a>
        </div>
    </div>
</div>
{{-- components --}}
{{--<div class="container m-5">
    <img src="{{url('/img/logo.png')}}" alt="Logo" width="80">
</div>
<div class="container m-5">
    <a href="" class="btn btn-main mx-3">Demo</a>
    <a href="" class="btn btn-main-outline mx-3">Demo</a>
</div>--}}
<div class="container mt-5">
    <div class="alert alert-danger alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
{{-- card-vertical --}}
<div class="container my-3">
    <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-4">
            <div class="card card-vertical">
                <span class="badge badge-warning badge-hot">Success</span>
                <img class="card-img-top card-img-size img-thumbnail " src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
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
        <div class="col-md-4">
            <div class="card card-vertical">
                <span class="badge badge-danger">Success</span>
                <img class="card-img-top card-img-size" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
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
                    <span>
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    </span>
                    <span>

                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    </span>
                    <span>

                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="alert alert-danger alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
{{-- card-horizon --}}
<div class="container my-3">
    <div class="row">
        <div class="col-md-8">
            {{-- 1st --}}
            <div class="card-horizon">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img" src="{{asset('/img/boots.jpg')}}" alt="">
                        <div class="card-right-footer text-center ">
                            <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                        </div>
                    </div>
                    <div class="col-md-6 card-right ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                        </div>
                        <div class="card-right-btn text-center ">
                            <a href="#" class="btn btn-main">点击购买</a>
                            <a href="#" class="btn btn-main-outline">价格对比</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2nd --}}
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img" src="{{asset('/img/boots.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                        </div>
                        <div class="card-right-btn text-center ">
                            <a href="#" class="btn btn-main">点击购买</a>
                            <a href="#" class="btn btn-main-outline">价格对比</a>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            {{-- 3rd --}}
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img" src="{{asset('/img/boots.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">

                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
    </div>
    <div class="col-md-4">
    </div>
</div>
<script src="/js/app.js"></script>
<script src="/js/font-awesome.js"></script>
</body>
</html>