<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>صفحه بازی</title>
    <meta name="description" content="صفحه بازی">
    <meta name="author" content="9231003">

    <link rel="stylesheet" href="{{asset('/store/styles/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/font-shabnam.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/prj-global.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/gameInfo.css')}}">
    <link rel="stylesheet" href="{{asset('/store/styles/leaderboard.css')}}">

    <!-- jQuery library -->
    <script src="{{ asset('/store/js/jquery.min.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="{{asset('/store/js/bootstrap/bootstrap.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-fixed-top">
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
                    <li><a href="{{url('/logout')}}"><i class="fa fa-user fa-2x" aria-hidden="true"></i><button type="button" class="btn btn-link btn-trailer">خروج</button></a></li>
                @else
                    <li><a href="{{url('/login')}}"><i class="fa fa-user fa-2x" aria-hidden="true"></i><button type="button" class="btn btn-link btn-trailer">ورود</button></a></li>
                @endif
            </ul>
            <form class="navbar-form navbar-left left-inner-addon">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control" placeholder="جست و جو...">
            </form>
        </div>
    </div>
</nav>

<div id="game-info">
    <img src="{{asset('/store/assets/pics/games/header.jpg')}}" id="header-img">
    <div class="container">
        <div class="row game-info-row">
            <div class="col-md-2 text-left">
                <h1><button type="button" class="btn btn-info">شروع بازی</button></h1>
            </div>
            <div class="col-md-8 text-right">
                <h1 id="header-title">Battlefield 4: Dragon's Teeth</h1>
                <p>اکشن، اول شخص، مولتی پلیر</p>
                <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-2 text-right">
                <div class="thumb-holder"><img src="{{asset('/store/assets/pics/games/thmub.jpg')}}" id="header-thumb"></div>
            </div>
        </div>
    </div>
</div>

<div id="tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1 text-center game-info-tab" id="pics-tab"><button onclick="showPicsTab()" type="button" class="btn btn-link"><h4>عکس ها و ویدئوها</h4></button></div>
            <div class="col-md-2 text-center game-info-tab" id="similar-tab"><button onclick="showSimilarTab()" type="button" class="btn btn-link"><h4>بازی های مشابه</h4></button></div>
            <div class="col-md-2 text-center game-info-tab" id="comments-tab"><button onclick="showCommentsTab()" type="button" class="btn btn-link"><h4>نظرات کاربران</h4></button></div>
            <div class="col-md-2 text-center game-info-tab" id="rank-tab"><button onclick="showRankTab()" type="button" class="btn btn-link"><h4>رتبه بندی و امتیازات</h4></button></div>
            <div class="col-md-2 text-center game-info-tab" id="info-tab"><button onclick="showInfoTab()" type="button" class="btn btn-link"><h4>اطلاعات بازی</h4></button></div>
        </div>
    </div>
</div>

<div id="page-content">
    <div class="container">

        <div id="content-info">
            <h2 class="text-right no-top-margin">اطلاعات بازی</h2>
            <hr>
            <h4 class="text-right" id="content-info-abstract"></h4>
            <p class="text-right" id="content-info-info"></p>
        </div>

        <div id="content-rank">
            <h2 class="text-right no-top-margin">رتبه بندی و امتیازات</h2>
            <hr>
            <div class="card">
                <div id="leaderboard-header">
                    <div class="header-item header-item-lower">
                        <div class="header-rank">٢‎</div>
                        <div class="header-pic header-pic-2"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="header-name">سروش صحت</div>
                        <div class="header-points">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                    </div>
                    <div class="header-item">
                        <div class="header-rank">١</div>
                        <div class="header-pic"> <img src="{{asset('/store/assets/pics/kareem.jpg')}}"> </div>
                        <div class="header-name">کریم عبدالجبار</div>
                        <div class="header-points">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                    </div>
                    <div class="header-item header-item-lower">
                        <div class="header-rank">٣‎</div>
                        <div class="header-pic header-pic-3"> <img src="{{asset('/store/assets/pics/alb.jpg')}}"> </div>
                        <div class="header-name">الب ارسلان</div>
                        <div class="header-points">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                    </div>
                </div>

                <div class="row">

                    <div class="leaderboard-item" id="leaderboard-title">
                        <div class="col-md-2">امتیاز</div>
                        <div class="col-md-2">تغییر رتبه</div>
                        <div class="col-md-2">سطح</div>
                        <div class="col-md-3 item-name"></div>
                        <div class="col-md-1">بازیکن</div>
                        <div class="col-md-2">رتبه</div>
                    </div>
                    <div class="leaderboard-item">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item grey-background">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item grey-background">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item grey-background">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>
                    <div class="leaderboard-item">
                        <div class="col-md-2 item-level">١‎۵٠‎٠‎٠‎٠‎٠‎٠‎٠‎</div>
                        <div class="col-md-2">(+170)</div>
                        <div class="col-md-2 item-level">‎32</div>
                        <div class="col-md-3 item-name">کاظم اسماعیلی</div>
                        <div class="col-md-1 item-pic"> <img src="{{asset('/store/assets/pics/sehat.jpg')}}"> </div>
                        <div class="col-md-2">۴</div>
                    </div>

                </div>
            </div>
        </div>


        <div id="content-comments" style="display: none">

            <div class="row">
                <div class="col-md-4 text-left">
                    @if(Auth::check())
                        <form method="POST" action="{{url('/games/'.$game.'/addcomment')}}">
                            {{ csrf_field() }}
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            <input type="text" placeholder="نظر جدید" name="comment">
                            <button type="submit"  class="btn btn-info">نظر دهید</button>
                        </form>
                    @endif
                </div>
                <div class="col-md-8">
                    <h2 class="inlined">نظرات کاربران</h2>
                    <p class="inlined">(84 کاربر)</p>
                </div>
            </div>
            <hr>
            <div class='row row-item'>
                <div class="col-md-2 text-left">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-8">
                    <div><p class="inlined">22 آذر 1395</p></div>
                    <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                </div>
                <div class="col-md-2 text-left">
                    <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                </div>
            </div>

            <div class="row row-item grey-background">
                <div class="col-md-2 text-left">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-8">
                    <div><p class="inlined">22 آذر 1395</p></div>
                    <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                </div>
                <div class="col-md-2 text-left">
                    <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                </div>
            </div>
            <div class='row row-item'>
                <div class="col-md-2 text-left">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-8">
                    <div><p class="inlined">22 آذر 1395</p></div>
                    <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                </div>
                <div class="col-md-2 text-left">
                    <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                </div>
            </div>
            <div class="row row-item grey-background">
                <div class="col-md-2 text-left">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-8">
                    <div><p class="inlined">22 آذر 1395</p></div>
                    <div><h4 class="inlined comment-text">ali: fdslfaldksfm</h4></div>
                </div>
                <div class="col-md-2 text-left">
                    <img src="{{asset('/store/assets/pics/kareem.jpg')}}" class="item-pic">
                </div>
            </div>

            <div class="row row-item text-center">
                <button type="button" class="btn btn-info">بارگزاری نظرات بیشتر</button>
            </div>
        </div>
        <!-- end page content -->


        <div id="content-similar">
            <h2 class="text-right no-top-margin">بازی های مشابه</h2>
            <hr>
            <div class="row">
            <div class="game-card col-md-3">
                <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                <div class="game-card-title text-right">Uncharted 4</div>
                <div class="game-card-category text-right">اکشن، تیراندازی</div>
                <div class="game-card-stars text-right">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="game-card col-md-3">
                <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                <div class="game-card-title text-right">Uncharted 4</div>
                <div class="game-card-category text-right">اکشن، تیراندازی</div>
                <div class="game-card-stars text-right">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="game-card col-md-3">
                <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                <div class="game-card-title text-right">Uncharted 4</div>
                <div class="game-card-category text-right">اکشن، تیراندازی</div>
                <div class="game-card-stars text-right">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="game-card col-md-3">
                <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                <div class="game-card-title text-right">Uncharted 4</div>
                <div class="game-card-category text-right">اکشن، تیراندازی</div>
                <div class="game-card-stars text-right">
                    <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            </div>
            <hr>
            <div class="row">
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="game-card col-md-3">
                    <img src="{{asset('/store/assets/pics/games/uncharted4.jpg')}}">
                    <div class="game-card-title text-right">Uncharted 4</div>
                    <div class="game-card-category text-right">اکشن، تیراندازی</div>
                    <div class="game-card-stars text-right">
                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-pics">
            <h2 class="text-right no-top-margin">عکس ها و ویدئوها</h2>
            <hr>
        </div>

    </div>
</div>

<div id="links">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-left site-name">
                <span class="grey-text">امیرکبیر</span> <span class="blue-text">استودیو</span> <i class="fa fa-gamepad fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">حریم خصوصی</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">سوالات متداول</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">ارتباط با سازندگان</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">درباره ما</button></div>
                    <div class="col-md-2 text-right"><button type="button" class="btn btn-link">صفحه اصلی</button></div>
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

<script src="{{asset('/store/js/gameInfo.js')}}"></script>

</body>

</html>