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
    var pink = $('.p')
    var ipink = 0;
    var interval = null;
    $('#p-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-plus").val($("#p-plus").val() + 400);
          if(ipink < pink.length){
            $(pink).eq(ipink).addClass('pink');
            ipink++;
          }
        }, 700);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#p-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#p-minus").val($("#p-minus").val() + 400);
          if(ipink >= 0){
            $('.p').eq(ipink).removeClass('pink');
            ipink--;
          }
        }, 700);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });

    //BLUE
    var blue = $('.b')
    var iblue = 0;
    $('#b-plus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-plus").val($("#b-plus").val() + 400);
          if(iblue < blue.length){
            $(blue).eq(iblue).addClass('blue');
            iblue++;
          }
        }, 700);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
    $('#b-minus').on('mousedown', function() {
      interval = setInterval(function() {
          $("#b-minus").val($("#b-minus").val() + 400);
          if(iblue >= 0){
            $('.b').eq(iblue).removeClass('blue');
            iblue--;
          }
        }, 700);
    }).on('mouseup mouseleave', function() {
      clearInterval(interval);
    });
      
  });

</script>