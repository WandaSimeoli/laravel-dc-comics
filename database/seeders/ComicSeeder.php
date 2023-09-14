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
        Comic::truncate();
        for ($i=0; $i < 10 ; $i++) { 
            $comic = new Comic;
            $comic->title=fake()->words(5, true);
            $comic->description=fake()->paragraph();
            $comic->thumb=fake()->imageUrl();
            $comic->price=fake()->randomFloat(2, 5, 50);
            $comic->series=fake()->words(2, true);
            $comic->sale_date=fake()->date();
            $comic->type='comic book';
            $comic->artists=fake()->lastName();
            $comic->writers=fake()->lastName();
            $comic->save();
        }
    }
}
