<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareConfig extends Model
{
    protected $table = 'software_config';

    public function workspace(){
        return $this->hasMany(Workspace::class);
    }
}
