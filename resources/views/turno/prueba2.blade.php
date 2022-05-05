@extends('layouts')

@section('content')
<style>
.contenedor-grid {
display:grid;
grid-template-columns: 100px 1fr;
grid-template-rows:1fr 1fr 1fr;

grid-gap:5px;
}
.item{

}
.item-1{
    background-color:blue;
    
    grid-column: 2 / 2;
    grid-row: 1/ 4;
}
.item-2{
    background-color:green;
  
}
.item-3{
    background-color:red;
   
}
.item-4{
    background-color:black;
   
}



a {
  
  background-color: #00000008;
  padding: 10px;
  border-style: groove;
  border: 10 px;

}
a:hover {
  background-color: gold;
  display: line;
}
main div {
  display: none;
  padding: 20px;
}
.active {
  display: block;
}



</style>



<br>
<div class="container">
<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content
    <div class="contenedor-grid">

    
        <div class="item item-1">
                                    <div class="active">Datos</div>
                                      <div>dddddd</div>
                                      <div>fffffffffffff</div>
        </div>


       
                          <a data-id="1" class="item item-2" style="display:block;">Datos</a>
                          <a data-id="2" class="item item-3" style="display:block; ">Video</a>
                          <a data-id="3" class="item item-4" style="display:block;">Item 3</a>
               
    </div>


  </div>
</div>
</div>

  <br>



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>











<script>

document.querySelectorAll('navv a')
  .forEach(e => e.addEventListener('click', _ => change(e.dataset.id)))


function change(n) {
  let panels = document.querySelectorAll('main div')
  panels.forEach(p => p.classList.remove('active'))
  panels[n - 1].classList.add('active')
}
</script>
@endsection