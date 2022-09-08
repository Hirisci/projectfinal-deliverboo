<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $users = [
            [
                
                "email" => "test1@mail.com",
                "password" => "test1111",                "vat" => "12345678901"
            ],
            [              
                "email" => "test2@mail.com",
                "password" => "test1111",
            ],
            [
                "email" => "test3@mail.com",
                "password" => "test1111",
            ],
            [
                "email" => "test4@mail.com",
                "password" => "test1111",
            ],
            [
                "email" => "test5@mail.com",
                "password" => "test1111",
            ],
            [
                "email" => "test6@mail.com",
                "password" => "test1111",
            ],
            [
                "email" => "test7@mail.com",
                "password" => "test1111",
            ],
        ];

        foreach($users as $user){
            $newUser = new User();
            $newUser->email = $user['email'];
            $newUser->password = Hash::make($user['password']);
            $newUser->save();

        }
    }
}
