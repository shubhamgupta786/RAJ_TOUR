<?php
$con=mysqli_connect( 'localhost'  , 'root' , '' , 'rajasthan_tourism' ) ; 
    if ($con == false )
     {
      die('Error: Cannot connect');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $name1=$_POST['gender'];
    $name2=$_POST['phone'];
    $name3=$_POST['mail'];
    $name4=$_POST['city'];
    $name5=$_POST['id'];
    $name6=$_POST['id_num'];
    $name7=$_POST['citizen'];
    $name8=$_POST['trip_start2'];
   
    if (empty($name)) {
        echo "Name is empty";
    } else {
        $sqli = "INSERT INTO jaswant_thada VALUES (?,?,?,?,?,?,?,?,?) ";
        if($stmt=mysqli_prepare($con,$sqli)){
            mysqli_stmt_bind_param($stmt, "sssssssss", $name, $name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8);
    
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo '<script>  alert ("Registered Sucessfully") </script>'; 
               header("location: place_22.html");
              //echo "bravoooooooooooooo";
            } else{
               echo '<script> Something went wrong. Please try again later. </script>';
            }
            mysqli_stmt_close($stmt);  

    
    }
}

}

?>






<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
body, html {
  height: 100%;
  font-family:"Comic Sans MS", cursive, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("p4.jpg");

  min-height: 1270px;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container1 {
  position: absolute;
  top: 20px;
  left: 450px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.re {
  font-size:15px;
  text-align: center;

}
#text {display:none;color:red}
</style>
<body>

  <div class="topnav">
    <a href="ex.html">Home</a>
    <a href="contact.html">Contact Us</a>
    <div class="dropdown">
          <button class="dropbtn">Places
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
          <a href="place_1.html">Jaipur</a>
          <a href="place_2.html">Jodhpur</a>
          <a href="place_3.html">Udaipur</a>
          

        </div>
      </div>
      <a href="index10.html">Search</a>
     <!--- <a href="raj_location.html">Location</a>
--->    <div class="topnav-right">
<a id="pop" href="login.php">Login</a>
    <script> document.getElementById("pop").innerHTML="Logout"</script>
      <a href="signup.php">Sign Up</a>
    </div>
  </div>

  <div class="bg-img">
<form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">



    <h1>Ticket Booking</h1>

    <label for="fname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="fname" required>

  

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Male/Female" name="gender" required>
  

<label for="phone"><b>Contact No.</b></label>
<input type="text" placeholder="Enter Contact No." name="phone" required>


<label for="mail"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="mail" required>



<label for="city"><b>City</b></label>
<input type="text" placeholder="City" name="city" required>


<label for="id"><b>Identity Proof</b></label>
<input type="text" placeholder="Aadhar card" name="id" required>

<label for="id_num"><b>Identity  Number </b></label>
<input type="text" placeholder="Identity  Number" name="id_num" required>


<label for="citizen"><b>Citizenship</b></label>
<input type="text" placeholder="Indian/Foreigner" name="citizen" required>

<label for="start">Date:</label>


<input type="date" id="start" name="trip_start2"
              value="2021-01-01"
              min="2020-01-01" max="2025-12-31"><br><br><br><br>
     

    <input type="checkbox" id="confirm" name="confirm" value="confirm">
  <label for="confirm"> <b>After checking the button, You confirm that all the details mentioned are correct.</b></label><br><br>

    <button type="submit" class="btn">Submit</button>

  </form>
</div>


</body>
</html>
