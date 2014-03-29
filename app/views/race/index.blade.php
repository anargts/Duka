@extends('layout.default')
@section('myScript')
@stop


@section('mainpage')
	<div id="mainpage" class="container">
		<div class="row">
			<div class="col-md-8" id="mainleft">
				<div class="carousel slide carousel-fade" id="myCarousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="soon-header">
								<h4>Товлогдсон уралдаан <span class="race_name">| Улсын баяр наадам</span></h4>
							</div>
							<ul>
                                <?php $i=0 ?>
                                @foreach ($tUlsRace as $race) 
                                    <?php $i++ ?>
                                    <li class="col-md-6 soon_single">
                                        <div class="soon_information">
                                            <div class="race_number">{{ $i }}</div>
                                            <h3 class="garchig">
                                                <span class="date">
                                                    <strong>{{ $race->sMonth() }}.{{ $race->sDay() }}</strong> / {{ $race->sYear() }}
                                                </span>
                                                <span class="race_time">
                                                    06:02’03”
                                                </span>
                                            </h3>
                                            <ul>
                                                <li><span class="horse_age">{{ $race->age }}</span></li>
                                                <li><span class="mori">{{ $race->Horses->count() }} <b>морьд</b></span></li>
                                                <li><span class="zam">{{ $race->length }} <b>км</b></span></li>
                                                <li><span class="map">{{ $race->location }}</span></li>
                                                <li class="list_more"><a class="race_more" href="#">Цааш</a></li>
                                            </ul>
                                            <a href="#"><span class="watch_race"></span></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
						</div>
						<div class="item">
							<div class="soon-header">
								<h4>Товлогдсон уралдаан <span class="race_name">| Аймгийн баяр наадам</span></h4>
							</div>
							<ul>
                                <?php $i=0 ?>
                                @foreach ($tAimagRace as $race) 
                                    <?php $i++ ?>
                                    <li class="col-md-6 soon_single">
                                        <div class="soon_information">
                                            <div class="race_number">{{ $i }}</div>
                                            <h3 class="garchig">
                                                <span class="date">
                                                    <strong>{{ $race->sMonth() }}.{{ $race->sDay() }}</strong> / {{ $race->sYear() }}
                                                </span>
                                                <span class="race_time">
                                                    06:02’03”
                                                </span>
                                            </h3>
                                            <ul>
                                                <li><span class="horse_age">{{ $race->age }}</span></li>
                                                <li><span class="mori">{{ $race->Horses->count() }} <b>морьд</b></span></li>
                                                <li><span class="zam">{{ $race->length }} <b>км</b></span></li>
                                                <li><span class="map">{{ $race->location }}</span></li>
                                                <li class="list_more"><a class="race_more" href="#">Цааш</a></li>
                                            </ul>
                                            <a href="#"><span class="watch_race"></span></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
						</div>
					</div>
					<a data-slide="prev" href="#myCarousel" class="left carousel-white"></a>
					<a data-slide="next" href="#myCarousel" class="right carousel-white"></a>
				</div>
				<div class="ended_race clearfix">
					<div class="ended_header">
								<h4>Өндөрлөсөн уралдаан 
									<div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									    Нас <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu">
									    <li><a href="#" class="active">Ангилахгүй</a></li>
									    <li><a href="#">Даага</a></li>
									    <li><a href="#">Шүдлэн</a></li>
									    <li><a href="#">Хязаалан</a></li>
									    <li><a href="#">Соёолон</a></li>
									    <li><a href="#">Азарга</a></li>
									    <li><a href="#">Их нас</a></li>
									  </ul>
									</div>
									<div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									    Уралдаан <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu">
									    <li><a href="#">Ангилахгүй</a></li>
									    <li><a href="#" class="active">Улсын их баяр наадам</a></li>
									    <li><a href="#">Аймгийн наадам</a></li>
									    <li><a href="#">Бусад 1</a></li>
									    <li><a href="#">Бусад 2</a></li>
									    <li><a href="#">Бусад 3</a></li>
									  </ul>
									</div>
								</h4>
					</div>
						<ul class="paginavi_top">
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">1</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_one" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="../img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_one" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_one" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">2</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_two" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_two" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_two" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">3</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_three" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_three" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_three" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">4</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_four" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_four" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_four" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">5</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_five" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_five" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_five" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>
							<li class="ended_single">
								<div class="ended_information clearfix">
								<a href="#"><span class="watch_race"></span></a>
								<div class="race_number">6</div>
								<ul>
								<li><span class="horse_age_green"> Даага </span></li>
								<li><span class="race_name">Улсын баяр наадам</span></li>
								<li><span class="mori">388 <b>морьд</b></span></li>
								<li><span class="map">Улаанбаатар хот-Хүй долоон худаг</span></li>
								<li><span class="zam">21 <b>км</b></span></li>
								<li><span class="date">7.11<b>/2014</b></span></li>
								</ul>
								<div class="race_fin">
										<span class="race_bair">Эзэлсэн байр</span>
									<div id="race_six" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
										    <div class="item active">
										      <img src="img/horse1.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        12
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse2.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        23
										      </div>
										    </div>
										    <div class="item">
										      <img src="img/horse3.jpg" data-toggle="tooltip" data-placement="bottom" title="Морьны нэр зүс энд байна.">
										      <div class="carousel-caption">
										        45
										      </div>
										    </div>
 										</div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#race_six" data-slide="prev">
										  </a>
										  <a class="right carousel-control" href="#race_six" data-slide="next">
										  </a>
									</div>

								</div>
							</div>
							</li>							
						</ul>
						<div class="paginavi">
							<span class="current">2013</span>
							<a class="prevpagelink" href="#"></a>
							<a class="page_link" href="#">2014</a>
							<a class="page_link" href="#">2015</a>
							<a class="page_link" href="#">2016</a>
							<a class="page_link" href="#">2017</a>
							<a class="nextpagelink" href="#"></a>
						</div>
				</div>
			</div>
			<div class="col-md-4" id="widget">
				<div class="row">
					<div class="col-md-12">
						<div class="live_race">
							<div class="widget-header">
										<h4><strong>LIVE</strong> | Одоо уралдаж байна</h4>
							</div>
							<ul>
								<li class="race_information clearfix">
									<h3 class="garchig">Даага </h3>
									<span class="mori">388 морьд</span>
									<span class="map">Хүй долоон худаг</span>
									<div class="clear"></div>
									<span class="zam">21 км</span>
									<span class="date">7.11<b>/2014</b></span>
									<hr class="padding"/>
									<ul class="horse_bair">
										<li data-toggle="tooltip" data-placement="left" title="Морьны нэр зүс энд байна.">
											<img src="img/horse1.jpg">
											<span class="mori_bair">1</span>
										</li>
										<li data-toggle="tooltip" data-placement="left" title="Морьны нэр зүс энд байна.">
											<img src="img/horse2.jpg">
											<span class="mori_bair">2</span>											
										</li>
										<li data-toggle="tooltip" data-placement="left" title="Морьны нэр зүс энд байна.">
											<img src="img/horse3.jpg">
											<span class="mori_bair">3</span>											
										</li>
										<li data-toggle="tooltip" data-placement="left" title="Морьны нэр зүс энд байна.">
											<img src="img/horse2.jpg">
											<span class="mori_bair">4</span>											
										</li>
										<li data-toggle="tooltip" data-placement="left" title="Морьны нэр зүс энд байна.">
											<img src="img/horse1.jpg">
											<span class="mori_bair">5</span>											
										</li>
									</ul>
									<span class="race_line"></span>
									<a href="#"><span class="watch_race"></span></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 download">
						<div class="padding_left">
						<a href="#">
						<img src="img/appstore.png" class="gray">
						App Store</br>
						Татаж авах
						</a>
						</div>
					</div>
					<div class="col-md-6  download">
						<div class="padding_right">
						<a href="#">
						<img src="img/googleplay.png" class="gray">
						Google Play</br>
						Татаж авах
						</a>
						</div>
					</div>
				</div>
			</div>
	</div>
		</div>
@stop

