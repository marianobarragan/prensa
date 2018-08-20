@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Prensa</a>
        </li>
        <li class="breadcrumb-item active">Listado</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Prensa</h1>
          <hr>
          <p>Desde aquí puede ver el listado de datos:</p>
          <!--
          <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success">Exportar Excel xls (2003)</button></a>
          <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Exportar Excel xlsx (2007)</button></a>
					-->
            
            
            
            <table class ="table table-bordered" id= "tabla_usuarios">
              <thead>
                <tr>
                  <th>
                    Apellido
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    DNI
                  </th>
                  <th>
                    Última modificación
                  </th>                  
                  <th>
                    Acción
                  </th>    
                </tr>
              </thead>
              <tbody>
                @foreach($usuarios as $u)
                <tr>
                  <td>
                    {{$u->apellido}}
                  </td>
                  <td>
                    {{$u->nombre}}
                  </td>
                  <td>
                    {{$u->dni}}
                  </td>
                  <td>
                    {{$u->updated_at}}
                  </td>                  
                  <td>
										<div style="width:90px;">
											<div style="float: left; width: 45px">
												<form method="GET" action="/horarios/{{$u->id}}/editar">
							        				
							        				{{ csrf_field() }}
													<!-- <input type="submit" value="Editar" class="btn btn-primary">-->
													<button type="submit" class="btn btn-info" title="Editar">
													  <i class="fa fa-edit fa-fw"></i>
													</button>
												</form>
											</div>
											<div style="float: right; width: 45px">
												<form method="POST" action="/horarios/{{$u->id}}">
													
													{{ method_field('DELETE')}}
							        				{{ csrf_field() }}
													
													<!-- <input type="submit" value="Eliminar" class="btn btn-danger"><i class="fa fa-user fa-fw"></i>-->
													<button type="submit" class="btn btn-danger" title="Borrar" onclick="return confirm('Este elemento será eliminado irreversiblemente. Está seguro?');">
													  <i class="fa fa-times fa-fw"></i>
													</button>						
												</form>
											</div>
										</div>                    
                  </td>                                    
                </tr>
                @endforeach
              </tbody>
            </table>

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
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