



@extends('layouts')

@section('content')
<style>
.containerr {
display:grid;

grid-template-columns: 1fr;
  
  
}
navv {
  
  display: flex;
  cursor: pointer;

}
navv a {
  
  background-color: #00000008;
  padding: 10px;
  border-style: groove;
  border: 10 px;

}
navv a:hover {
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
    <div class="card  " >
              <div class="card-header">
                  <a class="btn" data-bs-toggle="collapse" href="#collapseOne1">
                    Collapsible Group Item #1
                  </a>
              </div>
              <div id="collapseOne1" class="collapse show" data-bs-parent="#accordion">
                <div class="card-body">
                    <div class="containerr">
                        <navv>
                          <a data-id="1">Datos</a>
                          <a data-id="2">Video</a>
                          <a data-id="3">Item 3</a>
                        </navv>
                            <main>
                              <div class="active">Datos</div>
                                      <div>Item 2 Video
                                              <video width="400" controls>
                                                <source src="mov_bbb.mp4" type="video/mp4">
                                                <source src="mov_bbb.ogg" type="video/ogg">
                                                Your browser does not support HTML5 video.
                                              </video>
                                      </div>
                                      <div><iframe src="{{asset('pdf/Aprender la Programación Orientada.pdf')}}" style="width:100%; height:700px;" frameborder="0" ></iframe>
                                      </div>
                              <div>
                            </main>
                    </div>
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