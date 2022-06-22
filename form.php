<!DOCTYPE HTML>
<html>
<head>
<title>Register Form</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
    <div>
        <div class="container">
            <br><h1>Registration Form</h1></br>
            <div class="GroBtn">
                <form action="function.php" method="POST">
<table>
<tr> 
    <td>Name :</td>
    <td><input type="text" name="Name" required/></td>
</tr>
<tr>
    <td>Password :</td>
    <td><input type="Password" name="Password"required/></td>
</tr>
<tr>
    <td>Gender :</td>
    <td>
        <input type="radio" name="Gender" value="male"required/>Male
        <input type="radio" name="Gender" value="female"required/>Female
    </td>
</tr>
<tr>
    <td>Email :</td>
    <td><input type="text" name="Email"required/></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit"  name="submit" value="submit" class= required/></td>
    

</tr>
</table>
<a href="login.php"><p class="GrpBtn2"> already have an account?login now</p></a>

</form>
</div>
</div>
</div>
</body>
</html>      