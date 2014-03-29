<?php

class NewsController extends BaseController{

    public function getIndex()
    {
        $fnews = News::find(11);
        $news = News::all();
        $ulsRace = Race::Uls();
        $aimagRace = Race::Aimag();
        return View::make('news.index')
            ->withFnews($fnews)
            ->withNews($news)
            ->withUlsrace($ulsRace)
            ->withAimagrace($aimagRace);
    }

    public function getView($news)
    {
        $ulsRace = Race::Uls();
        $aimagRace = Race::Aimag();
        return View::make('news.view')
            ->withNews($news)
            ->withUlsrace($ulsRace)
            ->withAimagrace($aimagRace);
    }
}
