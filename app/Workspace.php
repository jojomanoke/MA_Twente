<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $table = 'workspace';
    public $timestamps = false;
    public function computer_config(){
        return $this->hasOne(ComputerConfig::class);
    }

    public function software_config(){
        return $this->hasOne(SoftwareConfig::class);
    }
}
