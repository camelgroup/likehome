<?php

namespace LikeHome\Http\Controllers;

use Illuminate\Http\Request;

use LikeHome\Http\Requests;
use LikeHome\PublicacionModel;
use Illuminate\Support\Facades\Redirect;
use LikeHome\Http\Requests\PublicacionRequest;

use DB;



class PublicacionController extends Controller
{
    /**
     * PublicacionController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {

        $publicaciones = PublicacionModel::paginate(25);
        return view ('publicacion.index', compact('publicaciones'));


    }
}
