<table class='table table-hover'>
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

  <!-- Insert Table Hover (done) -->
    <tr class='table-hover'>
      <!-- data-toggle & data-target triggers the modal -->
      {{-- <td>{{$person->name}}</td> --}}

        {{-- original-text --}}
        <td><a data-toggle="modal" data-target="#myModal" data-target-id="{{ $person }}" href="/{{$person->id}}">{{$person->name}}</a></td>
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

<!-- Modal dialog for the names -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
  {{-- implement scrollable modal --}}
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content">

      <div class="modal-header">
        {{-- input img placeholder --}}
        <img src="cinqueterre.jpg" class="rounded-circle" alt="Cinque Terre">
        <h4 class="modal-title" id="exampleModalLabel"><span id="pass_name"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Displaying Person Information -->
      <div class="container-fluid">
        <div class="row">
          {{-- user info --}}
          <div class=col-md-6>
            {{-- <p> Name: <span id="pass_name"></span></p> --}}
            <p> dob: <span id="pass_dob"></span></p>
            <p> phoneNum: <span id="pass_phoneNum"></span></p>
            <p> address: <span id="pass_address"></span></p>
            <p> Race: <span id="pass_race"></span></p>
            <p> Gender: <span id="pass_gender"></span></p>
            <p> nric: <span id="pass_nric"></span></p>
          </div>

          {{-- next-of-kin info --}}
          <div class=col-md-6>
            {{-- next of kin details --}}
            {{-- contact details --}}
            {{-- program --}}

          </div>
        </div>  
      

      </div>
      
        
        
        
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
            $(document).ready(function () {
                $("#myModal").on("show.bs.modal", function (e) {  //show.bs.modal is an inbuilt action
                    var person = $(e.relatedTarget).data('target-id');
                    console.log(person)
                    $('#pass_name').html(person['name']);//displays the html in selector
                    $('#pass_race').html(person['race']);
                    $('#pass_gender').html(person['gender']);
                    $('#pass_nric').html(person['nric']);
                    $('#pass_dob').html(person['dob']);
                    $('#pass_address').html(person['address']);
                    $('#pass_phoneNum').html(person['phoneNum']);
                    // $('#pass_').html(person['name']);
                    // $('#pass_').html(person['name']);
                    // $('#pass_').html(person['name']);
                });
            });

</script>
