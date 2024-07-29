<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="CSS/admin.css" rel="stylesheet" >
    
</head>
<body class="body">
    

<table align="center" width="100%">
<tr>
<td class="nav" width="50%"> 
<img src="Images/download(1).png" width="700px" height="500px"></td>
<td width="50%"><iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=1&ctz=Asia%2FColombo&bgcolor=%23ffffff&showTitle=0&showPrint=0&src=MjdjMzA1NjhhNjc5NWVhMTRiMGMyMDVlMTI2YTFiNjdkOTlkZjMzODAzNGU5YWU2NGU5ZWU2NzM3MmE2MzNmNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043" 
    style="border:solid 1px #777" width="750px" height="370px"></iframe></td>
</tr>
</table>
</br></br>


@if(isset($appointments))
<div class="rec-container">

<table id="customers">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Appointments</h2>
    <tr>
      <th>NIC</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Vehicle Type</th>
      <th>Vehicle Number</th>
      <th>Vehicle Model</th>
      <th>Services</th>
      <th>Date</th>
      <th>Time</th>
      <th>Done</th>
    </tr>

    @foreach ($appointments as $rec)
    <tr id="row-{{$appointments}}">
      <td>{{$rec['NIC']}}</td>
      <td>{{$rec['Name']}}</td>
      <td>{{$rec['PhoneNumber']}}</td>
      <td>{{$rec['VehicleType']}}</td>
      <td>{{$rec['VehicleNumber']}}</td>
      <td>{{$rec['VehicleModel']}}</td>
      <td>{{$rec['Services']}}</td>
      <td>{{$rec['Date']}}</td>
      <td>{{$rec['Time']}}</td>
      
      <td><form action="{{url('/delete-rec' ,$rec->id)}}" method="POST">
        @csrf
        @method('DELETE')
      
      <button type="submit" class="delete">Delete</button>
      </form></td>
       
    </tr>
   @endforeach
  
  </table>
</div>
@endif

</br></br>
<h3>&nbsp;&nbsp;Enter customer NIC/Driving License No to view past activities</h3>


<form action="{{url('/rec')}}" method="GET">
  @csrf
&nbsp;&nbsp;<input type="text" name="search" id="search" class="textbox" placeholder="Search..." required>
<button type="submit" class="search"><img src="Images/search.png" width="18px" height="15px"></i></button>
</form>

@if(isset($users))
@if($users->isNotEmpty())
<table id="customers">
    <tr>
      <th>NIC</th>
      <th>Name</th>
      <th>Phone Nmber</th>
      <th>VehicleType</th>
      <th>Vehicle Number</th>
      <th>Vehicle Model</th>
      <th>Services</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
    
    @foreach($users as $users)
    <tr>
      <td>{{$users->NIC}}</td>
      <td>{{$users->Name}}</td>
      <td>{{$users->PhoneNmber}}</td>
      <td>{{$users->VehicleType}}</td>
      <td>{{$users->VehicleNumber}}</td>
      <td>{{$users->VehicleModel}}</td>
      <td>{{$users->Services}}</td>
      <td>{{$users->Date}}</td>
      <td>{{$users->Time}}</td>
    </tr>
   
    @endforeach
  </table>
@else
<div class="user">{{session('error')}}</div>
@endif

@else
<div class="user">{{session('error')}}</div>
@endif

</br></br>


@if(isset($msg))
<table width="100%" align="center">
  <tr><td width="50%">
    
    <div class="msg-container" id="msgContainer">
      <h2 class="h3">Customer Messages</h2>
      @foreach ($msg as $msgs)
  <div class="container">
    <div align="left">
      <table><tr>
        <td><img src="Images/user2.png" width="45px" height="45px"></td>
      <td><div class="details">&nbsp;&nbsp;{{$msgs['Name']}}</br>
      &nbsp;&nbsp;{{$msgs['MobileNumber']}}</br>
      &nbsp;&nbsp;{{$msgs['Email']}}</div>
      </td></tr>
</table>
<div class="details"><b>&nbsp;&nbsp;{{$msgs['Subject']}}</b></div>
      {{$msgs['Message']}}

      <form action="{{url('/delete-message' ,$msgs->id)}}" method="POST">
        @csrf
        @method('DELETE')
      </br>
      <button type="submit" class="delete">Delete</button>
      </form>
    </div>
  </div>

@endforeach

</div>
@endif
</td>
<td width="50%" >
<img src="Images/download(1).png" width="700px" height="500px">
</td></tr>
</table>
</body>
</html>