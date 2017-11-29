<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <link href="Maincss.css" rel="stylesheet">
</head>
<body>
    <?php session_start();?>
    
    <div class="none" style="float:left;padding-top:2px;">
        <a class="btn" href="logout.php" >Logout</a>
        <p id="lala">
            <?php echo 'Hi &nbsp&nbsp' . $_SESSION["userid"];?>
        </p>
        </div>
        <br />
    <br />
    <br />
        <object id="my-Todo" class="objectbox" data="index.php" height="500" width="600" style="margin-top:2px;
 padding:10px 0 10px 10px;
 margin-right:50px;
 width:500px;
 float:right"></object>

        <object id="my-Note" class="objectbox" data="Note.php" height="500" width="600" style="margin-top:2px;
 padding:10px 0 10px 10px;
 margin-left:50px;
 width:500px;
 float:left"></object>
        <p>&#169 2017 DadaRage. No Rights Reserved</p>
</body>
</html>