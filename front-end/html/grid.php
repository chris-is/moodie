<div class="row">
  <div id="rate-msg">This movie made me feel...</div>
  <button class="qmark" data-toggle="tooltip" data-placement="top"></button>
  <div class="explain">No fields are mandatory<br/> Rate what you want!</div>
</div>

<div class="row" id="g-happy">
  <button class="adj">Happy</button>
  <button id="p-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn p" data-toggle="tooltip" data-placement="top"></button>
  <button id="p-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
</div>

<div class="row" id="g-sad">
  <button class="adj">Sad</button>
  <button id="b-minus" class="minus-ctrl" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button class="grid-btn b" data-toggle="tooltip" data-placement="top"></button>
  <button id="b-plus" class="plus-ctrl" data-toggle="tooltip" data-placement="top"></button>
</div>

<div class="row">
  <button class="adj" id="rate">Rate!</button>
</div>

<script>
  $(document).ready(function() {
    //QUESTION MARK HOVER EXPLANATION
    $('.qmark').hover(function(){
      $('.explain').show();
    }, function(){
      $('.explain').hide();
    });

  //GRID//
    //PINK
    var ipink = 0;
    var interval = null;
    $('#p-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-plus").val($("#p-plus").val() + 300);
          if(ipink < 10){
            $('.p').eq(ipink).addClass('pink');
            ipink++;
          }
        }, 300);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#p-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-minus").val($("#p-minus").val() + 300);
          if(ipink > 0){
            ipink--;
            $('.p').eq(ipink).removeClass('pink');
          }
        }, 300);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });

    //BLUE
    var iblue = 0;
    $('#b-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-plus").val($("#b-plus").val() + 300);
          if(iblue < 10){
            $('.b').eq(iblue).addClass('blue');
            iblue++;
          }
        }, 300);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#b-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-minus").val($("#b-minus").val() + 300);
          if(iblue >= 0){
            iblue--;
            $('.b').eq(iblue).removeClass('blue');
          }
        }, 300);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });

    
  });

</script>