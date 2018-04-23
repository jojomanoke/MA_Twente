<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $table = 'errors';

    public function priority(){
        return $this->hasOne(ErrorPriority::class, 'id', 'priority_id');
    }

    public function status(){
        return $this->hasOne(ErrorStatus::class , 'id', 'status_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function workspace(){
        return $this->hasOne(Workspace::class, 'id', 'workspace_id');
    }
}
