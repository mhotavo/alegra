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
            $table->foreign(['recipe_id'], 'ingredient_recipe_recipe_id_foreign')->references(['id'])->on('dishes');
            $table->foreign(['ingredient_id'], 'ingredient_recipe_ingredient_id_foreign')->references(['id'])->on('ingredients');
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
            $table->dropForeign('ingredient_recipe_recipe_id_foreign');
            $table->dropForeign('ingredient_recipe_ingredient_id_foreign');
        });
    }
}
