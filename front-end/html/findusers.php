<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <link href="../css/findusers.css" type="text/css" rel="stylesheet">

  <body>
    <!--HEADER-->
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.php");
        });
      </script>

    <!--BODY-->
    <div class="container-fluid">

      <!--SEARCH-->
      <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

      
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" id="findpanel">
          <button id="findmsg">Find your friends by username:</button>
          <input type="text" name="username" id="tofind" required>
          <div class="username-status"></div>
          <button type="submit" id="findusers-sub">Search</button>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4" id="resultpanel">
          <button id="resultmsg"></button>
        </div>
      </div>

      <script>
        $(document).ready(function(){
          $('#findusers-sub').click(function(){
            var query = $('#tofind').val();
            var postdata = "tofind="+query;
            var url = "http://localhost/COMP307/back-end/find";
            $.ajax({
              type: "POST",
              url: url,
              data: postdata,
              success:function(data){
                $('#resultpanel').show();
                if(data == 0){
                  $('#resultmsg').empty();
                  $('#resultmsg').append("Sorry, none of our registered users match your query.");
                }
                else{
                  $('#resultmsg').empty();
                  var l1 = "Search results:<br/> <a href=\"/COMP307/front-end/html/profile.php?user="+query+"\">"+query+"</a>";
                  $('#resultmsg').append(l1);
                }
              }
            });

          });
        });
      </script>

      

      </div> <!--END CONTAINER-->

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>
  </body>
</html>
