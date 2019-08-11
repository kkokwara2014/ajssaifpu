<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
