<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index()
    {
        // echo 'olla,categoria';
        // exit();
        return view('categorias.index');
    }
}
