@extends('layouts.app')
@section('content')
<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <div class="p-4 pt-5">
        <h1><a href="index.html" class="logo">Splash</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                  <a href="#">Home 1</a>
              </li>
              <li>
                  <a href="#">Home 2</a>
              </li>
              <li>
                  <a href="#">Home 3</a>
              </li>
            </ul>
          </li>
          <li>
              <a href="#">About</a>
          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                  <a href="#">Page 1</a>
              </li>
              <li>
                  <a href="#">Page 2</a>
              </li>
              <li>
                  <a href="#">Page 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>

        <div class="mb-5">
          <h3 class="h6">Subscribe for newsletter</h3>
          <form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
              <div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
        </div>

        <div class="footer">
          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>

      </div>
    </nav>
      <!-- ******************************************* -->
      <!-- Page Content  -->

    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>{{$person->name}}</h1>
        <p>{{$age}}</p>
        <p>{{$person->gender}}</p>
        <p>{{$person->nric}}</p>
        <p>{{$person->phoneNum}}</p>
        <p>{{$person->Race}}</p>
        <p>{{$person->Address}}</p>
      <h2 class="mb-4"></h2>


      </div>

      <!-- *****************END PAGE CONTENT ***************** -->
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
@endsection
