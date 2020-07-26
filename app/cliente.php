<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $primaryKey = "ID_CLIENTE";//id de la tabla
    protected $table = "cliente";//nombre de la tabla
    public $timestamps = false;
    protected $fillable = ['NOMBRE_CLIENTE', 'APELLIDO_CLIENTE', 'CEDULA_CLIENTE']; //Columnas de la base que se pueden modificar/
}
