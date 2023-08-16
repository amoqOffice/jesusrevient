<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = ['id'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'categorie_id');
    }

    //

}
