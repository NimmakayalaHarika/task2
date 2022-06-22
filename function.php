<?php
include("config.php");
if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    
    $result = mysqli_query($mysqli,"INSERT INTO register values('$Name', '$Password', '$Gender', '$Email')");

    if($result)
    {
        header("Location:form.php");
    }
    else{
        echo "failed";
    }
}
?>