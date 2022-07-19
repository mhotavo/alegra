<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ingredient_id
 * @property integer $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property Ingredient $ingredient
 */
class Purchase extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['ingredient_id', 'quantity', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredient()
    {
        return $this->belongsTo('App\Models\Ingredient');
    }
}
