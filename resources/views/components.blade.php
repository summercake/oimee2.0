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
<div class="container m-5">
    <img src="{{url('/img/logo.png')}}" alt="Logo" width="80">
</div>
<div class="container m-5">
    <a href="" class="btn btn-main">Demo</a><br><br>
    <a href="" class="btn btn-main-yellow">Demo</a><br><br>
</div>
<div class="container mt-5 nav-section">
    <div class="row">
        <a href="#" class="navbar-brand p-0 ml-5">
            <img src="{{url('/img/logo.png')}}" width="80" alt="">
        </a>
        <div class="input-group">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    {{!! HTML::decode('<i class="fas fa-search fa-sm"></i>') !!}}
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <ul class="nav nav-inline">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled link</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>