<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // campos que se van a insertar masivamente desactivado ya que usamos la validacion de campos
    // nunca desactivar con el request()->all() del controlador
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
