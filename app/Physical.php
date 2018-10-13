<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
     protected $table = 'physical';

    public function actor() {
        return $this->belongsTo('App\Actor');
    }

}
