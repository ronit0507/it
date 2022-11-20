<!-- Ques-11. Create index.html file containing two forms for SignIn and SignUp. Submitting SignIn form should
search for credentials in mysql database using server created in previous practical. On successful signin, a
welcome page should be displayed. Submitting SignUp form should insert new entry for credentials in mysql database using
server created in previous practical. On successful signup, user should be returned back to index.html.
Q 11 page 4 verify.php -->
<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
  die("Connection Failed;)".mysqli_connect_error());
}
else{
  $s1=0;
  $s2=0;
  $phone=$_POST['PHONE'];
  $password=$_POST['PASSWORD'];
  $sql="SELECT `phone`,`password` FROM `Ques11`.`data` ;";
  $row=mysqli_query($con,$sql);
  while($one=mysqli_fetch_array($row))
  {
    if($one[0]==$phone){
      $s1=1;
      if($one[1]==$password){
        $s2=1;
        break;
      }
    }
  }
  if($s1==1&&$s2==1){
    echo '<script>alert("Welcome");</script>';
  }
  // <!-- Ques-11. Create index.html file containing two forms for SignIn and SignUp. Submitting SignIn form should
  // search for credentials in mysql database using server created in previous practical. On successful signin, a
  // welcome page should be displayed. Submitting SignUp form should insert new entry for credentials in mysql database using
  // server created in previous practical. On successful signup, user should be returned back to index.html.
  // Q 11 page 5 verify.php -->
  else
  {
    echo '<script>alert("NO_DATA_FOUND"); window.open("index.html","_self");</script>';
  }
}
?>
