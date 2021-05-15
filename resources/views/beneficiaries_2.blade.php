@extends('layouts_2.app')
@section('content')


<body>



  <div id="content" class="p-4 p-md-5 pt-5">

    <h2 class="mb-4">Beneficiary table</h2>
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
        @for ($i =0; $i<100; $i++)

        <tr class='table-hover'>
          <td><a href="/{{$person[$i]['id']}}">{{$person[$i]['name']}}</a></td>
          <td>{{$person[$i]['dob']}}</td>
          <td>
          @foreach ($person[$i]->programs as $program)
          {{$program->name}}
          @endforeach
          </td>
          <!-- <td>{{$person[$i]['programs']}}</td> -->

          <td>{{$person[$i]['phoneNum']}}</td>
          <td>{{$person[$i]['address']}}</td>
        </tr>
        @endfor

      </tbody>
    </table>

    </div>



    <!-- javascript_extension -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>

</html>
@endsection
