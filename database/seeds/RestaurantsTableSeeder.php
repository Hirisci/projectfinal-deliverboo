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
                "img" => "https://canaledieci.it/wp-content/uploads/2022/02/MC-CAFE-MC-DONALDS-ASSUNZIONI.jpg",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "vat" => "1234",
                "user_id" => "1",
            ],
            [
                "name" => "Pizzeria Toto",
                "address" => "Amerigo Vespucci, 2, 20032 Cormano MI",
                "img" => "https://cdn.website.dish.co/media/67/1f/3459567/Pizzeria-da-Toto-14E99E06-EF7C-48A0-B68A-EE7DD1322FEA.jpg",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "vat" => "1234",
                "user_id" => "2",
            ],
            [
                "name" => "KFC",
                "address" => "Via Bombreis, 2, 20123 Napoli NA",
                "img" => "https://wine.pambianconews.com/wp-content/uploads/sites/15/2022/02/KFC-Dalmine-drive.jpeg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "vat" => "1234",
                "user_id" => "3",
            ],
            [
                "name" => "POKESCUSE",
                "address" => "Via Mazzin, 2, 20123 Milano MI",
                "img" => "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/06/Poke-bowl-ricetta-7893.jpg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "vat" => "1234",
                "user_id" => "4",
            ],
        ];


        foreach($restaurants as $restaurant){
            $newRestaurants = new Restaurant();
            $newRestaurants->name = $restaurant['address'];
            $newRestaurants->address = $restaurant['img'];
            $newRestaurants->img = $restaurant['img'];
            $newRestaurants->vat = $restaurant['vat'];
            $newRestaurants->user_id = $restaurant['user_id'];
            $newRestaurants->save();
        }


    }
}
