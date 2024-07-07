@extends('layout')

@section('title', '- Detalle del Registro')

@section('body')
    <div class="container py-4">
        <h2 class="text-center mb-4 text-light">Detalle del Registro</h2>

        <div class="card bg-light text-dark">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>ABKC #:</strong> {{ $game->registroAbkc }}
                    </div>
                    <div class="col-md-6">
                        <strong>Nombre registrado del perro:</strong> {{ $game->nombrePerro }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Fecha de nacimiento:</strong> {{ $game->fnac }}
                    </div>
                    <div class="col-md-6">
                        <strong>Sexo:</strong> {{ $game->sexo }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nombre del dueño:</strong> {{ $game->nomDueno }}
                    </div>
                    <div class="col-md-6">
                        <strong>Dirección:</strong> {{ $game->direccion }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Ciudad:</strong> {{ $game->ciudad }}
                    </div>
                    <div class="col-md-6">
                        <strong>Estado:</strong> {{ $game->estado }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Correo:</strong> {{ $game->correo }}
                    </div>
                    <div class="col-md-6">
                        <strong>Teléfono:</strong> {{ $game->telefono }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Otra Raza:</strong> 
                        @if($game->otraRaza == 1)
                            3-6 meses
                        @elseif($game->otraRaza == 2)
                            6-9 meses
                        @elseif($game->otraRaza == 3)
                            9-12 meses
                        @elseif($game->otraRaza == 4)
                            1-2 años
                        @elseif($game->otraRaza == 5)
                            2-3 años
                        @elseif($game->otraRaza == 6)
                            3 y más
                        @elseif($game->otraRaza == 7)
                            Campeón
                        @elseif($game->otraRaza == 8)
                            Campeón GR
                        @endif
                    </div>
                    <div class="col-md-6">
                        <strong>Estándar:</strong> 
                        @if($game->estandar == 1)
                            3-6 meses
                        @elseif($game->estandar == 2)
                            6-9 meses
                        @elseif($game->estandar == 3)
                            9-12 meses
                        @elseif($game->estandar == 4)
                            1-2 años
                        @elseif($game->estandar == 5)
                            2-3 años
                        @elseif($game->estandar == 6)
                            3 y más
                        @elseif($game->estandar == 7)
                            Estándar CH
                        @elseif($game->estandar == 8)
                            GR CH
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>SG:</strong> 
                        @if($game->sg == 1)
                            9-12 meses
                        @elseif($game->sg == 2)
                            1-2 años
                        @elseif($game->sg == 3)
                            2-3 años
                        @elseif($game->sg == 4)
                            3 y más
                        @elseif($game->sg == 5)
                            XL XL
                        @elseif($game->sg == 6)
                            GR CH XL
                        @endif
                    </div>
                    <div class="col-md-6">
                        <strong>Bolsillo:</strong> 
                        @if($game->bolsillo == 1)
                            1-2 años
                        @elseif($game->bolsillo == 2)
                            2-3 años
                        @elseif($game->bolsillo == 3)
                            3 y más
                        @elseif($game->bolsillo == 4)
                            Bolsillo CH
                        @elseif($game->bolsillo == 5)
                            GR CH
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Clásico:</strong> 
                        @if($game->clasico == 1)
                            1-2 años
                        @elseif($game->clasico == 2)
                            2-3 años
                        @elseif($game->clasico == 3)
                            3 y más
                        @elseif($game->clasico == 4)
                            CH clásico
                        @elseif($game->clasico == 5)
                            GR CH
                        @endif
                    </div>
                    <div class="col-md-6">
                        <strong>Muestra Raza:</strong> {{ $game->muestraraza }}
                    </div>
                </div>

                <hr class="bg-light">

                <div class="row mb-4 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3><strong>Comprobante de pago:</strong><br></h3>
                        <img src="{{ asset($game->image? '/storage/'. $game->image : 'img/default.png') }}" alt="Imagen de {{ $game->nombrePerro }}" class="img-fluid rounded" style="max-width: 100%; height: auto; max-height: 500px;">
                    </div>
                </div>
                
                <div class="row mb-4 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3><strong>Registro ABKC:</strong><br></h3>
                        <img src="{{ asset($game->image2? '/storage/'. $game->image2 : 'img/default.png') }}" alt="Imagen de {{ $game->nombrePerro }}" class="img-fluid rounded" style="max-width: 100%; height: auto; max-height: 500px;">
                    </div>
                </div>

                <div class="row mb-4 justify-content-center">
                    <div class="col-md-8 text-center">
                        <a href="{{ route('games.index') }}" class="btn btn-primary mr-3">Volver</a>
                        <a href="{{ route('games.exportPdf', ['id' => $game->id]) }}" class="btn btn-success" target="_blank">
                            Exportar a PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
