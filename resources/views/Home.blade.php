<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pearl Shine</title>
    <link href="CSS/new.css" rel="stylesheet" >
    
</head>
<body class="body">
    
<div class="nav">
<table align="left">
<tr>
<td> 
<img src="Images/download(1).png" width="170px" height="120px"></td>
</tr>
</table>

<table width="500px" align="right">
<tr>
<td align="center"><a class="textnav" href="/" target="_parent" ><b>Home</b></a></td>
<td align="center"><a class="textnav" href="/Services" target="_parent" ><b>Services</b></a></td>
<td align="center"><a class="textnav" href="/About" target="_parent"><b>About us</b></a></td>
<td align="center"><a class="textnav" href="/Contact" target="_parent"><b>Contact us</b></a></td>
<td align="center">
<div class="dropdown">
<img src="Images/user.png" width="40px" height="40px" class="userimg">
  <div class="dropdown-content" style="right:0;">
    <a href="/LogIn">Log In</a>
    <a href="/SignUp">Sign Up</a>
  </div>
</div>
</td>
</tr>
</table>

</div>

</br>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="Images/banner1.jpg" style="height: 500px; width: 1500px;">
</div>

<div class="mySlides fade">
  <img src="Images/banner2.jpg" style="height: 500px; width: 1500px;">
</div>

<div class="mySlides fade">
  <img src="Images/banner3.jpg" style="height: 500px; width: 1500px;">
</div>
</div>
</br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</br>
<h2 align="center">Get your vehicle back on the road smoothly by booking 
a service appointment</br> with just a few clicks.</h2>

<h1 align="center">Our Services</h1>

<table align="center">
<tr><td align="center" width="200px"><img src="Images/car wash.png" width="170px" height="120px"></td>
<td align="center" width="200px"><img src="Images/car service.png" width="100px" height="110px"></td>
<td align="center" width="200px"><img src="Images/car scan.png" width="110px" height="110px"></td>
<td align="center" width="200px"><img src="Images/car polish.png" width="150px" height="150px"></td>
<td align="center" width="200px"><img src="Images/car battery.png" width="140px" height="120px"></td>
<td align="center" width="200px"><img src="Images/car painting.png" width="160px" height="120px"></td></tr>

<tr class="td">
  <td align="center"></br>Car Wash & Vacuum Cleaning</td>
  <td align="center">Vehicle Services</td>
  <td align="center">Vehicle Scanning</td>
  <td align="center"></br>Cut & Polish & Interior Cleaning</td>
  <td align="center"></br>Hybrid Battery</br> Repairing</td>
  <td align="center"></br>Tinker, painting & Accident Repairing</td>
</tr>
</table>

</br></br>
<center>
<button class="button" onclick="document.location='/LogIn'">Booking Now</button>
</center>

</br></br></br>


<div class="footer">
  
<table align="left" width="50%">
  <tr><td>
  <img src="Images/download(1).png" width="170px" height="120px">
 
</td></tr>
</table>

<table width="50%">
<tr>

<td width="20%" class="al"><b>Quick Links</b></br></br>
<a class="textfoot" href="/" target="_parent" >Home</a></br>
<a class="textfoot" href="/Services" target="_parent" >Services</a></br>
<a class="textfoot" href="/About" target="_parent">About us</a></br>
<a class="textfoot" href="/Contact" target="_parent">Contact us</a></br>
<a class="textfoot" href="/LogIn" target="_parent">Log In</a></br></br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.781657462384!2d79.85681437478699!3d6.916687618469761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596c5eca8c7d%3A0x2e49f95e1cfadcad!2s100%20Hyde%20Park%20Corner%2C%20Colombo%2000200!5e0!3m2!1sen!2slk!4v1716520893844!5m2!1sen!2slk" 
 width="130" height="80" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>

<td width="20%" class="al"><b>Find Us</b></br></br>
<div class="textfoot" >
              <img src="Images/icon1.png" width="35px" height="25px">
&nbsp;        No.100, Hyde Park Corner, Colombo, Srilanka</br></br>
&nbsp;        <img src="Images/icon2.png" width="20px" height="20px">
&nbsp;&nbsp;&nbsp; +94 453691888</br></br>
              <img src="Images/icon3.png" width="30px" height="20px">
&nbsp;&nbsp;&nbsp;   <a href="mailto:web@pearlshine.lk" class="textfoot">web@pearlshine.lk</a></br></br>
&nbsp;         <img src="Images/icon4.png" width="20px" height="20px">
&nbsp;&nbsp;&nbsp;&nbsp;  <a href="www.facebook.com" class="textfoot">Follow us</a>
</div></td></tr>

</table>

</div>







<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

</body>
</html>
