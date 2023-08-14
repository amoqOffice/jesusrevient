<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $guarded = ['id'];

    public function activites()
    {
        return $this->belongsToMany(Activite::class, 'activite_rubrique');
    }

    //

}
