@extends('layout.default')

@section('title')
{{ $news->title }}
@stop

@section('mainpage')
<div class="row">
    <div class="col-md-8" id="mainleft">    
        <div class="news_veiw">
            <div class="news_single news_ontsloh">
                <div class="news_thumb">
                    {{ HTML::image($news->imageUrl, 'Image', array('class'=>'img-responsive')) }}
                    <div class="news_info">
                        <span><strong>{{ $news->cMonth() }}.{{ $news->cDay() }}</strong> / {{ $news->cYear() }}</span>
                        <span class="news_category">
                            <a href="#category">
                                {{ HTML::image("img/news/news_star.png") }}
                            </a>
                        </span>
                    </div>
                </div>
                <div class="news_text col-md-12">
                    <span>
                        {{ $news->title }}
                    </span>
                </div>
            </div>
            <div class="news_content">
                <div class="post_header">
                    <div class="row">
                        <div class="news_category col-md-8">
                            @if ($news->type==1)
                                <a href="#category">{{ HTML::image('img/news/news_video.png') }}</a>
                            @else
                                <a href="#category">{{ HTML::image('img/news/news_doc.png') }}</a>
                            @endif
                        </div>
                        <div class="share_hover col-md-4">
                            <div class="post_share">
                                <span class="share"></span>
                            </div>
                            <ul class="share_buttons">
                                <a href="#fb"><li class="fb_share">{{ HTML::image('img/facebook.png', 'facebook', array('class' => 'gray')) }}</li></a>
                                <a href="#tw"><li class="tw_share">{{ HTML::image('img/twitter.png', 'twitter', array('class' => 'gray')) }}</li></a>
                                <a href="#google"><li class="gp_share">{{ HTML::image('img/google.png', 'google', array('class' => 'gray')) }}</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>
                    {{ $news->content }}
                </p>
            </div>
            <div class="post_footer">
                <!-- 
                     Change 2
                     <a class="prev_post" href="#">Өмнөх</a>
                 -->
                 <?php $i=$news->id ?>
                @if($i!='1')  
                 <?php $i-- ?>
                @endif
                {{ HTML::linkRoute('newsView','Өмнөх', array('news' => $i), array(
                'class'=>'prev_post')) }}
                <!--
                     Change 3
                    <a class="next_post" href="#">Дараах</a>
                -->
                 <?php $j=$news->id ?>
                @if($j!=News::count())  
                 <?php $j++ ?>
                @endif
                {{ HTML::linkRoute('newsView','Дараах', array('news' => $j), array(
                'class'=>'next_post')) }}
                
                    
            </div>
        </div>
    </div>
    <div class="col-md-4" id="widget">
        <div class="carousel slide carousel-fade" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="widget-header">
                        <h4>Улсын их баяр наадам</h4>
                    </div>
                    <ul>
                        <?php $i=0 ?>
                        @foreach ($ulsrace as $race)
                            <?php $i++ ?>
                            <li class="race_information">
                                <h3 class="garchig">
                                    {{$i}}. {{ $race->age }}
                                    <span>| Өндөрлөсөн</span>
                                </h3> 
                                <span class="mori">
                                    <strong>{{ $race->Horses->count() }}</strong> морьд
                                </span>
                                <span class="map">
                                    <strong>{{ $race->location }}</strong>
                                </span>
                                <div class="clear"></div> 
                                <span class="zam">
                                    <strong>{{ $race->length }}</strong> км
                                </span>
                                <span class="date">
                                    {{ $race->sMonth() }}.{{ $race->sDay() }} / {{ $race->sYear() }}
                                </span>
                                <span class="race_line"></span> 
                                <a href="#"><span class="watch_race"></span></a> 
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="item">
                    <div class="widget-header">
                        <h4>Аймгийн баяр наадам</h4>
                    </div>
                    <ul>
                        <?php $i=0 ?>
                        @foreach ($aimagrace as $race)
                        <?php $i++ ?>
                            <li class="race_information">
                                <h3 class="garchig">
                                    {{$i}}. {{ $race->age }}
                                    <span>| Өндөрлөсөн</span>
                                </h3> 
                                <span class="mori">
                                    <strong>{{ $race->Horses->count() }}</strong> морьд
                                </span>
                                <span class="map">
                                    <strong>{{ $race->location }}</strong>
                                </span>
                                <div class="clear"></div> 
                                <span class="zam">
                                    <strong>{{ $race->length }}</strong> км
                                </span>
                                <span class="date">
                                    {{ $race->sMonth() }}.{{ $race->sDay() }} / {{ $race->sYear() }}
                                </span>
                                <span class="race_line"></span> 
                                <a href="#"><span class="watch_race"></span></a> 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a data-slide="prev" href="#myCarousel" class="left carousel-control"></a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control"></a>
        </div>
        <div class="row">
            <div class="col-md-6 download">
                <div class="padding_left">
                    <a href="http://www.apple.com/osx/apps/app-store.html">
                        {{ HTML::image('img/appstore.png', 'appstore', array('class' => 'gray')) }}
                        App Store</br>
                        Татаж авах
                    </a>
                </div>
            </div>
            <div class="col-md-6  download">
                <div class="padding_right">
                    <a href="https://play.google.com/store">
                        {{ HTML::image('img/googleplay.png', 'googleplay', array('class' => 'gray')) }}
                        Google Play</br>
                        Татаж авах
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
