<div class="row" id="g-happy">
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
  <button id="alert"></button>
</div>
<div class="row" id="g-sad">
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



<script>
  $(document).ready(function() {
    //PINK
    var ipink = 0;
    var interval = null;
    $('#p-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-plus").val($("#p-plus").val() + 500);
          if(ipink < 10){
            $('.p').eq(ipink).addClass('pink');
            ipink++;
          }
        }, 500);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#p-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-minus").val($("#p-minus").val() + 500);
          if(ipink > 0){
            ipink--;
            $('.p').eq(ipink).removeClass('pink');
          }
        }, 500);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });

    //BLUE
    var iblue = 0;
    $('#b-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-plus").val($("#b-plus").val() + 500);
          if(iblue < 10){
            $('.b').eq(iblue).addClass('blue');
            iblue++;
          }
        }, 500);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#b-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-minus").val($("#b-minus").val() + 500);
          if(iblue >= 0){
            iblue--;
            $('.b').eq(iblue).removeClass('blue');
          }
        }, 500);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });

    $('#alert').click(function(){
      alert(ipink);
    });
    
      
  });

</script>