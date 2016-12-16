<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    /* Define relationship to Piece model */

    public function pieces() {
        return $this->hasMany('App\Piece');
    }

    /**
    * Retrieve existing authors to populate dropdown
    *
    */

    public static function getForDropdown() {

        $composers = Composer::orderBy('last_name', 'ASC')->get();

        $composers_for_dropdown = [];
        foreach($composers as $composer) {
            $composers_for_dropdown[$composer->id] = $composer->first_name.' '.$composer->last_name;
        }

        return $composers_for_dropdown;
    }

}
