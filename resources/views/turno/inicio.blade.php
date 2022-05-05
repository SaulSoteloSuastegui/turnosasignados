

@extends('layouts')


@section('css')
<link href="datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')



<div class="container mt-3">

@include('turno.crear')
  <p>Registro de:</p>
  <h2>Turnos</h2>
  <table id="turnos" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>Numero de investigación</th>
        <th>Tipo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($turno as $turnos)
      <tr>
        <td>{{$turnos->name}}</td>
        <td>{{$turnos->tipo}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
@section('js')
<script src="{{
asset('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{
asset('datatable/js/jquery-3.5.1.js') }}"></script>
<script src="{{
asset('datatable/js/jquery.dataTables.min.js') }}"></script>
<script>  
$(document).ready(function() {
$('#turnos').DataTable();
} );
</script>
@endsection