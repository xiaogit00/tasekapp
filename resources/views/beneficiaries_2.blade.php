@extends('layouts.app')
@section('content')
<body>
    <!-- side bar -->
    <div class="container-fluid">
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
            </nav>


            <div id="mainContent" class="col-md-9 col-lg-10">
                <!-- search-bar -->
                <div class="input-group mt-2">
                    <input type="text" class="form-control form-control-lg" placeholder="What are you searching for?" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <!-- main content to be displayed here -->
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- JS EXTENSION -->
    <!--<script src="../app.js"></script>-->

</body>

</html>
@endsection
