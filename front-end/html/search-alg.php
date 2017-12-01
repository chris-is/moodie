<script>
  // SEARCH
    $('#searchbar').keypress(function(e){
      if(e.which == 13) {
        var query = $('#searchbar').val();
        query = query.replace(/ /g,"%20");
        var link = "https://api.themoviedb.org/3/search/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US&query=" + query + "&page=1&include_adult=false";
        var postdata = "query="+link;
        //url = base_url+'back-end/search-simple';

        url = "/COMP307/front-end/html/search-results-simple.php";
        $.ajax({
          type: "POST",
          url: url,
          data: postdata,
          success: function(data){
            //alert(data);
            window.location.href = url;
          },
          error: function(){
            alert('Error occured when sending search');
          }
        });
      }  
    });
    
  
</script>