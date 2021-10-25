@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-3"> Usuarios Guardados </h2>

                <!--Mensaje Flash-->
                @if(session('usuarioEliminado'))
                    <div class="alert alert-danger">
                        {{session('usuarioEliminado')}}
                    </div>
                @endif

                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr class="table-secondary font-weight-bold">
                        <td>Nombre</td>
                        <td>Direccion</td>
                        <td>Telefono</td>
                        <td>Email</td>
                        <td>Acciones</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->nombre}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary mb-2 mr-3" href="">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('Desea eliminar el usuario')" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </div>

        </div>

    </div>
@endsection
