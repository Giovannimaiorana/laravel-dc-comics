<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{

    public function run()
    {
        $comicsList = config('comics');
        
        foreach($comicsList as $comic){
            $newComic = new comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();


        }
    }
}
