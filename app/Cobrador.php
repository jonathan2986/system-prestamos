<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobrador extends Model
{
    protected $table = 'cobradores';
    protected $fillable = ['nombre', 'apellido', 'direccion','telefono'];
}
