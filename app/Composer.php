<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    public function pieces() {
        return $this->hasMany('App\Piece');
    }
}
