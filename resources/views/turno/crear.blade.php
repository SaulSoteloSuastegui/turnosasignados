<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="{{route('turno.store')}}">
          @csrf
          <div class="form-group">
            <label for="email">Numero de investigacion:</label>
            <input type="text" class="form-control" placeholder="Numero de investigacion:" id="email" name="name">
          </div>
          <div class="form-group">
            <select class="form-control" name="tipo">
              <option>Con detenido</option>
              <option>Sin detenido</option>
              <option>Orden de aprehension</option>
              <option>Cuadernillon</option>
            </select>
          </div>
     
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>