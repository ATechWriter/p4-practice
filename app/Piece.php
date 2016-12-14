<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    public function composer() {
        return $this->belongsTo('App\Composer');
    }
}
