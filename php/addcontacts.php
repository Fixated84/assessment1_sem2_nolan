<?php
 
 session_start();
if (!isset($_SESSION['username'])) {
 header('location:login.php');
}
 
$message = "<br><p></p><br>";
 $firstNameErr = $lastNameErr = $phoneErr = $emailErr = $faceBookErr = $error = $error1 = "<br><p></p><br>";
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	 
if (empty($_POST["firstname"])) {
	$firstname = "";
$firstNameErr = "<p class=\"animated bounce red\">First Name is Required.</p>";
 
$error = true;
 
}else{ 

$firstname = test_input($_POST["firstname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstNameErr = "<p class=\"animated bounce red\">Full name requires letters only</p>"; 
      $error = true;
	  
	 
} else {
	
$error = false;	
}
}

if (empty($_POST["lastname"])) {
	$lastname = "";
$lastNameErr = "<p class=\"animated bounce red\">Last name is Required</p>";
$error = true;
 
} else {


$lastname = test_input($_POST["lastname"]);	
if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lastname)) {
      $lastNameErr = "<p class=\"animated bounce red\">Last name requires letters only</p>"; 
      $error = true;
	 
}else {
	
$error = false;	
}
} 
if (empty($_POST["phone"])) {
	$phone = "";
$phoneErr = "<p class=\"animated bounce red\">Phone number is Required.</p>";
 
$error = true;
 
}else{ 

$phone = test_input($_POST["phone"]);
if (!preg_match("/^[0-9 ]*$/",$phone)) {
      $phoneErr = "<p class=\"animated bounce red\">Phone number requires numbers only</p>"; 
      $error = true;
	  
	 
} else {
	
$error = false;	
}
}
 if (empty($_POST["email"])) {
	$email = "";
$emailErr = "<p class=\"animated bounce red\">Email is Required</p>";
$error = true;

 
} else {


$email = test_input($_POST["email"]);	
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<p class=\"animated bounce red\">Invalid email format</p>"; 
      $error = true;
 
}else {
	
$error = false;	
}
} 
if (empty($_POST["facebook"])) {
	$facebook = "";
$faceBookErr = "<p class=\"animated bounce red\">Facebook is Required</p>";
$error = true;
 
} else {


$facebook = test_input($_POST["facebook"]);	
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$facebook)) {
      $faceBookErr = "<p class=\"animated bounce red\">Facebook requires a vaild URL</p>"; 
      $error = true;
	 
}else {
	
$error = false;	
}
} 

 } 
  if (!$error) {
 

 include("connect.php");
 
$queryadd = "INSERT INTO Contacts (`firstname` ,`lastname`,`phone`,`email`,`facebook`)
VALUES ('$firstname', '$lastname','$phone','$email','$facebook')";

$updatedb = mysqli_query($con,$queryadd);

  mysqli_close($con);

 if ($updatedb) {
	 $message = "";
 $message = "<br><p class=\"animated bounce green\">You have been successfully added to the contact list.</p>" ;

 }else{
	 $message = "";
   $message = "<br><p class=\"animated bounce red\"> Your information could not be added to the contact list.</p>";

} 
 

 }  
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 
 }  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon.ico">
 
	 

    <title>Add New Contact</title>
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body onLoad="" >
  <br><br>
   <!--Testing Fix Nav with navbar-fixed-top-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <!--Testing Fix Nav with navbar-fixed-top-->
     
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
         
              <div class="navbar-header1">
        <button   type="button" class="navbar-toggle collapsed menu-toggle pull-left" data-toggle="collapse" ><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
 
         <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="inverseNavbar1">
        <ul class="nav navbar-nav">
       <!--   <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>-->
           <li ><a href="../index.php">Home</a></li>
     
                             
        </ul>
     
        
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

<div class="navbarside navbar-inverse">

<nav >
<ul class="nav navbar-nav">
 <br><br>

           <li class="active" ><a href="../index.php">Home</a></li>
            
              </ul>  
</nav>

</div>

  <div class="container">
  
    <div class="row">
        
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-1 col-lg-10">
         <hr>
       <h3 >Add Contact</h3>  <br>

    <form class="loginform"   method="post">
  <fieldset class="account-info" >
  
    <label>
      First Name
      <input  type="text"  name="firstname" placeholder="First Name" value="<?php if (isset($_POST['firstname'])) echo htmlentities($_POST['firstname']); ?>"> 
    </label> 
 
<label>
   Last Name:
<input type="text" name="lastname" id="lastname" placeholder="last Name" value="<?php if (isset($_POST['lastname'])) echo htmlentities($_POST['lastname']); ?>" />
 </label>
 
<label>
 Phone:
<input type="text" name="phone" id="phone" placeholder="Phone Number" value="<?php if (isset($_POST['phone'])) echo htmlentities($_POST['phone']); ?>" />
 </label>

<label>
 Email: 
<input type="text" name="email" id="email" placeholder="Email Address" value="<?php if (isset($_POST['email'])) echo htmlentities($_POST['email']); ?>" />
 </label>

<label>
 Facebook: 
<input type="text" name="facebook" id="facebook" placeholder="Facebook" value="<?php if (isset($_POST['facebook'])) echo htmlentities($_POST['facebook']); ?>" />
 </label>
 </fieldset>
  
    <fieldset class="account-action" >
    <input type="submit" value="Submit" name="submit" class="btn left">
  
  <input type="button" value="Go Back"  onClick="window.location.href='contacts.php'" class="btn right">
     
  </fieldset>  

 

 <!--<button type="submit"  name="submit" class="btn btn-sm btn-default" >Submit</button>
 <button type="button"  name="submit" onClick="window.location.href='employees.php'" class="btn btn-sm btn-default" >Go Back</button>-->
<!--<input type="submit" value="Submit" /> 
<input name="Button2" type="button"   onClick="window.location.href='employees.php'" value="Go Back"/>
--> 
<!--<input type="button" value="Login" onClick="window.location.href='orderlist.php'"/> 
-->
 

 

</form>
<?php
 
 // shows errors
  
	 echo $message;
 echo $firstNameErr .  $lastNameErr . $phoneErr . $emailErr . $faceBookErr;
 
?>
    
    
    
</div>
     </div>
        
 
        
     
      
      <hr>
        <div class="row center-block">
    <div class="text-center col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0 hello">
      
      <p>Copyright &copy; 2015 &middot; All Rights Reserved </p>
    </div>
      
  </div>
    <hr>
    <!--End Row-->   

<!--End Wrapper-->
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
	
	var menu = "close";
	
   $('.menu-toggle').click(function()  {
	   
	   if (menu == "close") {
		   	   
	   $('.navbarside').css('-webkit-transform', 'translate(0,0)');
	   $('.navbarside').css('-moz-transform', 'translate(0,0)'); 
	   $('.navbarside').css('-o-transform', 'translate(0,0)'); 
	   $('.navbarside').css('transform', 'translate(0,0)'); 
 
	   $('.container').css('-webkit-transform', 'translate(30%,0)');
	   $('.container').css('-moz-transform', 'translate(30%,0)');
	   $('.container').css('-o-transform', 'translate(30%,0)');	   
	   $('.container').css('transform', 'translate(30%,0)');
		
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(30%,0)');   
	   $('.navbar-header1').css('-o-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('transform', 'translate(30%,0)');   
	   
	   menu = "open";
	   
	   }else {
		   
	   $('.navbarside').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbarside').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('transform', 'translate(-100%,0)');	   
	   
	   $('.container').css('-webkit-transform', 'translate(0,0)');
	   $('.container').css('-moz-transform', 'translate(0,0)');	   
	   $('.container').css('-o-transform', 'translate(0,0)');
	   $('.container').css('transform', 'translate(0,0)');	   
	   	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('transform', 'translate(-100%,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');
	   
	  
	   
	  menu = "close";
	  
	  
	  
	   }
	});   
});
</script>
 <!--    <script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
  
 document.getElementsByClassName("rickroll").item("iframe").src = "http://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";

  
})
</script> -->

<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
      
        $('#myModal').modal('show');
       
   document.getElementsByClassName("rickroll").item("iframe").src = "https://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";
    });

    $('#myModal').click(function () {
      document.getElementsByClassName("rickroll").item("iframe").src = "1";
 
  
    });
</script>
 


  </body>
</html>