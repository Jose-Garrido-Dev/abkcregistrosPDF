@extends('layout')
@section('title')
    - Listado
@endsection

@section('body')
    @if($msj = Session::get('success'))
        <div class="row" id="alerta">
            <div class="col-md-4 offset-md-4">
                <div class="alert alert-success">
                    <p><i class="fa-solid fa-check"></i>{{$msj}}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="table-responsive  rounded-">
                    <table class="table table-bordered table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>#</th>
                                <th>REGISTRO ABKC</th>
                                <th>NOMBRE DEL PERRO</th>
                          {{--   <th>FECHA DE NACIMIENTO</th>  --}}
                                <th>SEXO</th>
                                <th>NOMBRE DEL DUEÑO</th>
                                   <th>DIRECCIÓN</th>  
                           {{--     <th>CIUDAD</th>--}}
                            {{-- <th>ESTADO</th>--}}
                           {{--  <th>CORREO</th>  --}}
                                <th>TELÉFONO</th>
                           {{-- <th>OTRA RAZA</th>
                                <th>ESTÁNDAR</th>
                                <th>SG</th>
                                <th>BOLSILLO</th>
                                <th>CLÁSICO</th>--}}
                                <th>MUESTRA RAZA</th>
                                <th>COMPROBANTE DE PAGO</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($games as $i => $row)
                                <tr>
                                    <td>{{ ($games->currentPage() - 1) * $games->perPage() + $i + 1 }}</td>
                                    <td>{{$row->registroAbkc}}</td>
                                    <td>{{$row->nombrePerro}}</td>
                             {{--    <td>{{$row->fnac}}</td>--}}
                                    <td>{{$row->sexo}}</td>
                                    <td>{{$row->nomDueno}}</td>
                                 <td>{{$row->direccion}}</td> 
                             {{--       <td>{{$row->ciudad}}</td> --}}
                            {{--    <td>{{$row->estado}}</td> --}}
                            {{--    <td>{{$row->correo}}</td>--}}
                                    <td>{{$row->telefono}}</td>
                            {{--        <td>{{$row->otraRaza}}</td>
                                    <td>{{$row->estandar}}</td>
                                    <td>{{$row->sg}}</td>
                                    <td>{{$row->bolsillo}}</td>
                                    <td>{{$row->clasico}}</td>--}}
                                    <td>{{$row->muestraraza}}</td>
                                    <td>
                                        <img class="img-fluid" width="120" max-height="100" src="{{ $row->image? asset('/storage/'. $row->image) : asset('/img/default.png') }}" />
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{route('games.edit',$row->id)}}">
                                            Editar
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form id="frm_{{$row->id}}" method="POST" action="{{route('games.destroy',$row->id)}}"
                                            onclick="setInfo({{$row->id}},'{{$row->nombrePerro}}')">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalConf" >
                                                Borrar
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('games.show',$row->id)}}">
                                            Ver
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            {{ $games->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1"  id="modalConf">
        <div class="modal-dialog" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Estás seguro que deseas borrar?</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-xmark"></i></span>
            </button>
            </div>
            <div class="modal-body">
              <p><i Class="fa-solid fa-warning fs-3 text-warning"></i> <label id="lblNombre"></label></p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" id="btnEliminar"> Confirmar eliminación</button>
              <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

    <script>
            // para que despues de 3 segundos se borre el alerta
        setTimeout( () =>  {

            const alerta= document.querySelector('#alerta');
       
            if ( alerta !== null) {
                alerta.remove();
            } 
        }, 3000 );

 
        let btnEliminar = document.querySelector('#btnEliminar');
        let lblNombre = document.querySelector('#lblNombre');

        window.setInfo = (id,name) => {
            console.log("ID:", id);
            console.log("Nombre:", name);

            btnEliminar.setAttribute('data-id',id);
            lblNombre.innerHTML = 'Eliminarás el registro: <b>'+name+'</b>'
        }

        btnEliminar.addEventListener('click', () => {
        console.log('Enviando.....');
        let id = btnEliminar.getAttribute('data-id');
        let form = document.querySelector('#frm_' + id);
        form.submit(); // Enviar el formulario
    });

    
        
   </script>


@endsection
