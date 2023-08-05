<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $guarded = ['id'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'membre_commentaire');
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'membre_reponse');
    }

    //


}
