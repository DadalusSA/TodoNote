<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color:antiquewhite;">
<?php
    
?>
    <h1><b>WELCOME TO TODO!</b></h1>
    <form action="loginuser.php" method="post" name="login">
        UserID&nbsp&nbsp; : <input type="text" name="userid"  placeholder="UserID" required />
        <br/>
        <br/>
        UserPW : <input type="password" name="userpw" placeholder="Password" required />
        <br/>
        <br/>
        <input name="submit" style="text-decoration: none;
    background-color:lightblue;
    font-size:20px;
    height:30px;
    width:68px;
    border-radius:38%;
    cursor:pointer;"
            type="submit" value="Login" />
        <br />
        <p>Not register yet? <a href="register.php">Click Here</a></p>
        <br/>
        <p>&#169 2017 DadaRage. No Rights Reserved</p>
    </form>
</body>
</html>
