<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = ['id'];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_commentaire');
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'commentaire_reponse');
    }

    public function membre()
    {
        return $this->belongsTo(Membre::class, 'membre_commentaire');
    }

    //



}
