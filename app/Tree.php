<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    //
    protected $fillable = ['type', 'age', 'bear_id'];

    public function bear(){
        return $this->belongsTo('App\Bear');
    }

}
