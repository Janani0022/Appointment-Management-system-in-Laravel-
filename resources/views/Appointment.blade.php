<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link href="CSS/book.css" rel="stylesheet" >
    
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

<center>
    @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          </div>
      @endif
</center>

<h3 align="center">Welcome to our convenient online platform!</br>
Schedule your next car service appointment here</h3>

<h2 align="center">Appointment Reservation</h2>


<div class="div">
<form action="{{url('/fill')}}" method="POST">
   
    @csrf
        <table width="100%">
        <tr>
            <td class="td"><label for="name" class="label">Name<span class="required">*</span></label></br>

        <input type="text" name="Fname" id="Fname" class="textbox" required>
        <figcaption class="fig">First</figcaption>
        <input type="text" name="Lname" id="Lname" class="textbox" required>
        <figcaption class="fig">Last</figcaption>
</td>

        <td class="td"><label for="phone" class="label">Phone Number<span class="required">*</span> </label></br>
        <input type="text" name="phone" id="phone" placeholder="07x xxx xxxx" class="textbox" required></br></br>

        <label for="id" class="label">NIC/Driving License No<span class="required">*</span> </label></br>
        <input type="text" name="id" id="id" class="textbox" required>
</td>
</tr>
<tr>
        <td class="td"><label for="type" class="label">Vehicle Type<span class="required">*</span> </label></br>
        <input type="text" name="type" id="type" class="textbox" required>
</td>
        <td class="td">
        <label for="num" class="label">Vehicle Number</label></br>
        <input type="text" name="num" id="num" class="textbox">
</td>
</tr>
<tr>
        <td class="td"><label for="model" class="label">Vehicle Model<span class="required">*</span> </label></br>
        <input type="text" name="model" id="model" class="textbox" required>
</td>
</tr>

<tr>
        <td class="td"><label for="services" class="label">Select Services<span class="required" required>*</span>(View service details <a href="/Services">here</a>) </label></br></br>
        <label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service"  value="Gold Shine(Package 1)">
    <span class="checkmark"></span>Gold Shine(Package 1)
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Silver Shine(Package 2)">
    <span class="checkmark"></span>Silver Shine(Package 2)
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Platinum Shine(Package 3)">
    <span class="checkmark"></span>Platinum Shine(Package 3)
</label></br></br>
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Car wash & vacuum cleaning">
    <span class="checkmark"></span>Car wash & vacuum cleaning
</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Scanning">
    <span class="checkmark"></span>Scanning
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Cut & polish">
    <span class="checkmark"></span>Cut & polish
</label></br></br>
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Battery repairing">
    <span class="checkmark"></span>Battery repairing
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Lubricat change">
    <span class="checkmark"></span>Lubricat change
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Under wash">
    <span class="checkmark"></span>Under wash
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Engine wash">
    <span class="checkmark"></span>Engine wash
</label></br></br>
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Hand wax">
    <span class="checkmark"></span>Hand wax
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Machine wax">
    <span class="checkmark"></span>Machine wax
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label class="checkbox-container">
    <input class="custom-checkbox" type="checkbox" name="service" value="Glass clay works">
    <span class="checkmark"></span>Glass clay works
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
</tr>
<tr>
        <td class="td"></br><label for="date" class="label">Date<span class="required">*</span> </label></br>
        <select id="date" name="date" class="textbox" required>
             <!-- Options will be populated by JavaScript -->
        </select>
</td>
        
        <td class="td"></br><label for="time" class="label">Time<span class="required">*</span> (Only 4 appointments per hour)</label></br>
        <select id="time" name="time" class="textbox" required>
   <!-- Options will be populated by JavaScript -->
   </select>
</td>
</tr>
<tr>
    
    <td></td>
        <td></br><button type="reset" id="reset" class="reset">Reset</button>
        <button type="submit" id="submit" class="submit">Submit</button></td>
</tr>
        </table>
    </form>
  
</div>

</br>

<table width="50%" align="center">
        <tr>
                <td width="20%"><img src="Images/Berner.png" width="100px" height="30px"></td>
                <td width="20%"><img src="Images/Mobil.png" width="90px" height="40px"></td>
                <td width="20%"><img src="Images/Toyota.png" width="60px" height="50px"></td>
                <td width="20%"><img src="Images/Tyres.png" width="90px" height="90px"></td>
</tr>
</table>

<script>
        // time ranges 
        const timeRanges = [
            { start: '09:00', end: '10:00' },
            { start: '10:00', end: '11:00' },
            { start: '11:00', end: '12:00' },
            { start: '13:00', end: '14:00' },
            { start: '14:00', end: '15:00' },
            { start: '15:00', end: '16:00' },
            { start: '16:00', end: '17:00' },
        ];

        const form = document.getElementById('appointmentForm');
        const dateSelect = document.getElementById('date');
        const timeSelect = document.getElementById('time');

        // date dropdown with next 7 days
        for (let i = 0; i < 7; i++) {
            const date = new Date();
            date.setDate(date.getDate() + i);
            const option = document.createElement('option');
            option.value = date.toISOString().split('T')[0];
            option.textContent = date.toDateString();
            dateSelect.appendChild(option);
        }

        // Populate time dropdown
        timeRanges.forEach(range => {
            const option = document.createElement('option');
            option.value = `${range.start}-${range.end}`;
            option.textContent = `${range.start} - ${range.end}`;
            timeSelect.appendChild(option);
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const selectedDate = dateSelect.value;
            const selectedTime = timeSelect.value;

            // check if the selected time is available
    
            let isAvailable = true;
            const appointments = JSON.parse(localStorage.getItem(selectedDate) || '{}');

            if (appointments[selectedTime]) {
                if (appointments[selectedTime] >= 4) {
                    isAvailable = false;
                } else {
                    appointments[selectedTime]++;
                }
            } else {
                appointments[selectedTime] = 1;
            }

            localStorage.setItem(selectedDate, JSON.stringify(appointments));

            if (isAvailable) {
                
                alert('Appointment booked successfully!');
            } else {
                alert('Selected time is not available. Please choose another time.');
            }
        });
    </script>
</body>
</html>