<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1c9222c777.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="public/css/app.css">

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">

  		.ajax-load{

  			background: #e1e1e1;

		    padding: 10px 0px;

		    width: 100%;

  		}

  	</style>

</head>


<body>
    <!-- side bar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sideBarMenu" class="bg-dark col-md-3 col-lg-2 vh-100 sticky-top">
                <a class="navbar-brand d-flex justify-content-center mt-2" href="#">
                    <div class="h3">TASEK</div>
                </a>

                <!-- create-user-button -->
                <div class="text-center">
                <button type="button" id="createUserButton" class="btn btn-primary btn-lg rounded-pill" data-toggle="modal" data-target="#myModal2">Create User</button>
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
                        <hr class="bg-primary">
                    </li>
                </ul>
                </div>
            </nav>


            <div id="mainContent" class="col-md-9 col-lg-10">
                <!-- search-bar -->
                <form class="input-group mt-2 sticky-top" action="" method="GET">
                    <input type="text" name="query" class="form-control form-control-lg" placeholder="What are you searching for?" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary btn-lg" type="button">Search</button>
                    </div>
                </form>

                <!-- Main Content (table-content) -->
                <div class="app">
                     @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- modal for create user button --}}
    <!-- Modal -->
    <div id="myModal2" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        {{-- consider implementing scrollable modal --}}
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create New Contact</h5>
            </div>

            <!-- FORM BEGINS (create-user-modal) -->
            <form action= "{{route('newBenny')}}" method="POST">
              @csrf
            <div class="modal-body">
                <div class="container-fluid">
                    
                    {{-- form --}}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm border-0 border-bottom" id="createName" placeholder="name@example.com">
                        <label for="createName">Name</label>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">             
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-0 border-bottom" id="createIC" placeholder="Password">
                                <label for="createIC">NRIC</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control border-0 border-bottom" id="createDOB" placeholder="dd/mm/yyyy">
                                <label for="createDOB">Birthday</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-0 border-bottom" id="createGender" placeholder="Password">
                                <label for="createGender">Gender</label>
                              </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-0 border-bottom" id="createRace" placeholder="Password">
                                <label for="createRace">Race</label>
                              </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border-0 border-bottom" id="createContact" placeholder="XXXXXXXX">
                                <label for="createContact">Phone</label>
                              </div>
                            </div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 border-bottom" id="createAdd" placeholder="Password">
                            <label for="createAdd">Address</label>
                        </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="close btn btn-secondary" data-dismiss="modal" aria-label = "Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
                <!-- END FORM -->
            </div>
        </div>
    </div>





<!-- javascript-extension -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- script src="resources/js/app.js" -->


</body>
</html>
