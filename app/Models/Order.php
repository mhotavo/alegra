<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $dish_id
 * @property integer $state
 * @property string $created_at
 * @property string $updated_at
 * @property Dish $dish
 */
class Order extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    public const STATE = [
        NULL => 'En Proceso',
        0 => 'En Proceso',
        1 => 'Lista'
     ];

    public const COLOR = [
        NULL => 'warning',
        0 => 'warning',
        1 => 'success'
     ];

    /**
     * @var array
     */
    protected $fillable = ['dish_id', 'state', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dish()
    {
        return $this->belongsTo('App\Models\Dish', 'dish_id');
    }
    

    public function getStateAttribute()
    {
       return self::STATE[ $this->attributes['state'] ];
    }

    public function getColorAttribute()
    {
       return self::COLOR[ $this->attributes['state'] ];
    }
    
}
