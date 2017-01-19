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
        @if ($errors->has('email'))
            <div class="card-item">
                <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
                </span>
            </div>
        @endif
        @if ($errors->has('password'))
            <div class="card-item">
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            </div>
        @endif
        <div class="card-item">
            <input type="text" placeholder="ایمیل" name="email">
            <span class="fa fa-envelope" id="fa-icon"></span>
        </div>
        <div class="card-item">
            <input type="password" placeholder="رمز عبور" name="password">
            <span class="fa fa-lock" id="fa-icon"></span>
        </div>
        <div class="card-item">
            <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : ''}} id="check1" checked/>
            <label for="check1">مرا به خاطر بسپار
                <span class="fa-stack">
                		<i class="fa fa-square-o fa-stack-1x"></i>
                		<i class="fa fa-check fa-stack-1x"></i>
                </span>
            </label>
        </div>
        {{--<div class="card-item">--}}
            {{--<label>--}}
                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}} id="check1" checked> مرا به خاطر بسپار--}}
            {{--</label>--}}
        {{--</div>--}}
        <div class="card-item">
            <button type="submit" class="login-button">ورود</button>
        </div>
    </form>
    <div class="card-item">
        <button class="pass-forgot-button">رمزمو یادم رفته</button>
    </div>
</div>
<div class="card-item" id="card-footer">
    <span id="card-footer-text">حساب کاربری ندارید؟</span>
    <a id="signup-button" href="{{url('/register')}}">ثبت نام کنید</a>
</div>
</body>

</html>