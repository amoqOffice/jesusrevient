<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $guarded = ['id'];

    public function eglises()
    {
        return $this->belongsToMany(Eglise::class, 'activite_eglise');
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'activite_type');
    }

    public function responsables()
    {
        return $this->belongsToMany(Responsable::class, 'activite_responsable');
    }

    //



}
