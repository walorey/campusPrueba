@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->type=='admin')
                    <div class="card-header">Panel administrativo</div>

                     <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button type="button" class="btn btn-primary btn-lg">Crear usuario <i class="fas fa-user-plus"></i></button>
                        <button type="button" class="btn btn-secondary btn-lg">Ver usuarios <i class="far fa-address-card"></i></button>
                        <button type="button" class="btn btn-success btn-lg">Subir archivos <i class="far fa-arrow-alt-circle-up"></i></button>
                        <button type="button" class="btn btn-secondary btn-lg">Ver archivos <i class="far fa-file-alt"></i></button>

                    </div>

                @else
                    <div class="card-header">Material didactico</div>

                     <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action active">
                            Crases justo odio
                          </a>
                          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                          <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
</div>
@endsection
