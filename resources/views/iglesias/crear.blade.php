@extends('layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear iglesia</div>

                <div class="card-body">
                    <form action="{{ route('guardarIglesia') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tipo" value="{{ $tipo }}">
                        <div class="form-group">
                            <label for="fotoprincipal">Foto principal</label>
                            <input type="file" name="foto_principal" class="form-control-file" id="fotoprincipal">
                          </div>

                        <div class="form-group">
                          <label for="titulo">Título</label>
                          <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese..">
                        </div>
                        
                        <div class="form-group">
                          <label for="detalle">Detalle</label>
                          <textarea class="form-control" name="detalle" id="detalle" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fotosecundario">Foto secundario</label>
                            <input type="file" name="foto_secundario" class="form-control-file" id="fotosecundario">
                          </div>

                          <div class="form-group">
                            <label for="fotofondo">Foto de fondo</label>
                            <input type="file" name="foto_fondo" class="form-control-file" id="fotofondo">
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  CKEDITOR.replace( 'detalle' );
</script>
@endsection
