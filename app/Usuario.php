<?php

namespace LikeHome;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario';

    protected $primaryKey = 'UsuarioId';

    public $timestamps = false;

    protected $fillable = [
        "UsuarioNombre",
        "UsuarioApellido",
        "UsuarioEmail",
        "UsuarioTelefono"
    ];
}
