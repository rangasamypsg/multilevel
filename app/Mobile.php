<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'manufacture','user_id'
    ];

    public function user(){
        //return $this->belongsTo('App\User');
        return $this->belongsTo('App\User');
    }
}
