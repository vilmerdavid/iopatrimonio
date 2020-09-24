@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
                                    
                                    

                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        
                                        <button type="button" class="btn btn-primary btn-sm" onclick="location.href='{{ route('editarIglesia',$i->id) }}'">Editar</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-url="{{ route('eliminarIglesia',$i->id) }}" onclick="eliminar(this);">Eliminar</button>    
                                    </div>

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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Administración de videos
                    </h4>
                    <hr>
                    <form action="{{ route('guardarVideos') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Url de video</label>
                          <input type="url" class="form-control" id="exampleInputEmail1" name="url" aria-describedby="emailHelp" placeholder="Ingrese url">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Título de video</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="titulo" placeholder="Ingrese título">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                              <option value="Ucumamayaya TV">Ucumamayaya TV</option>
                              <option value="Panzaleito">Panzaleito</option>
                            </select>
                          </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Url</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $vi)
                                    
                                <form action="{{ route('actualizarVideo') }}" method="POST">
                                    <tr>
                                        <td scope="row">
                                            @csrf
                                            <input type="hidden" name="id" id="id{{ $vi->id }}" value="{{ $vi->id }}">
                                            <input type="url" name="url" class="form-control" id="video{{ $vi->id }}"  placeholder="Url" value="{{ $vi->url }}">
                                        </td>
                                        <td>
                                            <input type="text" name="titulo" class="form-control" id="titulo{{ $vi->id }}"  placeholder="Título" value="{{ $vi->titulo }}">
                                        </td>
                                        <td>
                                            <select class="form-control" id="tipo{{ $vi->id }}" name="tipo">
                                                <option value="Ucumamayaya TV" {{ $vi->tipo=='Ucumamayaya TV'?'selected':'' }} >Ucumamayaya TV</option>
                                                <option value="Panzaleito" {{ $vi->tipo=='Panzaleito'?'selected':'' }} >Panzaleito</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                <button type="button" class="btn btn-danger btn-sm" data-url="{{ route('eliminarVideos',$vi->id) }}" onclick="eliminar(this);">Eliminar</button>    
                                            </div>
                                            
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    function eliminar(arg){

        var txt;
        var r = confirm("Confirme!\nAceptar o Cancelar.");
        if (r == true) {
            location.replace($(arg).data('url'));
        }
        
    }
    
</script>
@endsection
