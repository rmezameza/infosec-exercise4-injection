
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

    <?php
    include 'databasehelper.php';
    $conn = OpenCon();
    echo "Connected Successfully";
    CloseCon($conn);
    ?>
	
<form method="post" action="login.php">
Login Site<br>
Username:<input type="text" name="username" ><br>
Password:<input type="password" name="password"><br>
<input type="submit" value="Login">
</form><br>

<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
</body>
</html>
