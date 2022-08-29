<?php

use Illuminate\Database\Seeder;
use App\User;

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
                "mail" => "test1@mail.com",
                "password" => "$2y$10\$vPsht5Ye8dWukO9K4qyx3.6KXfGxjQ0S9MGP9zjA0.k.c2tJJItXW",
                "vat" => "12345678910"
            ],
        ];

        foreach($restaurants as $restaurant){
            $newUser = new User();
            $newUser->name = $restaurant['name'];
            $newUser->address = $restaurant['address'];
            $newUser->img = $restaurant['img'];
            $newUser->mail = $restaurant['mail'];
            $newUser->password = $restaurant['password'];
            $newUser->vat = $restaurant['vat'];
        }
    }
}
