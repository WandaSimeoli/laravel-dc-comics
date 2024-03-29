<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic');
        Comic::truncate();
        foreach ($comics as $singleComic) { 
            $comic = new Comic;
            $comic->title=$singleComic['title'];
            $comic->description=$singleComic['description'];
            $comic->thumb=$singleComic['thumb'];
            $comic->price=$singleComic['price'];
            $comic->series=$singleComic['series'];
            $comic->sale_date=$singleComic['sale_date'];
            $comic->type=$singleComic['type'];
            $comic->artists=implode('|', $singleComic['artists']);
            $comic->writers=implode('|', $singleComic['writers']);
            $comic->save();
        }
    }
}
