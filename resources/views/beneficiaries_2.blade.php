@extends('layouts_2.app')
@section('content')


<body>
    <!-- side bar -->
    <!-- div class="container-fluid">
        <div class="row">
            <nav id="sideBarMenu" class="bg-dark col-md-3 col-lg-2 vh-100">
                <a class="navbar-brand d-flex justify-content-center mt-2" href="#">
                    <div class="h2">TASEK</div>
                </a>
                <hr class="bg-primary">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-link active"><i class="fas fa-home"></i> PM Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active"><i class="far fa-building"></i> Beneficiaries</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active"><i class="fas fa-user-friends"></i> Clients</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active"><i class="fas fa-tasks"></i> Programs</a>
                    </li>
                </ul>
            </nav -->


            <!-- div id="mainContent" class="col-md-9 col-lg-10" -->
                <!-- search-bar -->
                <!-- div class="input-group mt-2">
                    <input type="text" class="form-control form-control-lg" placeholder="What are you searching for?" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Search</button>
                    </div>
                </!-->
            </!-->
            <!-- main content to be displayed here -->
            <!-- Page Content  -->
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
        </div>
    </div>









    <!-- javascript_extension -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>

</html>
@endsection
