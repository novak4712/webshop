<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bear extends Model
{
    //
    protected $fillable = ['name', 'type', 'danger_level'];

    public function fish(){
        return $this->hasone('App\Fish');
    }

    public function trees(){
        return $this->hasMany('App\Tree');
    }

    public function picnics(){
        return $this->belongsToMany('App\Picnic', 'bears_picnics', 'bear_id','picnic_id' );
    }
}
