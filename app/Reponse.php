<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $guarded = ['id'];

    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class, 'commentaire_reponse');
    }

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_reponse');
    }

    //


}
