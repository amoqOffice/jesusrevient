<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];

    public function activites()
    {
        return $this->hasMany(Activite::class, 'type_id');
    }

    //


}
