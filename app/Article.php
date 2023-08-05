<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_article');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'article_commentaire');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_article');
    }

    //




}
