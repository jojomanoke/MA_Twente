<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareConfig extends Model
{
    protected $table = 'software_config';
    public $timestamps = false;
    public function workspace(){
        return $this->hasMany(Workspace::class, 'id', 'workspace_id');
    }
}
