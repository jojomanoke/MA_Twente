<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    public $timestamps = false;
    protected $table = 'workspace';

    public function computer_config(){
        return $this->hasOne(ComputerConfig::class);
    }

    public function software_config(){
        return $this->hasOne(SoftwareConfig::class);
    }
}
