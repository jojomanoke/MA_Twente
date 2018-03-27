<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $table = 'errors';

    public function priority(){
        return $this->hasOne(ErrorPriority::class);
    }

    public function status(){
        return $this->hasOne(ErrorStatus::class);
    }

    public function user_id(){
        return $this->hasOne(User::class);
    }
}
