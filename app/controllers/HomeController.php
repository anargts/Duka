<?php

class HomeController extends BaseController {
	public function getIndex()
	{
        $news = News::all();
        $ulsRace = Race::Uls();
        $aimagRace = Race::Aimag();
		return View::make('index')->withNews($news)->withUlsrace($ulsRace)->withAimagrace($aimagRace);
	}
	public function postEmail()
	{
		return View::make('news');
	}
}
