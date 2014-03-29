<?php

Route::model('user',    'User');
Route::model('device',  'Device');
Route::model('horse',   'Horse');
Route::model('race',    'Race');
Route::model('trainer', 'Trainer');
Route::model('news', 'News');

Route::get('/', array(
  'as'   => 'index',
  'uses' => 'HomeController@getIndex'
));

//News routes
Route::group(array('prefix' => 'news'),function(){
    Route::get('/', array(
        'as'   => 'newsIndex',
        'uses' => 'NewsController@getIndex'
    ));
    Route::get('{news}', array(
        'as'   => 'newsView',
        'uses' => 'NewsController@getView'
    ));
});

//Race routes
Route::group(array('prefix' => 'race'),function(){
  Route::get('/',array(
    'as' => 'raceIndex',
    'uses' => 'RaceController@getIndex'
    ));
});

//Signin routes


Route::get('/test', 'TestController@getTest' );
Route::group(array('prefix' => 'auth'), function(){
  Route::post('signin', array( 'before' => 'guest',
    'uses' => 'AuthController@postSignin'
  ));

  Route::get('signout',array(
    'before' => 'auth',
    'uses' => 'AuthController@Signout'
  ));
});

// Route for mobile

Route::group(array('prefix' => 'mobile'), function(){

  // Mobile Authentication routes
  Route::post('signin', 'Mobile\Controller\AuthController@postSignin');
  Route::get('signout', 'Mobile\Controller\AuthController@getSignout');

  Route::get('horse', array(
    'as' => '',
    'uses' => 'Mobile\Controller\HomeController@getHorses'
  ));
  Route::get('horse/{horse}',array(
    'as' => 'horseInfo',
    'uses' => 'Mobile\Controller\HomeController@getHorseinfo'
  ));

  Route::get('race', array(
    'as' => 'allRaces',
    'uses' => 'Mobile\Controller\RaceController@getRaces'
  ));
  Route::get('race/{race}', array(
    'as' => 'raceHorses',
    'uses' => 'Mobile\Controller\RaceController@getRaceHorse'
  ));
  Route::get('race/{race}/result', array(
    'uses' => 'Mobile\Controller\RaceController@getRaceResult'
  ));
  Route::get('trainer/{trainer}', array(
    'as'   => 'trainerInfo',
    'uses' => 'Mobile\Controller\HomeController@getTrainer'
  ));
  Route::get('trainer/{trainer}/horse', array(
    'as'    => 'trainerHorse',
    'uses' => 'Mobile\Controller\HomeController@getTrainerHorse'
  ));
});
