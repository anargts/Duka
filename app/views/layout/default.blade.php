<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Дуранхар</title>

    <!-- Bootstrap -->
    
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('style.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic-ext') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Play:400,700&subset=latin,cyrillic-ext') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/pace.min.js') }}
    {{ HTML::script('js/custom.js') }}
    {{ HTML::script('js/bootstrapSlideInMenu-1.0.0.min.js') }}
     {{ HTML::style('css/slider.css') }}
    
   

    @yield('myScript')
    {{ HTML::script('js/jmpress.min.js') }}
    {{ HTML::script('js/jquery.jmslideshow.js') }}
    {{ HTML::script('js/modernizr.custom.48780.js') }}

            <noscript>
            <style>
            .step {
                width: 100%;
                position: relative;
            }
            .step:not(.active) {
                opacity: 1;
                filter: alpha(opacity=99);
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
            }
            .step:not(.active) a.jms-link{
                opacity: 1;
                margin-top: 40px;
            }
            </style>
        </noscript>
    </head>
    
    <body>
        <div id="hiddenform" style="z-index: 9999;">
        <div class="container">
            <form class="form-search">
                <input type="text" class="form-control" placeholder="Хайх үгээ бичнэ үү?">
                <button class="search" type="submit"> </button>
            </form>
            <span class="hidden_close"></span>
        </div>
    </div>
    <div id="hiddenform1" style="z-index: 9999;">
        <div class="login_error">
            <span>Таны нэр эсвэл нууц үг буруу байна. Дахин оролдож үзнэ үү.</span>
        </div>
            {{ Form::open(array('role' => 'form', 'action' => 'AuthController@postSignin', 'id' => 'login-form') ) }}
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Нэр">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Нууц үг">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Намайг сана
                    </label>
                    <div class="forgot">
                        <a href="#">Нууц үг мартсан *</a>
                    </div>
                </div>
                <div class="login_submit">
                    {{ Form::submit('Нэвтрэх',array('class' => 'btn btn-mail')) }}
                </div>

                {{ Form::close() }}


        <span class="hidden_close"></span>  
    </div>
    <header id="top">
        <div class="container top_area">
            <div class="row">
                <div class="col-md-6 utas">
                    <span>88643615</span>
                </div>
                <div class="col-md-6 head_nav nav nav-pills pull-right">
                <span id="login-button">Нэвтрэх</span>
                <button id="search-button" class="search"> </button>
        </div>
            <ul class="mobile-top-menu">

                                <li class="mobile-social-icons mobile-menu-item" style="width:33%;" data-width="33">
                                    <div class="top-social-icons menu-item-child">
                                        <ul>
                                            <li>
                                                <a class="hover-bg-color" href="#"><img src="img/facebook_big.png"></a>
                                            </li>
                                            <li>
                                                <a class="hover-bg-color" href="#"><img src="img/twitter_big.png"></a>
                                            </li>
                                            <li>
                                                <a class="hover-bg-color" href="#"><img src="img/google_big.png"></a>
                                            </li>
                                            <li>
                                                <a class="hover-bg-color" href="#"><img src="img/youtube_big.png"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="shrink" href="#"></a>
                                </li>
                            
                                <li class="mobile-phone-number mobile-menu-item" style="width:33%;" data-width="33">
                                    <div class="top-phone-number menu-item-child">
                                        <div>
                                            <span class="animate-opacity">+976 88643615 </span>
                                        </div>
                                    </div>
                                    <a class="shrink" href="#"></a>
                                </li>
                                                        
                                                            <li class="mobile-search-box mobile-menu-item" style="width:33%;" data-width="33">
                                    <form method="get" id="search-form" action="http://prizm.mn/">
     <div class="search-box menu-item-child">
        <input class="search-box-text" type="text" placeholder="Хайх" name="s" id="s" />
        <input class="search-box-submit" type="submit" id="search-submit" value="" />
    </div>
</form>                                 <a class="shrink" href="#"></a>
                                </li>
                            
                        </ul>
            </div>
        </div>
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        {{ HTML::decode(HTML::linkRoute('index', HTML::image('img/logo.png', 'thumb-image', array('class'=>'navbar-brand')) )) }}
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pills pull-right">
                            
                            <li class="active">{{ HTML::linkRoute('index', 'Эхлэл') }}</li>
                            <li><a href="#">Дуранхар</a></li>
                            <li>{{ HTML::linkRoute('newsIndex', 'Мэдээ') }}</li>
                            <!--
                            <li><a href="#">Уралдаан</a>		</li>
                            -->
                            <li>{{ HTML::linkRoute('raceIndex', 'Уралдаан') }}</li>
                            
                            <li class="live_nav"><a href="#">LIVE</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
   
    <div id="mainpage" class="container">
        
        @yield('mainpage')
    </div>

                  
  <footer>
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <h3 class="footer_title">Тусламж</h3>
                <ul class="footer_menu">
                    <li><a href="#">Дуранхар төхөөрөмжийн тухай</a></li>
                    <li><a href="#">Түгээмэл асуулт хариултууд</a></li>
                    <li><a href="#">Танилцуулга татаж авах</a></li>
                    <li><a href="#">Сайтын бүтэц</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="footer_title">Хамтрагч</h3>
                <ul class="footer_menu">
                    <li><a href="#">Монгол Улсын Засгийн Газар</a></li>
                    <li><a href="#">Морин Уралдааны Холбоо</a></li>
                    <li><a href="#">Телевизүүдийн Холбоо</a></li>
                    <li><a href="#">Практикал даатгал</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="footer_title">Компани</h3>
                <ul class="footer_menu">
                    <li><a href="#">Манай компанийн тухай</a></li>
                    <li><a href="#">Үйлчилгээний нөхцөл</a></li>
                    <li><a href="#">Бидэнтэй хамтрах</a></li>
                    <li><a href="#">Холбоо барих</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="footer_title">Нэгдэх</h3>
                <ul class="social">
                    <a href="#"><li class="fb" data-toggle="tooltip" data-placement="top" title="Facebook">a</li></a>
                    <a href="#"><li class="tw" data-toggle="tooltip" data-placement="top" title="Twitter">a</li></a>
                    <a href="#"><li class="gp" data-toggle="tooltip" data-placement="top" title="Google+">a</li></a>
                    <a href="#"><li class="yt" data-toggle="tooltip" data-placement="top" title="Youtube">a</li></a>
                    <a href="#top" class="back_top"><li class="up" data-toggle="tooltip" data-placement="top" title="Дээшлэх">a</li></a>
                </ul>
                <div class="clear"></div>
                <!--
                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" id="submitmail" placeholder="И-мэйл бүртгүүлэх">
                    </div>
                    <button type="submit" class="btn btn-mail"></button>
                </form>
                -->
                {{ Form::open(array('role' => 'form'), array('action' => array('HomeController@postEmail')) ) }}
                    <div class="form-group">
                        <input type="email" class="form-control" id="submitmail" placeholder="И-мэйл бүртгүүлэх">
                    </div>
                {{ Form::submit(' ',array('class' => 'btn btn-mail')) }}
                {{ Form::close() }}

            </div>
            </div>
        </div>
        <div class="copyright">
                <div class="container">
                    <div class="url">
                        <p>&copy; 2014. Софт Плас ХХК</p>
                    </div>
                </div>
        </div>
    
    </footer>
  </body>
  <script>
    jQuery( document ).ready( function( e ) {
        $( '#login-form' ).on( 'submit', function() {
            $.post(
                $( this ).prop( 'action' ),
                {
                    "_token": $( this ).find( 'input[name=_token]' ).val(),
                    "email": $( '#exampleInputEmail1' ).val(),
                    "password": $( '#exampleInputPassword1' ).val()
                },
                function( data ) {
                    alert(data.success);
                },
                'json'
            );
            return false;
        } );
    } );
  </script>
</html>
