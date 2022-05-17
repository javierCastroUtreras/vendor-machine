<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('img'); // img route
            $table->double('preu', 2, 2); // 2 integers, 2 decimals
            $table->string('procedencia');
            $table->integer('kcud'); // kg/unitat
            $table->integer('kg100g'); // kc/100g
            $table->double('greixos', 2, 2);
            $table->double('carbohidrats', 2, 2);
            $table->double('proteines', 2, 2);
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
        Schema::dropIfExists('products');
    }
};
