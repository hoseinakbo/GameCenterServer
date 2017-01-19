<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>ثبت نام</title>
    <meta name="description" content="ثبت نام در سایت">
    <meta name="author" content="9231003">

    <link rel="stylesheet" href="{{asset('auth/hw2-global.css')}}">
    <link rel="stylesheet" href="{{asset('auth/register.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-shabnam.css')}}">
</head>

<body>
<div id="header">
    <div class="fa fa-user fa-2x" id="header-icon"></div>
    <div id="header-title">ceitgames</div>
</div>
<form class="card" action="{{ url('/register') }}" method="POST">
    {{ csrf_field() }}
    <div id="card-header">ثبت نام</div>
    <div class="card-item">
        <input type="text" placeholder="نام" name="name">
        <span class="fa fa-user" id="fa-icon"></span>
    </div>
    <div class="card-item">
        <input type="text" placeholder="ایمیل" name="email">
        <span class="fa fa-envelope" id="fa-icon"></span>
    </div>
    <div class="card-item">
        <input type="password" placeholder="رمز عبور" name="password">
        <span class="fa fa-lock" id="fa-icon"></span>
    </div>
    <div class="card-item">
        <input type="password" placeholder="تکرار رمز عبور" name="password_confirmation">
        <span class="fa fa-lock" id="fa-icon"></span>
    </div>
    <div class="card-item">
        <input type="checkbox" name="option" id="check1" checked/>
        <label for="check1">قوانین را می پذیرم
            <span class="fa-stack">
                		<i class="fa fa-square-o fa-stack-1x"></i>
                		<i class="fa fa-check fa-stack-1x"></i>
            		</span>
        </label>
    </div>
    <div class="card-item">
        <button type="submit" class="signup-button">ثبت نام</button>
    </div>
</form>
</body>

</html>