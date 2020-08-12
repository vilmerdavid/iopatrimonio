@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Iglesias
                    <a href="{{ route('crearIglesias') }}" class="float-right">Crear nuevo</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                
                                <th scope="col">Foto principal</th>
                                <th scope="col">Título</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Foto secundario</th>
                                <th scope="col">Foto fondo</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Fecha</th>
                                <th>
                                    Acción
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              @foreach ($iglesias as $i)
                              <tr>
                                <th scope="row">
                                    <img src="{{ Storage::url($i->foto_principal) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                </th>
                                <td>
                                    {{ $i->titulo }}
                                </td>
                                <td>
                                    {!! Str::limit($i->detalle, 25, '...') !!}
                                </td>
                                <td>
                                    <img src="{{ Storage::url($i->foto_secundario) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                </td>
                                <td>
                                    <img src="{{ Storage::url($i->foto_fondo) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                </td>
                                <td>
                                    {{ $i->tipo }}
                                </td>
                                <td>
                                    {{ $i->created_at }}
                                </td>
                                <td>
                                    <a href="{{ route('editarIglesia',$i->id) }}" class="btn-link">Editar</a>
                                    <a href="{{ route('eliminarIglesia',$i->id) }}" class=" text-danger btn-link">Eliminar</a>
                                </td>
                            </tr>  
                              @endforeach
                                

                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $iglesias->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
