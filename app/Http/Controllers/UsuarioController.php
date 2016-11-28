<?php

namespace LikeHome\Http\Controllers;

use Illuminate\Http\Request;

use LikeHome\Http\Requests;
use LikeHome\Usuario;
use Illuminate\Support\Facades\Redirect;
use LikeHome\Http\Requests\UsuarioRequest;
use DB;

class UsuarioController extends Controller
{

    /**
     * UsuarioController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $usuarios = Usuario::paginate(25);

        return view('usuario.index', compact('usuarios'));
    }
}
