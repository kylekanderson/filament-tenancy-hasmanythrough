<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    protected $guarded = ['id'];

    public function project()
    {
        return $this->hasOneThrough(
            Project::class,
            Environment::class,
            'id',
            'id',
            'environment_id',
            'project_id'
        );
    }
}
