<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    /* Define relationship to comopser method */

    public function composer() {
        return $this->belongsTo('App\Composer');
    }

}
