<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    public function doctorCity()
    {
        return $this->belongsTo(city::class,'city');
    }
}
