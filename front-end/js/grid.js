$(document).ready(function() {
  //Define map between colors and moods
  var colormap = {happy:"pink", angry:"red", smart:"orange", excited:"yellow", relaxed:"white", shocked:"purple", scared:"lilac", sad:"blue", hungry:"green", bored:"brown"};
  var base_url="http://localhost/COMP307/";

  //Post data containing the movie id to be displayed
  var movieid = $('#movieid').text();
  var moviename = $('#name').text();
  var postdata = 'movieid='+movieid+"&moviename="+moviename;

  //AVG RATING DISPLAY
  var url = base_url+'back-end/avgrating';
  $.ajax({
    type: "POST",
    url: url,
    data: postdata,
    dataType: 'json',
    success: function(data){

      //Get array of moods
      var adjarray = $('.gen-rating > div').map(function(){
        return this.id;
      }).get();

      //For each mood, add color to the corresponding buttons up to the mood's level
      for (var grididx=1; grididx < 11; grididx++){
        var adj = adjarray[grididx];
        var query = eval("data." + adj);
        for (var i=0; i<query; i++){
          $('.'+adj).eq(i).addClass(colormap[adj]);
        }
      }
    }
   });

  //USER RATING DISPLAY
  url = base_url+'back-end/userrating';
  $.ajax({
    type: "POST",
    url: url,
    data: postdata,
    dataType: 'json',
    success: function(data){
      var colormap = {happy:"pink", angry:"red", smart:"orange", excited:"yellow", relaxed:"white", shocked:"purple", scared:"lilac", sad:"blue", hungry:"green", bored:"brown"};
      //Get array of moods
      var adjarray = $('.user-rating > div').map(function(){
        return this.id;
      }).get();

      //For each mood, add color to the corresponding buttons up to the mood's level
      for (var grididx=1; grididx < 11; grididx++){
        var adj = adjarray[grididx];
        var query = eval("data." + adj);
        for (var i=0; i<query; i++){
          $('.u'+adj).eq(i).addClass(colormap[adj]);
        }
      }        
    }
   });

  //QUESTION MARK HOVER EXPLANATION
  $('#rateit').hover(function(){
    $('.explain').show();
    }, function(){
      $('.explain').hide();
  });

  //Switch grids when user clicks on the rate button
  $('#rateit').click(function(){
    $('.gen-rating').hide();
    $('.user-rating').show();
  });

//Update user's grid by changing the buttons' CSS//
  var idx = 1;
  //PINK - HAPPY
  var ipink = 0; //Index for the level the button is at
  idx++;
  var interval = null;
  //When user presses on the plus button, increase the meter for that mood
  $('#uhappy-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhappy-plus").val($("#uhappy-plus").val() + 200);
        if(ipink < 10){
          $('.uhappy').eq(ipink).addClass('pink');
          ipink++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  //When user presses on the minus button, decrease the meter for that mood
  $('#uhappy-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhappy-minus").val($("#uhappy-minus").val() + 200);
        if(ipink > 0){
          ipink--;
          $('.uhappy').eq(ipink).removeClass('pink');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //RED - ANGRY
  var ird = 0;
  idx++;
  var interval = null;
  $('#uangry-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uangry-plus").val($("#uangry-plus").val() + 200);
        if(ird < 10){
          $('.uangry').eq(ird).addClass('red');
          ird++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uangry-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uangry-minus").val($("#uangry-minus").val() + 200);
        if(ird > 0){
          ird--;
          $('.uangry').eq(ird).removeClass('red');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //ORANGE - SMART
  var iora = 0;
  idx++;
  var interval = null;
  $('#usmart-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#usmart-plus").val($("#usmart-plus").val() + 200);
        if(iora < 10){
          $('.usmart').eq(iora).addClass('orange');
          iora++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#usmart-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#usmart-minus").val($("#usmart-minus").val() + 200);
        if(iora > 0){
          iora--;
          $('.usmart').eq(iora).removeClass('orange');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //YELLOW - EXCITED
  var iyel = 0;
  idx++;
  var interval = null;
  $('#uexcited-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uexcited-plus").val($("#uexcited-plus").val() + 200);
        if(iyel < 10){
          $('.uexcited').eq(iyel).addClass('yellow');
          iyel++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uexcited-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uexcited-minus").val($("#uexcited-minus").val() + 200);
        if(iyel > 0){
          iyel--;
          $('.uexcited').eq(iyel).removeClass('yellow');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //WHITE - RELAXED
  var iwhi = 0;
  idx++;
  var interval = null;
  $('#urelaxed-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#urelaxed-plus").val($("#urelaxed-plus").val() + 200);
        if(iwhi < 10){
          $('.urelaxed').eq(iwhi).addClass('white');
          iwhi++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#urelaxed-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#urelaxed-minus").val($("#urelaxed-minus").val() + 200);
        if(iwhi > 0){
          iwhi--;
          $('.urelaxed').eq(iwhi).removeClass('white');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //PURPLE - SHOCKED
  var ipur = 0;
  idx++;
  var interval = null;
  $('#ushocked-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ushocked-plus").val($("#ushocked-plus").val() + 200);
        if(ipur < 10){
          $('.ushocked').eq(ipur).addClass('purple');
          ipur++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#ushocked-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ushocked-minus").val($("#ushocked-minus").val() + 200);
        if(ipur > 0){
          ipur--;
          $('.ushocked').eq(ipur).removeClass('purple');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //LILAC - SCARED
  var ilil = 0;
  idx++;
  $('#uscared-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uscared-plus").val($("#uscared-plus").val() + 200);
        if(ilil < 10){
          $('.uscared').eq(ilil).addClass('lilac');
          ilil++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uscared-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uscared-minus").val($("#uscared-minus").val() + 200);
        if(ilil > 0){
          ilil--;
          $('.uscared').eq(ilil).removeClass('lilac');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //BLUE - SAD
  var iblu = 0;
  idx++;
  $('#usad-plus').on('mousedown', function() {
    interval = setInterval(function() {
      $("#usad-plus").val($("#blu-plus").val() + 200);
      if(iblu < 10){
        $('.usad').eq(iblu).addClass('blue');
        iblu++;
      }
    }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#usad-minus').on('mousedown', function() {
    interval = setInterval(function() {
      $("#usad-minus").val($("#usad-minus").val() + 200);
      if(iblu > 0){
        iblu--;
        $('.usad').eq(iblu).removeClass('blue');
      }
    }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //GREEN - HUNGRY
  var igrn = 0;
  idx++;
  $('#uhungry-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhungry-plus").val($("#uhungry-plus").val() + 200);
        if(igrn < 10){
          $('.uhungry').eq(igrn).addClass('green');
          igrn++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#uhungry-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#uhungry-minus").val($("#uhungry-minus").val() + 200);
        if(igrn > 0){
          igrn--;
          $('.uhungry').eq(igrn).removeClass('green');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  //BROWN - BORED
  var ibrn = 0;
  idx++;
  $('#ubored-plus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ubored-plus").val($("#ubored-plus").val() + 200);
        if(ibrn < 10){
          $('.ubored').eq(ibrn).addClass('brown');
          ibrn++;
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });
  $('#ubored-minus').on('mousedown', function() {
    interval = setInterval(function() {
        $("#ubored-minus").val($("#ubored-minus").val() + 200);
        if(ibrn > 0){
          ibrn--;
          $('.ubored').eq(ibrn).removeClass('brown');
        }
      }, 200);
  }).on('mouseup mouseleave', function() {
    clearInterval(interval);
  });

  // RATINGS SUBMIT TO DATABASE
  $('#rate-submit').click(function(){
    postdata = 'movieid='+movieid+"&happy="+ipink+"&angry="+ird+"&smart="+iora+"&excited="+iyel+"&relaxed="+iwhi+"&shocked="+ipur+"&scared="+ilil+"&sad="+iblu+"&hungry="+igrn+"&bored="+ibrn;
    var url = base_url+'back-end/updaterating';
    $.ajax({
      type: "POST",
      url: url,
      data: postdata,
      success: function(data){
        //Go back to average ratings grid
        $('.user-rating').hide();
        $('.gen-rating').show();
      }
     });
    
  });

});