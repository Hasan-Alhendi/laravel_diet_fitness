<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Meals_food  extends Authenticatable implements JWTSubject
{
    protected $table = 'meals_food';

    protected $fillable = [
        'meal_id',
        'food_id',
        'quantity_weight',
        'quantity_str'
    ];

        ################################################# Begin RelationShip #####################################################
        // public function meal(){
        //     return $this->belongsTo(Meal::class,'meal_id');
        // }

        // public function food(){
        //     return $this->belongsTo(Food::class,'food_id');
        // }
    ###################################################### End RelationShip #######################################################


    use HasFactory;


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
