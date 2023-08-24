<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eglise extends Model
{
    protected $guarded = ['id'];

    public function activites()
    {
        return $this->belongsToMany(Activite::class, 'activite_eglise');
    }

    public function responsables()
    {
        return $this->belongsToMany(Responsable::class, 'eglise_responsable');
    }

    public function code()
    {
        return $this->hasOne(Code::class, 'eglise_id');
    }

    //



}
