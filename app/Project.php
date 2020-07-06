<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // campos que se van a insertar masivamente
    protected $fillable = ['title','url' ,'description'];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
