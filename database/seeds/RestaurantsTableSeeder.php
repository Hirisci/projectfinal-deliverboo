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
                "img" => "default/ImgRestaurant/McdonaldsBanner.avif",
                "logo" => "default/logoRestaurant/McDonalds-logo.png",
                "vat" => "12345678910",
                "user_id" => "1",
                "category" =>  ['5'],
            ],
            [
                "name" => "Pizzeria Toto",
                "address" => "Amerigo Vespucci, 2, 20032 Cormano MI",
                "img" => "default/ImgRestaurant/toto.jpg",
                "logo" => "default/logoRestaurant/totopizza.png",
                "vat" => "12345678911",
                "user_id" => "2",
                "category" => ['4','1'],
            ],
            [
                "name" => "KFC",
                "address" => "Via Bombreis, 2, 20123 Napoli NA",
                "img" => "default/ImgRestaurant/KFCBanner.jpg",
                "logo" => "default/logoRestaurant/KFC-Logo.png",
                "vat" => "12345678912",
                "user_id" => "3",
                "category" => ['5'],
            ],
            [
                "name" => "POKESCUSE",
                "address" => "Via Mazzin, 2, 20123 Milano MI",
                "img" => "default/ImgRestaurant/PokeBanner.jpg",
                "logo" => "default/logoRestaurant/pokescuse.png",
                "vat" => "12345678913",
                "user_id" => "4",
                "category" => ['3','2'],
            ],
            [
                "name" => "Domino's Pizza",
                "address" => "Viale Dante, 4, 20123 Roma RM",
                "img" => "default/ImgRestaurant/DominosBanner.jpeg",
                "logo" => "default/logoRestaurant/dominos.jpg",
                "vat" => "12345678914",
                "user_id" => "5",
                "category" => ['5', '4'],
            ],
            [
                "name" => "Ponto Brasil",
                "address" => "Via Benedettine, 78, 20123 Milano MI",
                "img" => "default/ImgRestaurant/pontoBrasil.jpg",
                "logo" => "default/logoRestaurant/pontoBrasil.webp",
                "vat" => "12345678914",
                "user_id" => "6",
                "category" => ['6'],
            ],
            [
                "name" => "MEIWEI Restaurant",
                "address" => "Chinatown, 43, 20123 Milano MI",
                "img" => "default/ImgRestaurant/cineseBanner.jpg",
                "logo" => "default/logoRestaurant/cinese.png",
                "vat" => "12345678914",
                "user_id" => "7",
                "category" => ['7',],
            ],
            [
                "name" => "Pizza del Sole",
                "address" => "Piazza Duomo, 3, 20123 Milano MI",
                "img" => "default/ImgRestaurant/pizzadelsoleBanner.jpg",
                "logo" => "default/logoRestaurant/pizzaDelSole.png",
                "vat" => "12345678914",
                "user_id" => "8",
                "category" => ['1', '4'],
            ],
            [
                "name" => "Burger King",
                "address" => "Piazza Cavalli, 5, 20123 Milano MI",
                "img" => "default/ImgRestaurant/burgerKingBanner.jpg",
                "logo" => "default/logoRestaurant/burgerKing.png",
                "vat" => "12345678914",
                "user_id" => "8",
                "category" => ['1', '4'],
            ],

        ];


        foreach($restaurants as $restaurant){
            $newRestaurants = new Restaurant();
            $newRestaurants->name = $restaurant['name'];
            $newRestaurants->address = $restaurant['address'];
            $newRestaurants->img = $restaurant['img'];
            $newRestaurants->logo = $restaurant['logo'];
            $newRestaurants->vat = $restaurant['vat'];
            $newRestaurants->user_id = $restaurant['user_id'];
            $newRestaurants->save();
            $newRestaurants->categories()->sync($restaurant['category']);
        }


    }
}
