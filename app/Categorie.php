<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = ['id'];

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    //


}
