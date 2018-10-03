<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product_Name');
            $table->string('Product_details');
            $table->timestamps();

              
            /**
             *  if we need add a foreign key constraint then
             *  the column should be unsigned integer
             */
            
            $table->integer('productcategory_id')->unsigned();


             /**
             *  Add foreign key constraints to these columns
             */
         
            $table->foreign('productcategory_id')->references('id')->on('productcategories');


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
}
