<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>ورود</title>
    <meta name="description" content="ورود به سایت">
    <meta name="author" content="9231003">

    <link rel="stylesheet" href="{{asset('auth/hw2-global.css')}}">
    <link rel="stylesheet" href="{{asset('auth/login.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-shabnam.css')}}">

</head>

<body>
<div id="header">
    <div class="fa fa-user fa-2x" id="header-icon"></div>
    <div id="header-title">ceitgames</div>
</div>
<div class="card">
    <form method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div id="card-header">ورود</div>
        <div class="card-item">
            <input type="text" placeholder="ایمیل" name="email">
            <span class="fa fa-envelope" id="fa-icon"></span>
        </div>
        <div class="card-item">
            <input type="password" placeholder="رمز عبور" name="password">
            <span class="fa fa-lock" id="fa-icon"></span>
        </div>
        <div class="card-item">
            <button type="submit" class="login-button">ورود</button>
        </div>
        <div class="card-item">
            <button class="pass-forgot-button">رمزمو یادم رفته</button>
        </div>
    </form>
</div>
<div class="card-item" id="card-footer">
    <span id="card-footer-text">حساب کاربری ندارید؟</span>
    <a id="signup-button" href="{{url('/register')}}">ثبت نام کنید</a>
</div>
</body>

</html>