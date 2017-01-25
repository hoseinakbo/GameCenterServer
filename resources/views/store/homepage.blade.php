<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>خانه</title>
    <meta name="description" content="خانه">
    <meta name="author" content="9231003">

    <link rel="stylesheet"  href="{{asset('/store/styles/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/home.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/font-shabnam.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/prj-global.css')}}">

    <!-- jQuery library -->
    <script src="{{ asset('/store/js/jquery.min.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="{{asset('/store/js/bootstrap/bootstrap.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{asset('/store/assets/owl-carousel/owl.carousel.css')}}">
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{asset('/store/assets/owl-carousel/owl.theme.css')}}">
    <!--  jQuery 1.7+  -->
    <script src="{{asset('/store/js/jquery-1.9.1.min.js')}}"></script>
    <!-- Include js plugin -->
    <script src="{{asset('/store/assets/owl-carousel/owl.carousel.js')}}"></script>
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-overlay">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/homepage')}}">امیرکبیر استودیو</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::check())
                    <li><a href="{{url('/logout')}}"><button type="button" class="btn btn-link btn-trailer">خروج</button></a></li>
                @else
                    <li><a href="{{url('/register')}}"><button type="button" class="btn btn-primary">ثبت نام</button></a></li>
                    <li><a href="{{url('/login')}}"><button type="button" class="btn btn-link btn-trailer">ورود</button></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div id="sync1" class="owl-carousel">
    <div class="carousel-item">
        <img src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="carousel-img">
        <h1>1</h1>
    </div>
    <div class="carousel-item">
        <img src="{{asset('/store/assets/pics/games/assassins-creed-3.jpg')}}" class="carousel-img">
        <h1>2</h1>
    </div>
    <div class="carousel-item">
        <img src="{{asset('/store/assets/pics/games/image_2.img.jpg')}}" class="carousel-img">
        <h1>3</h1>
    </div>
</div>
<div id="sync2" class="owl-carousel">
    <div class="carousel-item">
        <img  src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="carousel-img">
        <h1>1</h1>
    </div>
    <div class="carousel-item">
        <img src="{{asset('/store/assets/pics/games/assassins-creed-3.jpg')}}" class="carousel-img">
        <h1>2</h1>
    </div>
    <div class="carousel-item">
        <img src="{{asset('/store/assets/pics/games/image_2.img.jpg')}}" class="carousel-img">
        <h1>3</h1>
    </div>
</div>

<div id="newest-games">
    <div class="container">
        <h2 class="text-right">جدیدترین بازی ها</h2>
        <div id="games-div" class="container">
        </div>


        {{--<div id="owl-demo new_game-items" class="owl-carousel">--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
            {{--<div class="item new_game-item"><img data-src="{{asset('/store/assets/pics/games/cod-mw2-w2.jpg')}}" class="lazyOwl"></div>--}}
        {{--</div>--}}
    </div>
</div>

<div id="comments-and-guides">
    <div class="container" id="content-comments">
        <h2 class="text-right">نظرات کاربران و راهنمای بازی ها</h2>
        <p class="text-right">لورم ایپسوم یا طرح نما به متنی آزمایشی و بی معنی</p>
        <p class="text-right">.در صنعت چاپ، صفحه آرایی و طراحی گرافیک گفته می شود</p>
        <div class="row">
            <div class="col-md-6 text-right">
                <h3>آخرین راهنماهای بازی</h3>
                <div class='row row-item'>
                    <div class="col-md-10">
                        <div><p class="inlined">22 آذر 1395</p></div>
                        <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                    </div>
                    <div class="col-md-2 text-left">
                        <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                    </div>
                </div>
                <div class='row row-item'>
                    <div class="col-md-10">
                        <div><p class="inlined">22 آذر 1395</p></div>
                        <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                    </div>
                    <div class="col-md-2 text-left">
                        <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                    </div>
                </div>
                <div class='row row-item'>
                    <div class="col-md-10">
                        <div><p class="inlined">22 آذر 1395</p></div>
                        <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                    </div>
                    <div class="col-md-2 text-left">
                        <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                    </div>
                </div>
            </div>
            <div id="comments-div" class="col-md-6 text-right">
                <h3>نظرات و گفت و گوها</h3>
                {{--<div class='row row-item'>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<div><p class="inlined">22 آذر 1395</p></div>--}}
                        {{--<div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-2 text-left">--}}
                        {{--<img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class='row row-item'>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<div><p class="inlined">22 آذر 1395</p></div>--}}
                        {{--<div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-2 text-left">--}}
                        {{--<img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class='row row-item'>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<div><p class="inlined">22 آذر 1395</p></div>--}}
                        {{--<div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-2 text-left">--}}
                        {{--<img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

<div id="join-us">
    <div class="container">
        <!-- <img src="../assets/pics/games/assassins-creed-4.jpg" class="joins-us-img"> -->
        <h1 class="text-center">به جامعه بازی سازان امیرکبیر بپیوندید</h1>
        <p class="text-center">بیش از ۵۰۰۰ عضو از سراسر کشور</p>
        <p class="text-center"><a class="btn btn-default" href="#" role="button">به ما بپیوندید</a></p>
    </div>
</div>

<div id="links">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="grey-text">امیرکبیر</span> <span class="blue-text">استودیو</span> <i class="fa fa-gamepad fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">حریم خصوصی</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">سوالات متداول</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">ارتباط با سازندگان</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">درباره ما</button></div>
                    <div class="col-md-2 text-right"><a href="{{url('/homepage')}}"><button type="button" class="btn btn-link">صفحه اصلی</button></a></div>
                </div>
            </div>
        </div>
        <div class="text-right links-social-div">
            <span class="links-social-span"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></span>
            <span class="links-social-span"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></span>
            <span class="links-social-span"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></span>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-center">تمامی حقوق محفوظ و متعلق به دانشگاه امیرکبیر است</p>
    </div>
</div>

<script src="{{asset('/store/js/home.js')}}"></script>
<script src="{{asset('/store/js/carousel-implementer.js')}}"></script>

</body>

</html>