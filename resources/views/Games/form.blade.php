@extends('layout')
@section('title')
    - @yield('formName')
@endsection
@section('body')
    @if($errors->any())
    <div class="row">
        <div class="col-md-12">
            @if($msj = Session::get('success'))
            <div class="row" id="alerta">
                <div class="col-md-4 offset-md-4">
                    <div class="alert alert-success">
                        <p><i class="fa-solid fa-check"></i>{{$msj}}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="alert alert-danger">
                <p>
                    <b>
                        <i class="fa-solid fa-times"></i>
                        Errores
                    </b>
                </p>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">@yield('formName')</div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form @yield('action') method="post" enctype="multipart/form-data">
                        @yield('method')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-id-badge"></i> </span>
                                    <input type="text" class="form-control" name="registroAbkc" placeholder="Registro ABKC" @isset($game) value={{$game->registroAbkc}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-dog"></i> </span>
                                    <input type="text" class="form-control" name="nombrePerro" placeholder="Nombre del Perro" @isset($game) value={{$game->nombrePerro}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i> Fecha Nacimiento del Can </span>
                                    <input type="date" class="form-control" name="fnac" placeholder="Fecha de Nacimiento" @isset($game) value={{$game->fnac}}  @endisset  required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i> </span>
                                    <input type="text" class="form-control" name="sexo" placeholder="Sexo" @isset($game) value={{$game->sexo}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                                    <input type="text" class="form-control" name="nomDueno" placeholder="Nombre del Dueño" @isset($game) value={{$game->nomDueno}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-map-marker-alt"></i> </span>
                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" @isset($game) value={{$game->direccion}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-city"></i> </span>
                                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" @isset($game) value={{$game->ciudad}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-map"></i> </span>
                                    <input type="text" class="form-control" name="estado" placeholder="Estado" @isset($game) value={{$game->estado}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i> </span>
                                    <input type="email" class="form-control" name="correo" placeholder="Correo" @isset($game) value={{$game->correo}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i> </span>
                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" @isset($game) value={{$game->telefono}}  @endisset required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Ingrese el nombre de la raza a presentar</h5>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-dog"></i> </span>
                                    <input type="text" class="form-control" name="muestraraza" placeholder="Muestra Raza" @isset($game) value={{$game->muestraraza}}  @endisset required>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="otraRaza"><i class="fa-solid fa-paw"></i> Otra Raza</label>
                                    <select class="form-select" name="otraRaza" id="otraRaza">
                                        <option value="">Seleccione una opción</option>
                                        <option value="0" @selected(old('otraRaza', $game->otraRaza ?? '') == 0)>No Aplica</option>
                                        <option value="1" @selected(old('otraRaza', $game->otraRaza ?? '') == 1)>3-6 meses</option>
                                        <option value="2" @selected(old('otraRaza', $game->otraRaza ?? '') == 2)>6-9 meses</option>
                                        <option value="3" @selected(old('otraRaza', $game->otraRaza ?? '') == 3)>9-12 meses</option>
                                        <option value="4" @selected(old('otraRaza', $game->otraRaza ?? '') == 4)>1-2 años</option>
                                        <option value="5" @selected(old('otraRaza', $game->otraRaza ?? '') == 5)>2-3 años</option>
                                        <option value="6" @selected(old('otraRaza', $game->otraRaza ?? '') == 6)>3 y más</option>
                                        <option value="7" @selected(old('otraRaza', $game->otraRaza ?? '') == 7)>Campeón</option>
                                        <option value="8" @selected(old('otraRaza', $game->otraRaza ?? '') == 8)>Campeón GR</option>
                                    </select>
                                </div>

                                <h5>American Bully</h5>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="estandar"><i class="fa-solid fa-chart-bar"></i> Standard</label>
                                    <select class="form-select" name="estandar" id="estandar">
                                        <option value="">Seleccione una opción</option>
                                        <option value="0" @selected(old('estandar', $game->estandar ?? '') == 0)>No aplica</option>
                                        <option value="1" @selected(old('estandar', $game->estandar ?? '') == 1)>3-6 meses</option>
                                        <option value="2" @selected(old('estandar', $game->estandar ?? '') == 2)>6-9 meses</option>
                                        <option value="3" @selected(old('estandar', $game->estandar ?? '') == 3)>9-12 meses</option>
                                        <option value="4" @selected(old('estandar', $game->estandar ?? '') == 4)>1-2 años</option>
                                        <option value="5" @selected(old('estandar', $game->estandar ?? '') == 5)>2-3 años</option>
                                        <option value="6" @selected(old('estandar', $game->estandar ?? '') == 6)>3 y más</option>
                                        <option value="7" @selected(old('estandar', $game->estandar ?? '') == 7)>Estándar CH</option>
                                        <option value="8" @selected(old('estandar', $game->estandar ?? '') == 8)>GR CH</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="sg"><i class="fa-solid fa-sort-numeric-down"></i> XL</label>
                                    <select class="form-select" name="sg" id="sg">
                                        <option value="">Seleccione una opción</option>
                                        <option value="0" @selected(old('sg', $game->sg ?? '') == 0)>No aplica</option>
                                        <option value="1" @selected(old('sg', $game->sg ?? '') == 1)>9-12 meses</option>
                                        <option value="2" @selected(old('sg', $game->sg ?? '') == 2)>1-2 años</option>
                                        <option value="3" @selected(old('sg', $game->sg ?? '') == 3)>2-3 años</option>
                                        <option value="4" @selected(old('sg', $game->sg ?? '') == 4)>3 y más</option>
                                        <option value="5" @selected(old('sg', $game->sg ?? '') == 5)>XL XL</option>
                                        <option value="6" @selected(old('sg', $game->sg ?? '') == 6)>GR CH XL</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="bolsillo"><i class="fa-solid fa-hand-holding"></i> Pocket</label>
                                    <select class="form-select" name="bolsillo" id="bolsillo">
                                        <option value="">Seleccione una opción</option>
                                        <option value="0" @selected(old('bolsillo', $game->bolsillo ?? '') == 0)>No aplica</option>
                                        <option value="1" @selected(old('bolsillo', $game->bolsillo ?? '') == 1)>1-2 años</option>
                                        <option value="2" @selected(old('bolsillo', $game->bolsillo ?? '') == 2)>2-3 años</option>
                                        <option value="3" @selected(old('bolsillo', $game->bolsillo ?? '') == 3)>3 y más</option>
                                        <option value="4" @selected(old('bolsillo', $game->bolsillo ?? '') == 4)>Bolsillo CH</option>
                                        <option value="5" @selected(old('bolsillo', $game->bolsillo ?? '') == 5)>GR CH</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="clasico"><i class="fa-solid fa-star"></i> Clásico</label>
                                    <select class="form-select" name="clasico" id="clasico">
                                        <option value="">Seleccione una opción</option>
                                        <option value="0" @selected(old('clasico', $game->clasico ?? '') == 0)>No aplica</option>
                                        <option value="1" @selected(old('clasico', $game->clasico ?? '') == 1)>1-2 años</option>
                                        <option value="2" @selected(old('clasico', $game->clasico ?? '') == 2)>2-3 años</option>
                                        <option value="3" @selected(old('clasico', $game->clasico ?? '') == 3)>3 y más</option>
                                        <option value="4" @selected(old('clasico', $game->clasico ?? '') == 4)>CH clásico</option>
                                        <option value="5" @selected(old('clasico', $game->clasico ?? '') == 5)>GR CH</option>
                                    </select>
                                </div>

                                <label for="formFile" class="form-label"><h6>Suba aquí imagen de su comprobante de pago:</h6></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-image"></i> </span>
                                    <input type="file" class="form-control" name="image" accept="image/*" placeholder="Suba su Comprobante de pago"  @isset($game) required  @endisset>
                                    @if(isset($game->image))
                                        <img src="{{ asset('storage/' . $game->image) }}" alt="Imagen del comprobante de pago" width="100">
                                    @endif
                                </div>

                                <label for="formFile2" class="form-label"><h6>Suba aquí imagen de su registro ABKC:</h6></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-image"></i> </span>
                                    <input type="file" class="form-control" name="image2" accept="image/*"   @isset($game) required  @endisset>
                                    @if(isset($game->image2))
                                        <img src="{{ asset('storage/' . $game->image2) }}" alt="Imagen del registro ABKC" width="100">
                                    @endif
                                </div>

                                <button class="btn btn-success" type="submit"> Guardar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
