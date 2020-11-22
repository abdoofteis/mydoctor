<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    public function doctors()
    {
        return $this->hasMany(doctor::class,'section');
    }
}
