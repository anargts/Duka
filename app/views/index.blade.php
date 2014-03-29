@extends('layout.default')
@section('myScript')  
@stop

@section('mainpage')
<div class="row">
    <div class="col-md-8" id="mainleft">
        <section id="jms-slideshow" class="jms-slideshow">
            <div class="step" data-color="color-1">
                <img src="img/slider1.jpg" />
            </div>
            <div class="step" data-color="color-1" data-y="500" data-scale="0.4" data-rotate-x="30">
                <img src="img/slider2.jpg" />
            </div>
            <div class="step" data-color="color-1" data-y="500" data-scale="0.4" data-rotate-x="30">
                <img src="img/slider3.jpg" />
            </div>
        </section>

        <div class="banner">
            <img src="img/banner.png" class="img-responsive">
        </div>

        <div class="row">
            <?php $i=News::count() ?>
            @for ($j=$i; $j>$i-3; $j--)

                <?php $n=News::find($j) ?>
                <div class="col-md-4 news_single news_index">
                    <div class="news_thumb">
                       <!-- 
                        <a href="#"><img src="{{ $n->imageUrl }}" class="img-responsive"/></a>
                       -->
                      {{ HTML::decode(HTML::linkRoute('newsView', HTML::image($n->imageUrl, 'thumb-image', array('class'=>'img-responsive')) , array('news' => $n->id))) }}

                    </div>
                    <div class="news_text">
                        <span>
                            {{ $n->title }}
                        </span>
                        <!-- 
                          Change 1 
                          <a href="#"><span class="delgerengui"></span></a> 
                         -->
                        {{ HTML::decode(HTML::linkRoute('newsView', '<span class="delgerengui"></span>', array('news' => $j))) }}

                    </div>
                </div>
            @endfor
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
                        <!-- 
                          Change 4 
                          li number
                         -->
                        
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
                        {{ HTML::image('img/googleplay.png', 'appstore', array('class' => 'gray')) }}
                        Google Play</br>
                        Татаж авах
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
