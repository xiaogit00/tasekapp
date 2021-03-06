@extends('layouts_2.app')
@section('content')


<body>

  <!-- call-data -->
  <div id="benny-data" class="p-4 p-md-5 pt-5">
    {{-- table-header --}}
    <table class="table sticky-top">
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Programs</th>
          <th>Number</th>
          <th>Address</th>
        </tr>
      </thead>
    </table>

  <!-- Beneficiaires Table -->
      @include('benny_data2')
  </div>

  <!-- Loading -->
  <div class="ajax-load text-center" style="display: none"> <!-- display: none means the (loading...) text is not visible -->
    <p>Loading...</p>
  </div>


  <!-- Ajax Script to call more table data(using jquery)-->
  <script>
    // pre - data retrieval function
    function loadMoreData(page) {
      $.ajax({ // ajax method to perform an AJAX request (send the parameters)
        url: '/?page=' + page, // the URL to send the request to (default is the current page)
        type:'get', // specifies the type of request (get/post)
        beforeSend: function() { // beforeSend method / function => run before sending the request
          $(".ajax-load").show(); // show() method shows the hidden elements
        }
      })

      // retrive data
      .done(function(benny_data2) {
        if(benny_data2.html == " ") { // when all data has been loaded
          $('.ajax-load').html("No more records found"); // .html method is used to set content => overwrites the content within the ajax-load class
          return;
        }
        // when more data has yet to be loaded
        $('.ajax-load').hide(); // hide the (loading...) text
        $("#benny-data").append(benny_data2.html); // This is the id of the div that we'll include bennydata2.html
      })


      // if data fails to load due to an error, send an alert message
      .fail(function(jqXHR, ajaxOptions, thrownError){
        alert("Server not responding...");
      });
    }
    // on scroll to bottom
    // i think the page variable shows the no. of data to load at any given time
    var page = 1;
    if ({{!request('query')}}) {
    $(window).scroll(function() {
      didScroll = true;
      if($(window).scrollTop() + $(window).height() >= $(document).height()){
        page++;
        // call loadMoreData function

        loadMoreData(page);
      }
      });
    }

  </script>



</body>

</html>
@endsection
