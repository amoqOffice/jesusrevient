<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $guarded = ['id'];

    public function activites()
    {
        return $this->belongsToMany(Activite::class, 'activite_responsable');
    }

    public function eglises()
    {
        return $this->belongsToMany(Eglise::class, 'eglise_responsable');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'responsable_article');
    }

    //



}
