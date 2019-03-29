<!DOCTYPE html>
<html>
<head>
	<title>2B-KMUTT 16 STAR VOTE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
<script type="text/javascript" src="Assets/js/jquery.min.js"></script>
<script type="text/javascript" src="Assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Assets/js/sweetalert.min.js"></script>
<script type="text/javascript" src="Assets/js/turnjs4/lib/turn.min.js"></script>
<link rel="stylesheet" href="Assets/css/fontawesome.css">
<link rel="stylesheet" href="Assets/css/style.css" type="text/css">
<?php 
?>
</head>
<body>

<nav class="navbar navbar-expand-lg scrolling-navbar navbar-light bg-light">
	<div class="container">
      <a class="navbar-brand" href="#" style="font-family: engchalk; color: black;"><strong>STAR VOTE</strong></a>
      <button class="navbar-toggler" style="color: black;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav navbar-right">
 			
  			<li><a href="#" style="color: black;"><i class="fas fa-language"></i>&nbsp;ภาษาไทย&nbsp;</a></li>
  			<li><a href="#" style="color: black;">&nbsp;English&nbsp;</a></li>
		</ul>
      </div>
  </div>
</nav>

<section id="board">
	<div class="container-fluid">
		<center>
			<p style="font-family: thai;font-size: 70px;color: white;">" วันวานยังหวานอยู่ "</p>
			<p style="margin-top: -15px;font-family: thai;font-size: 40px; color: white">ประกวดดาวเดือนเเห่งยุค ตามหาหนุ่มสาวสุดฮอตเเห่งปี ๒๕๖๒</p>
			<img src="pic/oldpaper.png" style="width: 100%">
		</center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<center>
				<div class="poraroid">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#doawModal" class="top_hover">
						<img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
						<p>ดาว</p>
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
				<center>
				<div class="poraroid">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#deanModal" class="top_hover">
						<img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
						<p>เดือน</p>
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
				<center>
				<div class="poraroid">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#doawtheamModal" class="top_hover">
						<img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
						<p>ดาวเทียม</p>
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
				<center>
				<div class="poraroid">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#doawtheamModal" class="top_hover">
						<img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
						<p>สิ่งศักดิ์สิทธิ</p>
					</a>
				</div>
  				</center>
			</div>
		</div>	
	</div>
	<img src="pic/borderwood.jpg" style="width: 100%">
</section>

<!--DOAW-->
<div id="doawModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
      	  <p>ดาว</p>
  		</center>
      </div>
   </div>
  </div>
</div>

<!--DEAN-->
<div id="deanModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
  		  <p>เดือน</p>
  		</center>
      </div>
   </div>
  </div>
</div>


<!--DOAWTHEAM-->
<div id="doawtheamModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
  		  <p>ดาวเทียม</p>
  		</center>
      </div>
   </div>
  </div>
</div>

<!--SSS-->
<div id="sssModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
  		  <p>สิ่งศักดิ์สิทธิ</p>
  		</center>
      </div>
   </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-4 col-md-2">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#bookModal" class="top_hover">
            <img src="pic/bgbackground.jpg" class="img-responsive book">
          </a>
        </div>
        
        <div class="col-xs-12 shelf"></div>
    </div>
</div>

<!--book-->
<div id="bookModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
        <center>
          <div id="flipbook">
            <div class="hard"> Turn.js </div>
            <div class="hard"></div>
            <div> Page 1 </div>
            <div> Page 2 </div>
            <div> Page 3 </div>
            <div> Page 4 </div>
            <div class="hard"></div>
            <div class="hard"></div>
          </div>
      </center>
      </div>
   </div>
  </div>
</div>

<script type="text/javascript">
  $("#flipbook").turn({
    width: 400,
    height: 300,
    autoCenter: true
  });
</script>

<footer>
	<center>
		<p><a href="#myPage">STAR VOTE</a> Web Design, Copyright &copy; Towrung JI, 2019</p>
	</center>
</footer>

<script>
$(document).ready(function()
{
  $('[data-toggle="tooltip"]').tooltip(); 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) 
  {
    if (this.hash !== "") 
    {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function()
      {
        window.location.hash = hash;
      });
   	} 
  });

   $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>