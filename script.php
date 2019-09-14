<?php 
  if (isset($_POST['form_submitted'])): ?> //this code is executed when the form is submitted

 <h2>Thank You</h2>

 <p>You have been registered as
     <?php echo $_POST['name1'] . ' ' . $_POST['name2']; ?>
 </p>

 <p>Go <a href="vihaan.php">back</a> to the form</p>

 <?php else:
$con = mysqli_connect("localhost", "root", "", "entries") 
or die(mysqli_error($con));


$Name1=mysqli_real_escape_string($con, $_POST['name1']);

$Schno1=mysqli_real_escape_string($con, $_POST['schno1']);

$Branch1=mysqli_real_escape_string($con, $_POST['branch1']);

$Name2=mysqli_real_escape_string($con, $_POST['name2']);

$Schno2=mysqli_real_escape_string($con, $_POST['schno2']);

$Branch2=mysqli_real_escape_string($con, $_POST['branch2']);

$Email=mysqli_real_escape_string($con, $_POST['Email']);

$Contact=mysqli_real_escape_string($con, $_POST['Contact']);


$user_registration_query="INSERT INTO entries(Name1,Schno1,Branch1,Name2,Schno2,Branch2,Email,Contact) values('$Name1','$Schno1','$Branch1','$Name2','$Schno2','$Branch2','$Email','$Contact')";


$user_registration_submit=mysqli_query($con,$user_registration_query) 
or die(mysqli_error($con));
?>