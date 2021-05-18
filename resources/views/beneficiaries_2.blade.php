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
          <th>num /th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        <!-- This is a loop for the table rows -->
        @for ($i =0; $i<100; $i++)

        <!-- insert popover (modal) for names -->
        <!-- div class="modal-dialog modal-dialog-centered" -->
        </~div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



  <!-- load more data on scroll -->
  <div id="load_data"></div>
  <div id="load_data_message"></div>

  <script>
  // declare global variables
  var limit = 7; // num of data fetched for every ajax call
  var start = 0; // num of data at start
  var reachedMax = false; // when all data retrieved, no more ajax call required

    $(document).ready(function(){
      getData();
    });

    function getData(){
      if(reachedMax){
        return;
      }
    }

    // ajax request (object)
    $.ajax({
      url: "data.php", // send request to this page
      method: "POST", // post method to send data to server
      dataType:{
        getData: 1,
        limit: limit,
        start: start,
      },
      success: function(response){
          $('load_data').append(data);
        }
      })
   

  </script>


</body>

</html>
@endsection
