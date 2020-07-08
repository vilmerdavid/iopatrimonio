@extends('layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar iglesia</div>

                <div class="card-body">
                    <form action="{{ route('actualizarIglesia') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $iglesia->id }}" id="">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto principal</label>
                            <input type="file" name="foto_principal" class="form-control-file" id="exampleFormControlFile1">
                            @if (Storage::exists($iglesia->foto_principal))
                                <a href="{{ Storage::url($iglesia->foto_principal) }}" target="_blank">ver foto</a>
                            @endif
                          </div>

                        <div class="form-group">
                          <label for="exampleFormControlInput1">Título</label>
                          <input type="text" name="titulo" value="{{ $iglesia->titulo }}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Detalle</label>
                          <textarea class="form-control" name="detalle" id="exampleFormControlTextarea1" rows="3">{!! $iglesia->detalle !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto secundario</label>
                            <input type="file" name="foto_secundario" class="form-control-file" id="exampleFormControlFile1">
                            @if (Storage::exists($iglesia->foto_secundario))
                                <a href="{{ Storage::url($iglesia->foto_secundario) }}" target="_blank">ver foto</a>
                            @endif
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
