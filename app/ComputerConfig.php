<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerConfig extends Model
{
    protected $table = 'computer_config';

    public function workspace(){
        return $this->hasMany(Workspace::class, 'id', 'workspace_id');
    }
}
