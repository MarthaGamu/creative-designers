<?php
session_start();
include'header.php';

$db =mysqli_connect("localhost","root", "","academy");

if(isset($_POST['submit'])){

$name =     mysqli_real_escape_string($db ,$_POST['name']);
$email =    mysqli_real_escape_string($db ,$_POST['email']);
$password =  mysqli_real_escape_string($db, $_POST['password']);
$password2  =  mysqli_real_escape_string($db, $_POST['password2']);


   if($password == $password2){

       $password = md5($password);
      
       $sql = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";

       mysqli_query($db,$sql);

       $_SESSION['message']  = "You are now logged in";
       echo $_SESSION['message'];
       $_SESSION['name']  = $name;
      
      header("Location:home.php");
   }

    else{
     $_SESSION['message'] = "The two passwords do not match";
     echo $_SESSION['message'];

    }
   

}
?>



<div class ="regy">
    <h1> Register </h1>

</div>




<table>
    
<form action='signup.php' method='post'>
<tr>
<td>Name: </td>
<td><input type="text" name="name" class="textInput"></td>

</tr>
<tr>
<td>Email: </td>
<td><input type="email" name="email" class="textInput"></td>

</tr>
<tr>
<td>Password: </td>
<td><input type="password" name="password" class="textInput"></td>
<tr>
<td>Confirm Password: </td>
<td><input type="password" name="password2" class="textInput"></td>

</tr>
<tr>
<td><input type="submit" name="submit" class="textInput"><td>
</tr>


</form>
</table>
<?php
include'footer.php';
?>