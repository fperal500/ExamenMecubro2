<?php

namespace Examen2;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';

    protected $primaryKey='id';

    public $timestamps=false;

protected $fillable = [
    'id',
    'nombre',
    'apellido',
    'telefono',
    'Fecha_Nacimiento',
    'pais',
];

}