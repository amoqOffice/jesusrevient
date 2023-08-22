<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    protected $guarded = ['id'];

    public function activite()
    {
        return $this->belongsTo(Activite::class, 'activite_id');
    }

    //

}
