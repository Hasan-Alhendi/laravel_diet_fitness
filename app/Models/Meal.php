<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Meal  extends Authenticatable implements JWTSubject
{
    protected $table = 'meal';

    protected $fillable = [
        'diet_id',
        'type',
        'protien',
        'carbohydrate',
        'fats'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    ################################################# Begin RelationShip #####################################################
    public function diet(){
        return $this->belongsTo(Diet::class,'diet_id');
    }

    public function foods(){
        return $this->belongsToMany(food::class,'meals_food','meal_id','food_id');
    }
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
