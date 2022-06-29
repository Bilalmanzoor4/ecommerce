<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orderproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orderproducts', function (Blueprint $table) {

            $table->increments('id');
            $table->string('orderid');
            $table->string('productid');
            $table->string('price');   
            $table->string('quantity');
            $table->string('totalprice');
            $table->rememberToken();
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
        //
    }
}
