<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Category;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id();
        // $table->string('email')->unique()->nullable();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->string('name')->nullable();
        // $table->string('slug'); // Field name same as your `saveSlugsTo`
        // $table->string('address')->nullable();
        // $table->string('img')->nullable();
        // $table->integer('vat')->nullable();
        // $table->rememberToken();
        // $table->timestamps();

        $restaurants = [
            [
                "name" => "McDonald's",
                "address" => "Passaggio Duomo, 2, 20123 Milano MI",
                "img" => "https://canaledieci.it/wp-content/uploads/2022/02/MC-CAFE-MC-DONALDS-ASSUNZIONI.jpg",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "email" => "test1@mail.com",
                "password" => "test1111",
                "categories" => ["5"],
                "vat" => "12345678901"
            ],
            [
                "name" => "Pizzeria Toto",
                "address" => "Amerigo Vespucci, 2, 20032 Cormano MI",
                "img" => "https://cdn.website.dish.co/media/67/1f/3459567/Pizzeria-da-Toto-14E99E06-EF7C-48A0-B68A-EE7DD1322FEA.jpg",
                "logo" => "https://i.pinimg.com/originals/3e/cb/a8/3ecba88bff841698cef03d71220adaf6.jpg",
                "email" => "test2@mail.com",
                "password" => "test1111",
                "categories" => ["4",'1'],
                "vat" => "12345678901"
            ],
            [
                "name" => "KFC",
                "address" => "Via Bombreis, 2, 20123 Napoli NA",
                "img" => "https://wine.pambianconews.com/wp-content/uploads/sites/15/2022/02/KFC-Dalmine-drive.jpeg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "email" => "test3@mail.com",
                "password" => "test1111",
                "categories" => ["5"],
                "vat" => "12345678901"
            ],
            [
                "name" => "POKESCUSE",
                "address" => "Via Mazzin, 2, 20123 Milano MI",
                "img" => "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/06/Poke-bowl-ricetta-7893.jpg",
                "logo" => "https://www.romaest.cc/fileadmin/user_upload/GLOBAL/brand_stores/logos/kfc.jpg",
                "email" => "test4@mail.com",
                "password" => "test1111",
                "categories" => ["2","3"],
                "vat" => "12345678901"
            ],
            [
                "name" => "Burgez",
                "address" => "Corso di Porta Ticinese, 14, 20123 Milano MI",
                "img" => "https://citynews-romatoday.stgy.ovh/~media/original-hi/6397732467681/burgez-hamburger-patatine-2.jpg",
                "logo" => "https://uploads-ssl.webflow.com/5f5f9253a89fff35ab6eac67/5fa58f6bb63ce9450b799f15_logo-burgez-single-w.png",
                "email" => "test5@mail.com",
                "password" => "test1111",
                "vat" => "22060101051"
            ],
        ];

        foreach($restaurants as $restaurant){
            $newUser = new User();
            $newUser->name = $restaurant['name'];
            $newUser->address = $restaurant['address'];
            $newUser->img = $restaurant['img'];
            $newUser->email = $restaurant['email'];
            $newUser->password = Hash::make($restaurant['password']);
            $newUser->vat = $restaurant['vat'];
            $newUser->save();

        }
    }
}
