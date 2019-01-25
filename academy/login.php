<?php
session_start();
$db =mysqli_connect("localhost","root", "","academy");
include'header.php';


?>


<table class ="regy">

<form action='signup.php' method='post'>
<tr><td><h1> Login </h1></td></tr>
<tr>
<td>Email: </td>
<td><input type="email" name="email" class="textInput" required></td>

</tr>
<tr>
<td>Password: </td>
<td><input type="password" name="password" class="textInput" required></td>
<tr>

<tr>
<td><input type="submit" name="submit" class="textInput" required><td>
</tr>
<tr>
    <td><a href="forgotpassword.php">Forgot Password</a></td>
</tr>

</form>
</table>
<?php
include'footer.php';
?>