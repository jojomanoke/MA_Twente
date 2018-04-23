<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorStatus extends Model
{
    protected $table = 'errors_status';
    public $timestamps = false;
    public function errors(){
        return $this->belongsToMany(Error::class);
    }
}
