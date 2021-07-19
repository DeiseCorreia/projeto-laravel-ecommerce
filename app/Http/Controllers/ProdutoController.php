<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function create()
    {
        echo 'ollá,produto';
        exit();
        return view('produto.create');
    }
}
