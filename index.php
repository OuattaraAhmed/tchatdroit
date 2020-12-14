 
<!DOCTYPE html>
<html>
 <head>
  <title>avocat</title>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="JsLocalSearch.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <style> 
  body{
    background-color:  ;
  }
    .bande{
      height: 3%; 
      background-color: #34495e;
    }
  </style>
 </head>
 <body style="background-image:url('img/droit.jpg');opacity: 0.95">
  <br />
  <div class="bande">h</div>
  <br />
  <div class="container" style="background-color:white;padding-bottom: 30px;">
   <h3 align="center">Avocat Rapide</h3>
   
   <div>
   <img src="img/droit.jpg" style="width:200px; height:170px; margin-left: 40%; margin-bottom: 3%;" class="rounded-circle">

   <div>
    <a href="tchat/index.php" style="text-decoration: none;color: #34495e; "><img src="img/pluss.png" style="width:60px; height:57px; margin-left: 90%; " class="rounded-circle"><strong>Plus</strong></a>
   </div>
   </div>
   
   <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
     <input type="text" id="gsearchsimple" class="form-control input-lg" placeholder="Search..." />

     <ul class="list-group">

     </ul>
     <div id="localSearchSimple"></div>
     <div id="detail" style="margin-top:16px;"></div>
    </div>
    <div class="col-md-3"></div>
   </div>
  
  </div>
 <br />
  <div class="bande">h</div>
  <br />
 </body>
</html>
<script>
$(document).ready(function(){
 $('#gsearchsimple').keyup(function(){
  var query = $('#gsearchsimple').val();
  $('#detail').html('');
  $('.list-group').css('display', 'block');
  if(query.length == 2)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('.list-group').html(data);
    }
   })
  }
  if(query.length == 0)
  {
   $('.list-group').css('display', 'none');
  }
 });

 $('#localSearchSimple').jsLocalSearch({
  action:"Show",
  html_search:true,
  mark_text:"marktext"
 });

// ******
 $(document).on('click', '.gsearch', function(){
  var preocupation = $(this).text();
  $('#gsearchsimple').val(preocupation);
  $('.list-group').css('display', 'none');
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{preocupation:preocupation},
   success:function(data)
   {
    $('#detail').html(data);
   }
  })
 });
});
</script>

