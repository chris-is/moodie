<?php session_start(); ?>

<!-- GENERAL AVERAGE RATING -->
<div class="gen-rating">
  <div class="row">
    <div id="rate-msg">This movie made other users feel...</div>
  </div>

  <div class="row" id="happy">
    <button class="adj">Happy</button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
    <button class="grid-btn happy"></button>
  </div>

  <div class="row" id="angry">
    <button class="adj">Angry</button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
    <button class="grid-btn angry"></button>
  </div>

  <div class="row" id="smart">
    <button class="adj">Smart</button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
    <button class="grid-btn smart"></button>
  </div>

  <div class="row" id="excited">
    <button class="adj">Excited</button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
    <button class="grid-btn excited"></button>
  </div>

  <div class="row" id="relaxed">
    <button class="adj">Relaxed</button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
    <button class="grid-btn relaxed"></button>
  </div>

  <div class="row" id="shocked">
    <button class="adj">Shocked</button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
    <button class="grid-btn shocked"></button>
  </div>

  <div class="row" id="scared">
    <button class="adj">Scared</button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
    <button class="grid-btn scared"></button>
  </div>

  <div class="row" id="sad">
    <button class="adj">Sad</button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
    <button class="grid-btn sad"></button>
  </div>

  <div class="row" id="hungry">
    <button class="adj">Hungry</button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
    <button class="grid-btn hungry"></button>
  </div>

  <div class="row" id="bored">
    <button class="adj">Bored</button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
    <button class="grid-btn bored"></button>
  </div>

<?php 
  require_once('../../back-end/database.php');
  $db = getDB();
  $sid = session_id();
  $query = "SELECT status from Users where sid=?";
  $stmt = $db->prepare($query);
  $stmt->execute([$sid]);
  $status = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($status['status'] == 1) : ?>
    
  <div class="row">
    <button class="adj rate" id="rateit">Rate it!</button>
    <div class="explain">No fields are mandatory<br/> Rate what you want!</div>
  </div>
  
</div>
<!-- USER RATING -->
<div class="user-rating">
  <div class="row">
    <div id="rate-msg">This movie made me feel...</div>
  </div>

  <div class="row" id="happy">
    <button class="adj">Happy</button>
    <button id="uhappy-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button class="grid-btn uhappy"></button>
    <button id="uhappy-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="angry">
    <button class="adj">Angry</button>
    <button id="uangry-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button class="grid-btn uangry"></button>
    <button id="uangry-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="smart">
    <button class="adj">Smart</button>
    <button id="usmart-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button class="grid-btn usmart"></button>
    <button id="usmart-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="excited">
    <button class="adj">Excited</button>
    <button id="uexcited-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button class="grid-btn uexcited"></button>
    <button id="uexcited-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="relaxed">
    <button class="adj">Relaxed</button>
    <button id="urelaxed-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button class="grid-btn urelaxed"></button>
    <button id="urelaxed-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="shocked">
    <button class="adj">Shocked</button>
    <button id="ushocked-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button class="grid-btn ushocked"></button>
    <button id="ushocked-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="scared">
    <button class="adj">Scared</button>
    <button id="uscared-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button class="grid-btn uscared"></button>
    <button id="uscared-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="sad">
    <button class="adj">Sad</button>
    <button id="usad-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button class="grid-btn usad"></button>
    <button id="usad-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="hungry">
    <button class="adj">Hungry</button>
    <button id="uhungry-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button class="grid-btn uhungry"></button>
    <button id="uhungry-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row" id="bored">
    <button class="adj">Bored</button>
    <button id="ubored-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button class="grid-btn ubored"></button>
    <button id="ubored-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  </div>

  <div class="row">
    <button class="adj rate" id="rate-submit">Rate!</button>
  </div>
</div>
<?php endif; ?>

<script>
$(document).ready(function() {
  var colormap = {happy:"pink", angry:"red", smart:"orange", excited:"yellow", relaxed:"white", shocked:"purple", scared:"lilac", sad:"blue", hungry:"green", bored:"brown"};
  var base_url="http://localhost/COMP307/";
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
      var adjarray = $('.gen-rating > div').map(function(){
        return this.id;
      }).get();
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
      var adjarray = $('.user-rating > div').map(function(){
        return this.id;
      }).get();
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

  $('#rateit').click(function(){
    $('.gen-rating').hide();
    $('.user-rating').show();
  });

//USER GRID//
  //PINK - HAPPY
  var idx = 1;
  var ipink = 0;
  idx++;
  var interval = null;
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

  // RATINGS SUBMIT
  $('#rate-submit').click(function(){
    postdata = 'movieid='+movieid+"&happy="+ipink+"&angry="+ird+"&smart="+iora+"&excited="+iyel+"&relaxed="+iwhi+"&shocked="+ipur+"&scared="+ilil+"&sad="+iblu+"&hungry="+igrn+"&bored="+ibrn;
    var url = base_url+'back-end/updaterating';
    $.ajax({
      type: "POST",
      url: url,
      data: postdata,
      success: function(data){
        $('.user-rating').hide();
        $('.gen-rating').show();
      }
     });
    
  });

  
});
</script>