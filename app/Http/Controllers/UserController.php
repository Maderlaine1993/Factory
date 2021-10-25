<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Lista
    public function list()
    {
        $data['users'] = clientes::paginate(5);

        return view('usuarios.listar', $data);
    }
}
