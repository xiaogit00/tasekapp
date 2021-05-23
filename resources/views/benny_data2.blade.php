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
    <!-- insert popover (modal) for names -->
    <!-- div class="modal-dialog modal-dialog-centered" -->
    
    <tr class='table-hover'>

      <td><a href="/{{$person->id}}">{{$person->name}}</a></td>
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
