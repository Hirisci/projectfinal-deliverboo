<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories= ['Italiano','Hawaiano', 'Poke', 'Pizza', 'Fast Food', 'Brasiliano', 'Cinese' ];

        foreach($categories as $category){
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
