<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome - bustdown.club</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <link rel="stylesheet" href="/a/daddydavid2.css">

</head>
<body>
    <div class="center">
        <h1>hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. welcome to bdc.</h1><br>
        <h1>you are uid <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b> </h1>
    </div>
   
   <center>
    <p>   
        <a href="reset-password.php" class="resetpasswordbtn">Reset Your Password</a><br>
        <a href="logout.php" class="logoutbtn">Sign Out of Your Account</a>
    </p>
</center>

        <footer>
            <div class="footer">
                <p>made by <a href="https://davidscode.gq" target="_blank">davidscode.gq</a> (c) 2019 ~ w.i.p.</p>
            </div>
        </footer>
</body>
</html>