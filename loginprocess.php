<?php 

session_Start();

$mysqli = new mysqli("localhost","root","","hospital") or die (mysqli_error($mysqli));
$visibilty="hidden";


if(isset($_POST["login"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$result= $mysqli->query("SELECT * FROM login WHERE username='".$username."' AND password='".$password."'") or die($mysqli->error);
$row = $result->fetch_assoc();
$num = mysqli_num_rows($result);
if($num > 0){
    $_SESSION["username"]=$row["username"];
    header("Location: admin.php");
    exit();
}

else{  
    $_SESSION["message"] = "Incorrect username or password";
    header("Location: login.php");
}
};
?>