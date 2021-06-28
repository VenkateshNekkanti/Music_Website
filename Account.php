
<?php

$server="127.0.0.1";
$username="venkatesh";
$password="abc123";
$database="agile";

$conn=mysqli_connect($server,$username,$password,$database);
/*
if($conn){
    echo "true";
}
else{
    echo "false";
}
*/
if($_SERVER["REQUEST_METHOD"]=="POST"){

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];


$sql="UPDATE signup set  username='$a',email='$b',passwrd='$c' Where (username='varun') ";
$res=mysqli_query($conn,$sql);

if($res){
    echo "updated";
}
else{
    echo "fail";
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
    <link rel='stylesheet' type='text/css' media='screen' href='Account.css'>
    <script src='main.js'></script>

</head>


<body>

    <div class="signup_container">
        <div class="signup_box">
            <h2>Edit-Profile</h2>

         


            <form method="post">
                <div class="user_box">
                    <input type="text" name="a" required="">
                    <label>Change Username</label>
                </div>
                <div class="user_box">
                    <input type="email" name="b" required="">
                    <label>Change E-mail</label>
                </div>
                <div class="user_box">
                    <input type="password" name="c" required="">
                    <label>Change Password</label>
                </div>
                <div class="user_box">
                    <input type="password" name="d" required="">
                    <label>Confirm Password</label>
                </div>
                <input type="submit" class="bng"  value="Submit">
                
            </form>
        </div>
    </div>
    
</body>
</html>