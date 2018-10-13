<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     protected $table = 'valoda';

    public function actor() {
        return $this->belongsTo('App\Actor');
    }

}
