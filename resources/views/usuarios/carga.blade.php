@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Prensa</a>
        </li>
        <li class="breadcrumb-item active">Importar y exportar datos</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Prensa</h1>
          <hr>
          <p>Seleccione cómo desea exportar los datos:</p>
          <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success">Exportar Excel xls (2003)</button></a>
          <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Exportar Excel xlsx (2007)</button></a>

            <br>
            <hr>
            
            <p>Haga click en el botón para importar los datos desde un archivo Excel:</p>
          <form action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

            @csrf



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


            <div class="col-md-6">
                <input type="file" name="ruta" />
                <button class="btn btn-primary">Importar archivo</button>
            </div>

        </form>

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