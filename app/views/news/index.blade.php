@extends('layout.default')
@section('myScript')
    {{ HTML::script('js/masonry.pkgd.min.js') }}
@stop

@section('mainpage')
<div class="row">
    <div class="col-md-8" id="mainleft">
        <ul id="tiles">
            <li class="news_single news_ontsloh">
                <div class="news_thumb">
                    {{ HTML::decode(HTML::linkRoute('newsView', HTML::image($fnews->imageUrl, 'thumb-image', array('class'=>'img-responsive')) , array('news' => $fnews->id))) }}
                    <div class="news_info">
                        <span>
                            <strong>{{ $fnews->cMonth() }}.{{ $fnews->cDay() }}</strong> / {{ $fnews->cYear() }}
                        </span>
                        <span class="news_category">
                            <a href="#category">
                                <img src="img/news/news_star.png">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="news_text col-md-12">
                    <span>
                        {{ $fnews->title }}
                    </span>
                    {{ HTML::decode(HTML::linkRoute('newsView', '<span class="delgerengui"></span>', array('news' => $fnews->id))) }}
                </div>
            </li>
            @foreach ($news as $n)
                <li class="news_single">
                    <div class="news_thumb">
                        {{ HTML::decode(HTML::linkRoute('newsView', HTML::image($n->imageUrl, 'thumb-image', array('class'=>'img-responsive')) , array('news' => $n->id))) }}
                        <div class="news_info">
                            <span>
                                <strong>{{ $n->cMonth() }}.{{ $n->cDay() }}</strong> / {{ $n->cYear() }}
                            </span>
                            <span class="news_category">
                            @if ($n->type==1)
                                <a href="#category"><img src="img/news/news_video.png"></a>
                            @else
                                <a href="#category"><img src="img/news/news_doc.png"></a>
                            @endif
                            </span>
                        </div>
                    </div>
                    <div class="news_text">
                        <span>
                            {{ $n->title }}
                        </span>
                        {{ HTML::decode(HTML::linkRoute('newsView', '<span class="delgerengui"></span>', array('news' => $n->id))) }}
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="paginavi">
            <a class="prevpagelink" href="#"></a>
            <span class="current">1</span>
            <a class="page_link" href="#">2</a>
            <a class="page_link" href="#">3</a>
            <a class="page_link" href="#">4</a>
            <a class="page_link" href="#">5</a>
            <a class="page_link" href="#">6</a>
            <a class="page_link" href="#">7</a>
            <span class="extend">...</span>
            <a class="page_link" href="#">21</a>
            <a class="page_link" href="#">22</a>
            <a class="nextpagelink" href="#"></a>
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
                                    <?php $stat = $race->status() ?>
                                    @if ($stat['state']=='F')
                                    <span>| Өндөрлөсөн</span>
                                    @elseif ($stat['state']=='P')
                                    <span>| Товлогдсон</span>
                                    @else
                                    <span>| Одоо уралдаж байна</span>
                                    @endif
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
                        {{ HTML::image('img/appstore.png', 'googleplay', array('class' => 'gray')) }}
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
