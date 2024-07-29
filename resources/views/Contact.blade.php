<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pearl Shine</title>
    <link href="CSS/contact.css" rel="stylesheet" >
    
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


<h1>&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</h1>

<table width="30%" class="table1" align="left">
<tr class="td1">
 
    <td><center><img src="Images/download(1).png" width="170px" height="120px"></center>
    &nbsp;&nbsp; <img src="Images/icon1.png" width="35px" height="25px">
&nbsp;        No.100, Hyde Park Corner, Colombo, Srilanka</br></br>
&nbsp;&nbsp;&nbsp;      <img src="Images/icon2.png" width="20px" height="20px">
&nbsp;&nbsp;&nbsp; +94 453691888</br></br>
&nbsp;&nbsp;       <img src="Images/icon3.png" width="30px" height="20px">
&nbsp;&nbsp;&nbsp;   <a href="mailto:web@pearlshine.lk" class="link">web@pearlshine.lk</a></br></br>

</td>
</tr>

</table>



<table width="65%" class="table2" align="right">
<form action="{{url('/msg')}}" method="POST">
  <center>
    @if(Session::has('success1'))
            <div class="alert1 alert-success" role="alert">
              {{Session::get('success1')}}
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            </div>
        @endif
        
  </center>
    @csrf

    <tr>
       <td> <div class="input-field">
        <input type="text" id="nm" name="name" value="{{old('name')}}">
        <label>Name</label>
        <span class="text-danger">@error('name'){{$message}} @enderror</span>
      </div></td>
     <td> <div class="input-field">
        <input type="text" id="num" name="num" value="{{old('num')}}">
        <label>Mobile Number</label>
      </div></td>
</tr>
<tr>
       <td> <div class="input-field">
        <input type="text" id="em" name="email" value="{{old('email')}}">
        <label>Email</label>
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
      </div></td>
     <td> <div class="input-field">
        <input type="text" id="sub" name="sub" value="{{old('sub')}}">
        <label>Subject</label>
      </div></td>
</tr>
<tr>
       <td> <div class="input-field">
        <input type="text" id="msg" name="message" value="{{old('message')}}">
        <label>Message</label>
        <span class="text-danger">@error('message'){{$message}} @enderror</span>
      </div></td>
</tr>
<tr>
        <td></br><button type="reset" id="reset" class="reset">Reset</button>
        <button type="submit" id="submit" class="submit">Submit</button></td>
</tr>

</form>
</table>


<table width="100%" align="center">

<form action="{{url('/feed')}}" method="POST">
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
  <h1>Feedback & Suggestions</h1>
<center>
  @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          </div>
      @endif
</center>
  @csrf

  <tr>
    
<td width="50%"  class="tablefeed">
  <label for="name" class="label2">Name:</label><br>
    <input type="text" id="name" name="name" class="textbox"><br><br>

    <label for="email" class="label2">Email<span class="required">*</span>:</label><br>
    <input type="email" id="email" name="email" class="textbox" required><br><br>

    <label for="subject" class="label2">Subject<span class="required">*</span>:</label><br>
    <input type="text" id="subject" name="subject" class="textbox" required><br><br>

    <label for="feedback" class="label2">Feedback<span class="required">*</span>:</label><br>
    <textarea id="feedback" name="feedback" rows="4" class="textbox" placeholder="Your feedback..." required></textarea><br><br>

 
        </br><button type="reset" id="reset2" class="reset">Reset</button>
       <input type="submit" value="Submit" class="submit" onclick="submitFeedback()">
</td>

</form>

<td width="50%"  class="tablefeed">
<center>
<div class="feedback-container" id="feedbackContainer">
  <h2>Customer Feedbacks</h2>
 @if(isset($feed))
  
    @foreach ($feed as $feeds)
    
  <div class="container">
   
    <div align="left">
      <table><tr>
      <td><img src="Images/user2.png" width="45px" height="45px"></td>
    <td class="details">&nbsp;&nbsp;{{$feeds['Name']}}</br>
      &nbsp;&nbsp;{{$feeds['Email']}}</td>
  </tr></table>
    <div class="details"><b>&nbsp;&nbsp;&nbsp;&nbsp;{{$feeds['Subject']}}</b></div>
    &nbsp;&nbsp;&nbsp;&nbsp;{{$feeds['Feedback']}}
    
    </div>
  </div>



@endforeach

@endif
</div>


</center>
</td>
</tr>
</table>






</body>
</html>