<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table='clientes';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre', 'direccion', 'telefono', 'email'
    ];
    protected $primaryKey = 'id';
}
