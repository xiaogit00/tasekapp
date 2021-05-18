@extends('layouts_2.app')
@section('content')


<body>





  <div id="post-data" class="p-4 p-md-5 pt-5">
 <!-- Beneficiaires Table -->
      @include('benny_data')

    <!-- {!!$persons->links()!!} -->
  </div>

  <!-- Loading -->
  <div class="ajax-load text-center" style="display: none">
    <p>Loading...</p>
  </div>

  <!-- Ajax Script -->
  <script>
    function loadMoreData(page)
    {
      $.ajax({
        url: '/' + page,
        type:'get',
        beforeSend: function()
        {
          $(".ajax-load").show();
        }
      })
      .done(function(data){
        if(data.html == " "){
          $('.ajax-load').html("No more records found");
          return;
        }
        $('.ajax-load').hide();
        $("#post-data").append(data.html);
      })
      .fail(function(jqXHR, ajaxOptions, thrownError){
        alert("Server not responding...");
      });
    }

    var page = 1;
    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() >= $(document).height()){
        page++;
        loadMoreData(page);
      }
    });
  </script>




    <!-- javascript_extension -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>

</html>
@endsection
