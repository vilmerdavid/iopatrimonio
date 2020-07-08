@extends('layouts.app')

@section('content')
@include('estaticas.menuIglesias',['iglesias'=>$iglesias,'tipo'=>$tipo])
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{ $iglesia->titulo }}

                    @auth
                    <a href="{{ route('editarIglesia',$iglesia->id) }}" class="float-right">Editar</a>
                    @endauth
                </div>
                <div class="card-body">
                    {!! $iglesia->detalle !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ Storage::url($iglesia->foto_secundario) }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<script>
    $('#{{ $iglesia->slug }}').addClass('bg-info');
</script>
@endsection
