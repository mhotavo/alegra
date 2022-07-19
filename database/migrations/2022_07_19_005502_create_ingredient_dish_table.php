<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_dish', function (Blueprint $table) {
            $table->unsignedBigInteger('ingredient_id');
            $table->unsignedBigInteger('recipe_id')->index('ingredient_recipe_recipe_id_foreign');
            $table->unsignedBigInteger('quantity');
            $table->timestamps();

            $table->primary(['ingredient_id', 'recipe_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_dish');
    }
}
