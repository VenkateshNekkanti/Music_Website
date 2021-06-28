<?php
$er1="";
$server="localhost";
$username="venkatesh";
$password="abc123";
$database="agile";
$conn=mysqli_connect($server,$username,$password,$database);
/*
if($conn){
    echo "success";
}
else{
    echo "failed";
}
*/
if($_SERVER["REQUEST_METHOD"]=="POST"){


$a=$_POST['a'];
$b=$_POST['b'];

$sql = "SELECT * from signup where username='$a' and passwrd='$b' ";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)==1){

    header("location:Website.php");

}
else{

    $er1="Invalid Credentials";

}


}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Loginphp.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="login_container">
        <div class="login_box">
            <h2>login</h2>
            <form method="post">
                <div class="user_box">
                    <input type="text" name="a" required="">
                    <label>Username</label>
                </div>
                <div class="user_box">
                    <input type="password" name="b" required="">
                    <label>Password</label>
                </div>
                <input type="submit"  value="submit" class="bgn">
                <a href="SIgnup.php">SIGN-UP</a>
            </form>
        </div>
    </div>
    
   <p class="zxc"> <?php echo $er1; ?>  </p>

</body>
</html>