@extends('plantilla')

@section('contenido')
<br>
<div class="row">
          <div class="col-12">
            <div class="card">
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Compras</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($Comp as $Compt)
                            <tr>
                                    <td>{{ $Compt->id }}</td>
                                    <td>{{ $Compt->nit }}</td>
                                    <td>{{ $Compt->nombre }}</td>
                                    <td>{{ $Compt->direccion }}</td>
                                    <td>{{ $Compt->fecha }}</td>
                                    <td>{{ $Compt->estado }}</td>
                               
                                 
                                    <td> 
                                    <a href="{{ route('Compras.editar', $Compt->id) }}"  class="btn btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
                                   <a href="{{ route('Compras.eliminar', $Compt->id) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection