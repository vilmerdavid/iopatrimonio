{{-- si esta usuario conectado , mostrar opcion --}}
<div class="container-fluid">
@auth
    <a href="{{ route('crearIglesias',$tipo) }}" class="link">Crear nueva Iglesia</a>    
@endauth
@if (count($iglesias)>0)

    <div class="card">
        <div class="card-header">
            <div class="row justify-content-center text-center">
                @foreach ($iglesias as $i)
                <div class="col" id="{{ $i->slug }}">
                    <a href="{{ route('detalleIglesia',$i->slug) }}">
                        <img src="{{ Storage::url($i->foto_principal) }}" alt="" class="img-fluid" title="{{ $i->titulo }}" width="50px">
                        <small>
                            <br>
                            {{ $i->titulo }}
                        </small>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endif
</div>
