@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Prensa</a>
        </li>
        <li class="breadcrumb-item active">Modificar usuario</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Prensa</h1>

						<p>Ingrese los datos a modificar del usuario:</p>
                        <form role="form" action='/usuarios/{{$usuario->id}}' method="post" style="width: 600px; margin: auto;">
                        	            @csrf
                                      {{ method_field('PUT')}}

							            @if ($errors->any())

							                <div class="alert alert-danger">

							                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

							                    <ul>

							                        @foreach ($errors->all() as $error)

							                            <li>{{ $error }}</li>

							                        @endforeach

							                    </ul>

							                </div>

							            @endif



							            @if (Session::has('success'))

							                <div class="alert alert-success">

							                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

							                    <p>{{ Session::get('success') }}</p>

							                </div>

							            @endif
                            <fieldset>
                                <div class="form-group">
                                	Apellido
                                <input class="form-control" placeholder="Apellido" name="apellido" type="text" value="{{$usuario->apellido}}" autofocus required>
                                </div>
                                <div class="form-group">
                                	Nombre
                                    <input class="form-control" placeholder="Nombre" name="nombre" type="text" value="{{$usuario->nombre}}" required>
                                </div>
                                <div class="form-group">
                                	Género
                                  <select class="form-control" name="genero" value="{{$usuario->genero}}" required>
                                      <option selected="selected" >Seleccione un género </option>
                                      <option value="M">M </option>
                                      <option value="F">F </option>
                                      <option value="NC">NC </option>
                                  </select> 
                                </div>
                                <div class="form-group">
                                    Fecha nacimiento
																		<input class="form-control" placeholder="Fecha nacimiento" name="fecha_nacimiento" type="date" value="{{$usuario->fecha_nacimiento}}" required>
                                </div>
                                <div class="form-group">
                                    DNI
																		<input class="form-control" placeholder="DNI" name="dni" type="number" min="1" value="{{$usuario->dni}}" required>
                                </div>
                                <div class="form-group">
                                    Localidad
																		<input class="form-control" placeholder="Localidad" name="localidad" type="text" value="{{$usuario->localidad}}" required>
                                </div>
                                <div class="form-group">
                                    Barrio
																		<input class="form-control" placeholder="Barrio" name="barrio" type="text" value="{{$usuario->barrio}}" required>
                                </div>
                                <div class="form-group">
                                    Calle
																		<input class="form-control" placeholder="Calle" name="calle" type="text" value="{{$usuario->calle}}" required>
                                </div>
                                <div class="form-group">
                                    Número
																		<input class="form-control" placeholder="Número" name="numero" type="number" min="1" value="{{$usuario->numero}}" required>
                                </div>
                                <div class="form-group">
                                    Mail
																		<input class="form-control" placeholder="Mail" name="mail" type="email" value="{{$usuario->mail}}" required>
                                </div>
                                <div class="form-group">
                                    Teléfono Fijo
																		<input class="form-control" placeholder="Teléfono Fijo" name="telefono" type="number" min="1" value="{{$usuario->telefono}}" required>
                                </div>
                                <div class="form-group">
                                    Teléfono Celular
																		<input class="form-control" placeholder="Teléfono Celular" name="celular" type="number" min="1" value="{{$usuario->celular}}" required>
                                </div>
                                <div class="form-group">
                                    Origen
																		<input class="form-control" placeholder="Origen" name="origen" type="text" value="{{$usuario->origen}}" required>
                                </div>
                                <div class="form-group">
                                    Observaciones
																		<input class="form-control" placeholder="Observaciones" name="observaciones" type="text" value="{{$usuario->obervaciones}}">
                                </div>
                                <!--
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                              -->
                                <input type="submit" value="Actualizar">
                                <!-- Change this to a button or input when using this as a form 
                                <a href="{{ url ('') }}" class="btn btn-lg btn-success btn-block">Login</a> -->
                            </fieldset>
                        </form>
                        <br>

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @component('footer')
          
    @endcomponent
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection