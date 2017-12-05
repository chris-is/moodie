<!DOCTYPE html>
<html>
  
  <?php 
    require 'head.html';
  ?>
  <link href="../css/search-results.css" type="text/css" rel="stylesheet">

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
        <div id="result-msg">
          Your search returned the following results:
        </div>
      </div>

      <script>
        $(document).ready(function(){
          //Find GET query in url
          function getParam(param){
            var pageURL = window.location.search.substring(1);
            var URLVar = pageURL.split('&');
              for (var i = 0; i < URLVar.length; i++){
                var paramName = URLVar[i].split('=');
                if (paramName[0] == param){
                  return paramName[1];
                }
              }
            }

          //Build POST query to send to backend php
          var country = getParam('country');
          var year = getParam('year');
          var movie = getParam('movie');
          var tv = getParam('tv');
          var happy = getParam('happy');
          var angry = getParam('angry');
          var smart = getParam('smart');
          var excited = getParam('excited');
          var relaxed = getParam('relaxed');
          var shocked = getParam('shocked');
          var scared = getParam('scared');
          var sad = getParam('sad');
          var hungry = getParam('hungry');
          var bored = getParam('bored');

          var postdata = 'country='+country + '&year='+year + '&movie='+movie + '&tv='+tv + '&happy='+happy + '&angry='+angry + '&angry='+angry + '&smart='+smart + '&excited='+excited + '&relaxed='+relaxed + '&shocked='+shocked + '&scared='+scared + '&sad='+sad + '&hungry='+hungry + '&bored='+bored;
          var url = "http://localhost/COMP307/back-end/search-advanced";

          $.ajax({
            type: "POST",
            url: url,
            data: postdata,
            dataType: 'json',
            success: function(data){
              console.log(data);
              //Dynamically append new movie name+poster
              function appendMovie(poster, id, name){
                var l1 = "<div id=\"name\" class=\"row\">"+name+"</div>";
                var l2 = "<div id=\"images\" class=\"row\"><div class=\"col-sm-5\"><a href=\"/COMP307/front-end/html/movie.php?"+id+"\"><img class=\"poster\" src=\"" + poster +"\"></a></div></div>";
                $('.container-fluid').append(l1, l2);
              }

              //Loop through array of search results and display movies
              for(var i=0; i<data.length; i++){
                var poster = "https://image.tmdb.org/t/p/w500" + data[i][2];
                var id = "movie="+data[i][0]+"&tv=0";
                var name = data[i][1]
                appendMovie(poster, id, name);
              }

            }
          }); 

        });
      </script>

    </div>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
