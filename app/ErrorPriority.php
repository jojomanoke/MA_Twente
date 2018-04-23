<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorPriority extends Model
{
    protected $table = 'errors_priority';

    public function errors(){
        return $this->hasMany(Error::class, 'id', 'priority_id');
    }
}
