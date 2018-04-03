<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerConfig extends Model
{
    public $timestamps = false;
    protected $table = 'computer_config';

    public function workspace(){
        return $this->hasMany(Workspace::class, 'id', 'workspace_id');
    }
}
