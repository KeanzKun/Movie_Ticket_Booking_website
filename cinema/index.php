<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
CFTv CINEMAS
</title>
<link rel="stylesheet" href="style/mystyle.css">  

</head>

<body class=nav>





<?php include('includes/navigation.php');?>










<div class="slideshow-container" data-cycle="3500">

<div class="mySlides1 fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/p1.jpg" style="width:100%; height:550px;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/p2.jpg" style="width:100%;height:550px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/p3.jpg" style="width:100%;height:550px;">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
<a class="next" onclick="plusSlides(1,0)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<div id="nav1" style="position:relative;top:-80px;right:450px;">
<ul class=nav >

<li  class=nav ><a href="home" class=nav > Now Showing</a></li>
<li  class=nav ><a href="home" class=nav > Coming soon </a></li>



</ul>

</div>


<div class="slideshow-container">

<div class="mySlides2 fade">

		<p class="title" id="title" style="	color:white;
			
			text-align:center;
			font-size:40px;"> <b><u>Branches</u></b> </p>
		<div  style="	color:white;
			
			font-size:20px;
			position:relative;
			left:500px;
			top:150px;
			">
			<p>
			Cinema Location<br>
			KLCC<br><br>
			Contact number:<br>
			1200-12-1212<br><br>
			Operation Time:<br>
			10AM-2AM
			</p>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.8807090411626!2d101.71099650791514!3d3.157485099425245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0xc955b08cfc1aae29!2sSuria%20KLCC!5e0!3m2!1sen!2smy!4v1647153101886!5m2!1sen!2smy" width="600" height="350" style="border:0;position:relative;top:-270px;left:500px;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<div class="mySlides2 fade">

		<p class="title" id="title"  style="	color:white;
			
			text-align:center;
			font-size:40px;"> <b><u>Branches</u></b> </p>
		<div  style="	color:white;
			
			font-size:20px;
			position:relative;
			left:500px;
			top:150px;
			">
			<p>
			Cinema location<br>
			Butterworth<br><br>
			Contact number:<br>
			1200-21-2121<br><br>
			Operation Time:<br>
			10AM-2AM
			</p>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37790.1974417615!2d100.38422349502777!3d5.385663047873451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac5cd86f88577%3A0x40225a1f74a9701c!2sSunway%20Carnival%20Mall!5e0!3m2!1sen!2smy!4v1647927880909!5m2!1sen!2smy" width="600" height="350" style="border:0;;position:relative;top:-270px;left:500px;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<div class="mySlides2 fade">

		<p class="title" id="title"  style="	color:white;
			
			text-align:center;
			font-size:40px;"> <b><u>Branches</b></u> </p>
		<div  style="	color:white;
			
			font-size:20px;
			position:relative;
			left:500px;
			top:150px;
			">
			<p>
			Cinema location<br>
			Kuching<br><br>
			Contact number:<br>
			1200-31-3131<br><br>
			Operation Time:<br>
			10AM-2AM
			</p>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021030.5316868143!2d109.77702496562499!3d1.5275038999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba77b64b0a849%3A0xe51884c2c1fea4a9!2sAEON%20Mall%20Kuching%20Central!5e0!3m2!1sen!2smy!4v1647927776463!5m2!1sen!2smy" width="600" height="350" style="border:0;;position:relative;top:-270px;left:500px;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<a class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
<a class="next" onclick="plusSlides(1,1)">&#10095;</a>

</div>
<?php include('includes/footer.php');?>


<script >
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
var timer=null;
showSlides(slideIndex[0], 0);
showSlides(slideIndex[1], 1);
function plusSlides(n,no) {
  clearTimeout(timer);
  showSlides(slideIndex[no] += n,no);
}

function currentSlide(n,no) {
   clearTimeout(timer);
  showSlides(slideIndex[no] = n,no);
}

function showSlides(n,no) {
  var i;
  var slides = document.getElementsByClassName(slideId[no]);
  var dots = document.getElementsByClassName("dot");
  if (n ==undefined) {n=++slideIndex[no]}   
  if (n > slides.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  
   
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex[no]-1].style.display = "block";  
  dots[slideIndex[no]-1].className += " active";
	
 timer=setTimeout(showSlides, 2000); // Change image every 2 seconds
 
}



</script>

	


</body>





</html>