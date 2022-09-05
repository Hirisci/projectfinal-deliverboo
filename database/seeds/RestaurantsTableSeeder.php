<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                "name" => "McDonald's",
                "address" => "Passaggio Duomo, 2, 20123 Milano MI",
                "img" => "default/ImgRestaurant/mc.webp",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "vat" => "12345678910",
                "user_id" => "1",
                "category" =>  ['5'],
            ],
            [
                "name" => "Pizzeria Toto",
                "address" => "Amerigo Vespucci, 2, 20032 Cormano MI",
                "img" => "default/ImgRestaurant/toto.jpg",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "vat" => "12345678911",
                "user_id" => "2",
                "category" => ['4','1'],
            ],
            [
                "name" => "KFC",
                "address" => "Via Bombreis, 2, 20123 Napoli NA",
                "img" => "default/ImgRestaurant/kfc.jpg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "vat" => "12345678912",
                "user_id" => "3",
                "category" => ['5'],
            ],
            [
                "name" => "POKESCUSE",
                "address" => "Via Mazzin, 2, 20123 Milano MI",
                "img" => "default/ImgRestaurant/poke.jpg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "vat" => "12345678913",
                "user_id" => "4",
                "category" => ['3','2'],
            ],
        ];


        foreach($restaurants as $restaurant){
            $newRestaurants = new Restaurant();
            $newRestaurants->name = $restaurant['name'];
            $newRestaurants->address = $restaurant['address'];
            $newRestaurants->img = $restaurant['img'];
            $newRestaurants->vat = $restaurant['vat'];
            $newRestaurants->user_id = $restaurant['user_id'];
            $newRestaurants->save();
            $newRestaurants->categories()->sync($restaurant['category']);
        }


    }
}
