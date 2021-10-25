<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Lista
    public function list(){
        $users= [ 'usuarios' ] = Usuario :: paginate ( 5 );

         vistaderetorno ( 'usuarios.list' , $users );
}
