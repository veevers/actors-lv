<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'aktieris';

    public function language() {
        return $this->hasMany('App\Language');
    }
    public function physical() {
        return $this->hasMany('App\Physical');
    }
    public function portfolio() {
        return $this->hasMany('App\Portfolio');
    }

}
