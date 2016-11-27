<?php

namespace LikeHome;

use Illuminate\Database\Eloquent\Model;

class PublicacionModel extends Model
{
    protected $table = 'publicacion';
    protected $primaryKey = 'PublicacionId';

    public $timestamps = false;

    protected $fillable = [
         "PublicacionTitulo",
         "PublicacionDescripcion",
         "PublicacionPrecioNoche",
         "PublicacionNroHuespedes",
         "PublicacionNroCamas",
         "PublicacionNroDormitorios",
         "PublicacionCiudad",
         "PublicacionDireccionDescriptiva"

    ];



}
