@extends('layouts')
@section('content')

<div class="container mt-3">

  <p>Consuta de turno   </p>
  <h2>Turnos asignados</h2>

  <table class="table table-striped">
    <thead>
      <tr>
         <th>Juez</th>  
        <th>ci</th>
        <th>Orden de aprehension</th>
        <th>Con detenido</th>
        <th>Sin detenido</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>Patricia</td>
        <td>1</td>
        <td>1-</td>
        <td>2-</td>
        <td>1-</td>
        
      </tr>
      <tr>
          <td>Maria luisa</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
      </tr>

    </tbody>
  </table>
</div>

@endsection