<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('description',500);
            $table->double('price', 5, 2);
            $table->boolean('is_visible')->default(true);
            $table->string('img')->nullable()->default('https://media.istockphoto.com/photos/empty-plate-picture-id184592327?b=1&k=20&m=184592327&s=170667a&w=0&h=L_I8jhqKzc8cvRV0QgxcxII6-EK4P5ibueIKm_VeYqw=');
            $table->string('slug');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('plates');
        Schema::enableForeignKeyConstraints();
    }
}
