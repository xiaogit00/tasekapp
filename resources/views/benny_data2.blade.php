<table class='table'>
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Programs</th>
      <th>Number</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <!-- This is a loop for the table rows -->

    @foreach ($persons->all() as $person)
    
    {{-- insert table hover  --}}
    <tr class='table-hover'>
      {{-- data-toggle & data-target triggers the modal --}}
      <td><a data-toggle="modal" data-target="#myModal" href="/{{$person->id}}">{{$person->name}}</a></td>
      <td>{{$person->dob}}</td>
      <td>
      @foreach ($person->programs as $program)
      {{$program->name}}
      @endforeach
      </td>


      <td>{{$person->phoneNum}}</td>
      <td>{{$person->address}}</td>

    </tr>
    @endforeach


  </tbody>
</table>

{{-- .modal {
  overflow-y: auto;
 }
 
 .modal-open {
  overflow: auto;
 } --}}

{{-- Modal dialog for the names --}}
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="overflow-x: auto">
  <div class="modal-dialog modal-lg modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Please input some text in here</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
