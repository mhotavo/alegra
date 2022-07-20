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
        Schema::table('dish_ingredient', function (Blueprint $table) {
            $table->foreign(['dish_id'], 'dish_ingredient_dish_id_foreign')->references(['id'])->on('dishes');
            $table->foreign(['ingredient_id'], 'dish_ingredient_ingredient_id_foreign')->references(['id'])->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dish_ingredient', function (Blueprint $table) {
            $table->dropForeign('dish_ingredient_dish_id_foreign');
            $table->dropForeign('dish_ingredient_ingredient_id_foreign');
        });
    }
}
