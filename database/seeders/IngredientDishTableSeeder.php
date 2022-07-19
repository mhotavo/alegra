<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientDishTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredient_dish')->delete();
        
        \DB::table('ingredient_dish')->insert(array (
            0 => 
            array (
                'ingredient_id' => 1,
                'dish_id' => 2,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'ingredient_id' => 2,
                'dish_id' => 6,
                'quantity' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'ingredient_id' => 3,
                'dish_id' => 1,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'ingredient_id' => 3,
                'dish_id' => 3,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'ingredient_id' => 3,
                'dish_id' => 5,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'ingredient_id' => 3,
                'dish_id' => 6,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'ingredient_id' => 4,
                'dish_id' => 1,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'ingredient_id' => 4,
                'dish_id' => 3,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'ingredient_id' => 4,
                'dish_id' => 4,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'ingredient_id' => 5,
                'dish_id' => 2,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'ingredient_id' => 5,
                'dish_id' => 4,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'ingredient_id' => 5,
                'dish_id' => 6,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'ingredient_id' => 6,
                'dish_id' => 3,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'ingredient_id' => 6,
                'dish_id' => 5,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'ingredient_id' => 7,
                'dish_id' => 1,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'ingredient_id' => 7,
                'dish_id' => 2,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'ingredient_id' => 7,
                'dish_id' => 4,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'ingredient_id' => 7,
                'dish_id' => 6,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'ingredient_id' => 8,
                'dish_id' => 5,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'ingredient_id' => 9,
                'dish_id' => 1,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'ingredient_id' => 9,
                'dish_id' => 2,
                'quantity' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'ingredient_id' => 9,
                'dish_id' => 3,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'ingredient_id' => 9,
                'dish_id' => 4,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'ingredient_id' => 9,
                'dish_id' => 5,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'ingredient_id' => 10,
                'dish_id' => 1,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'ingredient_id' => 10,
                'dish_id' => 3,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'ingredient_id' => 10,
                'dish_id' => 4,
                'quantity' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'ingredient_id' => 10,
                'dish_id' => 5,
                'quantity' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}