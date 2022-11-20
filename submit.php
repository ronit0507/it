
<!-- Ques-11. Create index.html file containing two forms for SignIn and SignUp. Submitting SignIn form should
search for credentials in mysql database using server created in previous practical. On successful signin, a
welcome page should be displayed. Submitting SignUp form should insert new entry for credentials in mysql database using
server created in previous practical. On successful signup, user should be returned back to index.html. 
Q 11 page 3 submit.php -->

<?php
$con=mysqli_connect("localhost","root",""); if(!$con)
{die("Connection Failed;)".mysqli_connect_error());} else
{
$name=$_POST['NAME'];
$age=$_POST['AGE'];
$phone=$_POST['PHONE'];
$gender=$_POST['GENDER'];
$password=$_POST['PASSWORD'];
$sql="INSERT INTO `Ques11`.`data` ( `Name`, `age`, `phone`, `gender`, `password`,
`time`) VALUES ( '$name', '$age', '$phone', '$gender', '$password', current_timestamp());";
$con->query($sql);
// alert("Success");
echo'<script>alert("Success"); window.open("index.html");</script>';
}
?>
