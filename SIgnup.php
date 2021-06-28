<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Sign-up.css'>
    <script src='main.js'></script>

</head>




<body>

     <?php
   
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
          echo "fail";
      }
*/
      if($_SERVER["REQUEST_METHOD"]=="POST"){
      
       $a=$_POST["a"];
       $b=$_POST["b"];
       $c=$_POST["c"];
       $d=$_POST["d"];

      
       $sql="INSERT INTO signup values('$a','$b','$c')";

       $res=mysqli_query($conn,$sql);
        
       /*
       if($res){
           echo "inserted";
       }
       else{
           echo "fail";
       }
      */




      }





   ?>



    <div class="signup_container">
        <div class="signup_box">
            <h2>SIGN-UP</h2>

         


            <form method="post">
                <div class="user_box">
                    <input type="text" name="a" required="">
                    <label>Username</label>
                </div>
                <div class="user_box">
                    <input type="email" name="b" required="">
                    <label>E-mail</label>
                </div>
                <div class="user_box">
                    <input type="password" name="c" required="">
                    <label>Enter Password</label>
                </div>
                <div class="user_box">
                    <input type="password" name="d" required="">
                    <label>Confirm Password</label>
                </div>
                <input type="submit" class="bng"  value="submit">
                <a href="Login.php">Login</a>
            </form>
        </div>
    </div>
    
</body>
</html>