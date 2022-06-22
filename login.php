<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
     <div class="hari">
     <h2>Login form</h2>
     </div>
     <div class="GrpCtn">
            <form action="user.php" method="get" name="myForm" onsubmit="return validateForm()">
            <div class="login">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" > <br/><br/>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br/><br/>
               
                <input type="submit" value="Submit" name="Submit" class="GrpBtn1">
                <a href="form.php"><p class="GrpBtn2"> you don't have an account?Register now</p></a>
            </div>
            </form>
     </div>
 </div>
 <?php
 include("config.php");
    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $result = mysqli_query($mysqli,"SELECT * FROM Register WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result)==1){
            echo "Login Successful";
            header("location:user.php");
        }
        else{
            echo "Login Failed";
        }
    }
 ?>

</body>   
</html> 
