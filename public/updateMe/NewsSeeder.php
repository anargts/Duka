<?php 
class NewsSeeder extends Seeder{
        public function run()
        {
            DB::table('news')->truncate();
            
            //1
            $news = News::create(array(
                'title' => "'Монгол наадам цогцолбор'-т хийх их засварын ажилд шаардлагатай санхүүжилтыг шийджээ",
                'content' => 'БАнбан дондон',
                'type' => 2
            ));

            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //2
            $news = News::create(array(
                'title' => "Улаанбаатар хотод анх удаагаа 'Өвлийн наадам' зохион байгууллаа",
                'content' => "
<strong>Алтай сум</strong><div class='clear'></div>
Хүчит 64 бөх барилдаж, Буянт сумын харьяат МУИС-ийн оюутан залуу бөх  Б.Айбек түрүүлж сумын заан, Дэлүүн сумын харьяат залуу бөх Т.Эрболат үзүүрлэж сумын начин цол тус тус хүртжээ. Долдугаар сарын 10,11-ний өдрүүдэд Баяннуур сум наадмаа хийж, сумын заан Самарханы Заманбек түрүүлж, аймгийн начин Жанболат үзүүрлэжээ.<div class='clear'></div>
<strong>Буянт сум</strong><div class='clear'></div>
Буянт сумын 70 жилийн ой, долдугаар сарын 20-нд болж 128 барилдан, аймгийн арслан Б.Баатарцол түрүүлж, аймгийн арслан М.Эркебулан үзүүрлэв. Цэргийн арслан Б.Ганзориг, аймгийн арслан Н.Батсайхан нар шөвгөрсөн байна.<div class='clear'></div>
<strong>Цэнгэл сум</strong><div class='clear'></div>
Цэнгэл сумын баяр наадамд 64 бөх барилдаж, тус сумын харьяат МУИС-ийн оюутан Киланы Казбек түрүүлж сумын заан цол, залуу бөх Хутты үзүүрлэж сумын начин цол хүртсэн. Сумын заан Дулат, У.Береке нар их шөвөгт үлдсэн.<div class='clear'></div>
<strong>Улаанхус сум</strong><div class='clear'></div>
Улаанхус сумын баяр наадамд тус сумын харьяат ДХИС-ийн оюутан Эркенбек түрүүлж сумын заан цол хүртэж, аймгийн арслан М.Эркебулан үзүүр булаав. Дэлүүн сумын баяр наадамд Өлгий сумын харьяат залуу бөх Баасанжав түрүүлж, мөн Өлгий сумын харьяат Болат үзүүрлэв. Хоёр бөх хоёулаа сумын шинэ цолтнууд болжээ.
                ",
                'type' => 1
            ));
            
            //3
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();

            $news = News::create(array(
                'title' => "Өмнөх наадмын аман хүзүү энэ наадмын түрүү боллоо",
                'content' => 'ЫЛөрохыбөлаоыхбөлаорыхбөлаорбө',
                'type' => 1
            ));

            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();

            //4
            $news = News::create(array(
                'title' => "Үндэсний их баяр наадамд 1024 бөх зодоглоно ",
                'content' => 'Welcome',
                'type' => 2
            ));
            
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();

            //5
            $news = News::create(array(
                'title' => "Ардын хувьсгал ялсны 93 жилийн ойн баяр наадам - Даага ",
                'content' => 'Duranhar',
                'type' => 1
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //6
            $news = News::create(array(
                'title' => "Улсын их баяр наадам Урианхайн сураар эхэллээ ",
                'content' => 'Project',
                'type' => 1
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
         
            //7
            $news = News::create(array(
                'title' => "Аймаг болон сумдын 'Баяр наадам'' хийх товыг танилцуулж байна  ",
                'content' => 'Project',
                'type' => 3
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
         
            //8
            $news = News::create(array(
                'title' => "Ж.Болдбаатар: Ардын хувьсгал шинж чанараараа үндэсний ардчилсан хувьсгал байсан юм ",
                'content' => 'Project',
                'type' => 2
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //9
            $news = News::create(array(
                'title' => "Аймаг болон сумдын 'Баяр наадам' хийх товыг танилцуулж байна  ",
                'content' => 'Project',
                'type' => 1
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //10
            $news = News::create(array(
                'title' => "Ардын хувьсгал ялсны 93 жилийн ойн баяр наадам - Даага ",
                'content' => 'Project',
                'type' => 3
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //11
            $news = News::create(array(
                'title' => "'Монгол наадам цогцолбор'-т хийх их засварын ажилд шаардлагатай санхүүжилтыг шийджээ ",
                'content' => 'Project',
                'type' => 2
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //12
            $news = News::create(array(
                'title' => "Улсын их баяр наадам Урианхайн сураар эхэллээ",
                'content' => 'Project',
                'type' => 3
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
            //13
            $news = News::create(array(
                'title' => "Улсын их баяр наадам Урианхайн сураар эхэллээ",
                'content' => 'Project',
                'type' => 1
            ));
            $news->imageUrl = 'uploads/news/thumbImage/'.$news->id.'.jpg';
            $news->save();
            
                     
        }
    }
?>
