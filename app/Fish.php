<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    //
    protected $fillable = ['weight', 'bear_id'];
    protected $table = 'fish';

    public function bear(){
        return $this->belongsTo('App\Bear');
    }

}
