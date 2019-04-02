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
<link rel="stylesheet" href="Assets/css/fontawesome.css">
<link rel="stylesheet" href="Assets/css/style.css" type="text/css">
<script type="text/javascript" src="Assets/extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="Assets/extras/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="Assets/extras/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="Assets/extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="Assets/lib/hash.js"></script>
<link rel="stylesheet" type="text/css" href="Assets/css/animate.min.css">
<?php 
?>
</head>
<body>
<nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="navbar-color" class="navbar-brand" style="font-size: 32px;" href="#">2B-KMUTT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a id="navbar-color" href="#" style="font-size: 32px;">หน้าหลัก</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a id="navbar-color" href="#" style="font-size: 32px;"> ภาษาไทย</a></li>
        <li><a id="navbar-color" href="#" style="font-size: 32px;"> ภาษาอังกฤษ</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="board">
  <br><br>
	<div class="container-fluid">
		<center>
			<p class="animated bounceInDown" style="font-family: thai;font-size: 70px;color: white;">" วันวานยังหวานอยู่ "</p>
			<p class="animated bounceInUp" style="margin-top: -15px;font-family: thai;font-size: 40px; color: white">ประกวดดาวเดือนเเห่งยุค ตามหาหนุ่มสาวสุดฮอตเเห่งปี ๒๕๖๒</p>
			<img src="pic/oldpaper.png" style="width: 70%">
		</center>
	</div>
  <br><br><br><br>
</section>

<section id="turn">
	<div class="container">
		<div class="row" style="margin-top: 30px; margin-bottom: 30px;">
			<div class="col-sm-6">
        <br><br><br><br>
				<center>
				<div class="polaroid">
					<a style="text-decoration: none" href="javascript:void(0)" data-toggle="modal" data-target="#doawModal" class="top_hover">
						<img src="pic/polaroid.png" alt="Avatar" class="image" style="width:90%;">
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
        <br><br><br><br>
				<center>
				<div class="polaroid">
					<a style="text-decoration: none" href="javascript:void(0)" data-toggle="modal" data-target="#deanModal" class="top_hover">
						<img src="pic/polaroid.png" alt="Avatar" class="image" style="width:90%">
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
        <br><br><br><br>
				<center>
				<div class="polaroid">
					<a style="text-decoration: none" href="javascript:void(0)" data-toggle="modal" data-target="#dtModal" class="top_hover">
						<img src="pic/polaroid.png" alt="Avatar" class="image" style="width:90%">
					</a>
				</div>
  				</center>
			</div>
			<div class="col-sm-6">
        <br><br><br><br>
				<center>
				<div class="polaroid">
					<a style="text-decoration: none" href="javascript:void(0)" data-toggle="modal" data-target="#sssModal" class="top_hover">
						<img src="pic/polaroid.png" alt="Avatar" class="image" style="width:90%">
					</a>
				</div>
  				</center>
			</div>
		</div><br><br><br><br>
	</div>
</section>

<!--DOAW-->
<div id="doawModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
      	  <p id="modal_thai">ดาว</p>
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
  		  <p id="modal_thai">เดือน</p>
  		</center>
      </div>
   </div>
  </div>
</div>


<!--DT-->
<div id="dtModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 100px;">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body" >
      	<center>
      	  <img src="pic/oldpaper.png" alt="Avatar" class="image" style="width:100%">
  		  <p id="modal_thai">ดาวเทียม</p>
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
    		  <p>สิ่งศักดิ์สิทธิ์</p>
    		  <p id="modal_thai">สิ่งศักดิ์สิทธิ</p>
  		</center>
      </div>
   </div>
  </div>
</div>

</section>

<br><br><br>
<div class="container ">
    <div class="row">
        <div class="col-xs-12 text-center">
          <span class="header_book">ดาว น้อยหน่า</span>
        </div>
        <div class="col-xs-3 col-md-3"style="margin-left: 12%;">
          <a href="javascript:void(0)" data-toggle="modal" data-target="#bookModal" class="top_hover"><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-12 shelf" style="margin-bottom: 20px;"></div>
        <div class="col-xs-3 col-md-3" style="margin-left:25%;">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-12 shelf"></div>
        <div class="col-xs-12 text-center" style="margin-top: 15px;">
          <span class="header_book">เดือน เจี๊ยบ</span>
        </div>
        <div class="col-xs-3 col-md-3"style="margin-left: 12%;">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>  
        <div class="col-xs-12 shelf"></div>
        <div class="col-xs-12 text-center" style="margin-top: 15px;">
          <span class="header_book">ดาวเทียม เเจ๊ค</span>
        </div>
        <div class="col-xs-3 col-md-3"style="margin-left: 12%;">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>  
        <div class="col-xs-12 shelf"></div>
        <div class="col-xs-12 text-center" style="margin-top: 15px;">
          <span class="header_book">สิ่งศักสิทธิ์ มาโนช</span>
        </div>
        <div class="col-xs-3 col-md-3"style="margin-left: 12%;">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>
        <div class="col-xs-3 col-md-3">
          <a href=""><img src="pic/bgbackground.jpg" class="img-responsive book"></a>
        </div>  
        <div class="col-xs-12 shelf"></div>
    </div>
</div> 
<br><br><br>

<!--book-->
<div id="bookModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top: 8px;">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent; border: none;">
      <div class="modal-body">
        <center>
          
          <div id="canvas"><button type="button" class="btn btn_vote">vote</button>
            <div id="book-zoom">
              <div class="sj-book">
                <div depth="5" class="hard"> <div class="side"></div> </div>
                <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
                <div class="own-size"></div>
                <div class="own-size even"></div>
                <div class="hard fixed back-side p111"> <div class="depth"></div> </div>
                <div class="hard p112"></div>
              </div>
            </div>
            <div id="slider-bar" class="turnjs-slider">
              <div id="slider"></div>
            </div>
          </div>
      </center>
      </div>
   </div>
  </div>
</div>


<script type="text/javascript">
  $("#flipbook").turn({
    width: 800,
    height: 600,
    autoCenter: true
  });
</script>

<footer>
	<center>
		<p><a href="#myPage">STAR VOTE</a> Web Design, Copyright &copy; Towrung JI, 2019</p>
	</center>
</footer>

<script>
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 200) {
      $(".navbar").css("background" , "#36353d");
    }

    else{
      $(".navbar").css("background" , "transparent");   
    }
  })
})
</script>
<script type="text/javascript">

function loadApp() {
  
  var flipbook = $('.sj-book');

  // Check if the CSS was already loaded
  
  if (flipbook.width()==0 || flipbook.height()==0) {
    setTimeout(loadApp, 10);
    return;
  }

  // Mousewheel

  $('#book-zoom').mousewheel(function(event, delta, deltaX, deltaY) {

    var data = $(this).data(),
      step = 30,
      flipbook = $('.sj-book'),
      actualPos = $('#slider').slider('value')*step;

    if (typeof(data.scrollX)==='undefined') {
      data.scrollX = actualPos;
      data.scrollPage = flipbook.turn('page');
    }

    data.scrollX = Math.min($( "#slider" ).slider('option', 'max')*step,
      Math.max(0, data.scrollX + deltaX));

    var actualView = Math.round(data.scrollX/step),
      page = Math.min(flipbook.turn('pages'), Math.max(1, actualView*2 - 2));

    if ($.inArray(data.scrollPage, flipbook.turn('view', page))==-1) {
      data.scrollPage = page;
      flipbook.turn('page', page);
    }

    if (data.scrollTimer)
      clearInterval(data.scrollTimer);
    
    data.scrollTimer = setTimeout(function(){
      data.scrollX = undefined;
      data.scrollPage = undefined;
      data.scrollTimer = undefined;
    }, 1000);

  });

  // Slider

  $( "#slider" ).slider({
    min: 1,
    max: 100,

    start: function(event, ui) {

      if (!window._thumbPreview) {
        _thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
        setPreview(ui.value);
        _thumbPreview.appendTo($(ui.handle));
      } else
        setPreview(ui.value);

      moveBar(false);

    },

    slide: function(event, ui) {

      setPreview(ui.value);

    },

    stop: function() {

      if (window._thumbPreview)
        _thumbPreview.removeClass('show');
      
      $('.sj-book').turn('page', Math.max(1, $(this).slider('value')*2 - 2));

    }
  });


  // URIs
  
  Hash.on('^page\/([0-9]*)$', {
    yep: function(path, parts) {

      var page = parts[1];

      if (page!==undefined) {
        if ($('.sj-book').turn('is'))
          $('.sj-book').turn('page', page);
      }

    },
    nop: function(path) {

      if ($('.sj-book').turn('is'))
        $('.sj-book').turn('page', 1);
    }
  });

  // Arrows

  $(document).keydown(function(e){

    var previous = 37, next = 39;

    switch (e.keyCode) {
      case previous:

        $('.sj-book').turn('previous');

      break;
      case next:
        
        $('.sj-book').turn('next');

      break;
    }

  });


  // Flipbook

  flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

  flipbook.turn({
    elevation: 50,
    acceleration: !isChrome(),
    autoCenter: true,
    gradients: true,
    duration: 1000,
    pages: 112,
    when: {
      turning: function(e, page, view) {
        
        var book = $(this),
          currentPage = book.turn('page'),
          pages = book.turn('pages');

        if (currentPage>3 && currentPage<pages-3) {
        
          if (page==1) {
            book.turn('page', 2).turn('stop').turn('page', page);
            e.preventDefault();
            return;
          } else if (page==pages) {
            book.turn('page', pages-1).turn('stop').turn('page', page);
            e.preventDefault();
            return;
          }
        } else if (page>3 && page<pages-3) {
          if (currentPage==1) {
            book.turn('page', 2).turn('stop').turn('page', page);
            e.preventDefault();
            return;
          } else if (currentPage==pages) {
            book.turn('page', pages-1).turn('stop').turn('page', page);
            e.preventDefault();
            return;
          }
        }

        updateDepth(book, page);
        
        if (page>=2)
          $('.sj-book .p2').addClass('fixed');
        else
          $('.sj-book .p2').removeClass('fixed');

        if (page<book.turn('pages'))
          $('.sj-book .p111').addClass('fixed');
        else
          $('.sj-book .p111').removeClass('fixed');

        Hash.go('page/'+page).update();
          
      },

      turned: function(e, page, view) {

        var book = $(this);

        if (page==2 || page==3) {
          book.turn('peel', 'br');
        }

        updateDepth(book);
        
        $('#slider').slider('value', getViewNumber(book, page));

        book.turn('center');

      },

      start: function(e, pageObj) {
    
        moveBar(true);

      },

      end: function(e, pageObj) {
      
        var book = $(this);

        updateDepth(book);

        setTimeout(function() {
          
          $('#slider').slider('value', getViewNumber(book));

        }, 1);

        moveBar(false);

      },

      missing: function (e, pages) {

        for (var i = 0; i < pages.length; i++) {
          addPage(pages[i], $(this));
        }

      }
    }
  });


  $('#slider').slider('option', 'max', numberOfViews(flipbook));

  flipbook.addClass('animated');

  // Show canvas

  $('#canvas').css({visibility: ''});
}

// Hide canvas

$('#canvas').css({visibility: 'hidden'});

// Load turn.js

yepnope({
  test : Modernizr.csstransforms,
  yep: ['Assets/lib/turn.min.js'],
  nope: ['Assets/lib/turn.html4.min.js', 'Assets/css/jquery.ui.html4.css', 'Assets/css/steve-jobs-html4.css'],
  both: ['Assets/js/steve-jobs.js', 'Assets/css/jquery.ui.css', 'Assets/css/steve-jobs.css'],
  complete: loadApp
});

</script>


</body>
</html>