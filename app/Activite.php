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

    public function responsables()
    {
        return $this->belongsToMany(Responsable::class, 'activite_responsable');
    }

    public function rubriques()
    {
        return $this->belongsToMany(Rubrique::class, 'activite_rubrique');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_activite');
    }

    //





}
