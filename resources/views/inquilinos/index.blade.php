@extends('layouts.admin')
 
@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Inquilinos') }}</h1>
 
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
 
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('inquilinos.create') }}" class="btn btn-primary">{{ __('Agregar Inquilino') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Perfil</th>
                            <th>created_at</th>
                            <th>update_at</th>
                            <!--<th>Departamento</th>
                            <th>Servicios</th>
                            <th>Pagos</th>
                            <th>Fotos</th>-->
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($inquilinos as $inquilino)
                            <tr>
                                <td>{{ $inquilino->nombre }}</td>
                                <td>{{ $inquilino->correo_electronico }}</td>


                                //<td>{{ optional($inquilino->perfil)->nombre }}</td>
 
                                <td>
                                    <a href="{{ route('inquilinos.show', $inquilino) }}" class="btn btn-info btn-sm">{{ __('Ver') }}</a>
                                    <a href="{{ route('inquilinos.edit', $inquilino) }}" class="btn btn-warning btn-sm">{{ __('Editar') }}</a>
                                    <form action="{{ route('inquilinos.destroy', $inquilino) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection