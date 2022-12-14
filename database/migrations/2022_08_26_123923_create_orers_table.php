<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('price',5,2);
            $table->string('costumer_name',50); // `${client.name} ${client.lastName} `
            $table->string('costumer_number',50); // client.phone
            $table->string('costumer_address',100); // `{address.street}, {address.city}, {address.state}, {address.zip} `
            $table->string('costumer_ring',50); // `{address.ring}`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('orders');
    }
}
