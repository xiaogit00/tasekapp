{{-- why add table-responsive (bootstrap)? --}}

<table class="table table-hover table-borderless">
  <tbody>

    <!-- This is a loop for the table rows -->
    @foreach ($persons->all() as $person)
    <tr class="table-content" data-toggle="modal" data-target="#myModal" data-target-id="{{ $person }}">
      <!-- data-toggle & data-target triggers the modal -->
      <td>{{$person->name}}</td>

        {{-- original-text --}}
        {{-- data-target-id: pass the variable person data into the modal --}}
        {{-- href: --}}
      {{-- <td><a data-toggle="modal" data-target="#myModal" data-target-id="{{ $person }}" href="/{{$person->id}}">{{$person->name}}</a></td> --}}
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

<!-- Modal dialog for the names -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
  {{-- consider implementing scrollable modal --}}
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content">
      <div class="modal-header">
        {{-- input img placeholder --}}
        <img src="image-placeholder-1.png" class="rounded-circle image-fluid" alt="image-placeholder" style="width:30%">
        <h4 class="modal-title" id="exampleModalLabel"><span id="pass_name"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Display Person Information -->
      <div class="container-fluid">
        {{-- Is this row necessary? --}}
        <div class="row">
          <h5 class="contact-details pl-2 pb-3">Contact Details</h5>
        </div>

          {{-- user info --}}
          <div class="row">
          <div class="col-md-6">
            <p> NRIC: <span id="pass_nric"></span></p>
            <p> DOB: <span id="pass_dob"></span></p>
            <p> Gender: <span id="pass_gender"></span></p>
            <p> Contact: <span id="pass_phoneNum"></span></p>
            <p> Race: <span id="pass_race"></span></p>
            <p>Programs: <span id ="pass_programs"></span> </p>


          </div>

          {{-- next-of-kin info --}}
          <div class="col-md-6">
            <p> Mother: <span id="pass_name"></span></p>
            <p> Contact: <span id="pass_phoneNum"></span></p>
            <p> Address: <span id="pass_address"></span></p>

          </div>
        </div>

        <hr></hr>

        {{-- CASE NOTES --}}
        <div class="row">
         <h5 class="case-notes pb-3">Case Notes</h5>
         <div class="case-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
  $("#myModal").on("show.bs.modal", function (e) {  //show.bs.modal is an inbuilt action
  var person = $(e.relatedTarget).data('target-id');
  // var programs = function () {
  //   var program_list = [];
  //   if (person['programs']) {
  //     for (program in person['programs']) {
  //       program_list.push(program['name']);
  //     };
  //   };
  //   return program_list;
  // };
  var programs = person['programs'];
  var program_list = [];
  for (i = 0; i < programs.length; i++) {
    program_list.push(programs[i]['name']);
  }
  var programs_String = program_list.toString();
  // console.log(person)
  console.log(program_list)
  $('#pass_name').html(person['name']);//displays the html in selector
  $('#pass_race').html(person['race']);
  $('#pass_gender').html(person['gender']);
  $('#pass_nric').html(person['nric']);
  $('#pass_dob').html(person['dob']);
  $('#pass_address').html(person['address']);
  $('#pass_phoneNum').html(person['phoneNum']);
  $('#pass_programs').html(programs_String);

  // $('#pass_').html(person['name']);
  // $('#pass_').html(person['name']);
  // $('#pass_').html(person['name']);
  });
  });
  </script>
