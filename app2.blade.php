<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1c9222c777.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="resources/css/app.css">

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- ajax styling --}}
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
                <!-- create_user_button -->
                <div class="text-center">
                <button type="button" id="createUserButton" class="btn btn-primary btn-lg rounded-pill">Create User</button>
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
                        <button class="btn btn-outline-primary" type="button">Search</button>
                    </div>
                </form>
                <!-- Main Content -->
                {{-- why overflow auto not working ? shld remove the pagination 1st? --}}
                <div class="app overflow-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

<!-- javascript-extension -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="resources/js/app.js"></script>


</body>
</html>
