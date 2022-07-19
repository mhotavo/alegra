<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngredientDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredient_dish', function (Blueprint $table) {
            $table->foreign(['dish_id'], 'ingredient_dish_dish_id_foreign')->references(['id'])->on('dishes');
            $table->foreign(['ingredient_id'], 'ingredient_dish_ingredient_id_foreign')->references(['id'])->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredient_dish', function (Blueprint $table) {
            $table->dropForeign('ingredient_dish_dish_id_foreign');
            $table->dropForeign('ingredient_dish_ingredient_id_foreign');
        });
    }
}
