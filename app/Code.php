<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $guarded = ['id'];

    public function eglise()
    {
        return $this->belongsTo(Eglise::class);
    }

    //


}
