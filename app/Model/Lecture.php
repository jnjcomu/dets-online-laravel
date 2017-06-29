<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model {

    public function teacher()
    {
        return $this->belongsTo('App\Model\Teacher');
    }
}
