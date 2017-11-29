<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="Maincss.css" rel="stylesheet" />
</head>
<body style="background-color:antiquewhite;">
    <form class="form"  method="post" action="test.php">
        <div class="container">
            <div class="main">
                <h2>Registration form</h2>
                <br />
                UserID&emsp;&emsp;&nbsp; : <input type="text" class="classreg" name="uid" id="uid">
                <br />
                First Name&emsp; :<input type="text"class="classreg"  name="ufname" id="ufname">
                <br />
                Larst Name&emsp;:<input type="text" class="classreg" name="ulname" id="ulname">
                <br />
                Email&emsp;&emsp;&emsp; :<input type="email" class="classreg" name="uemail" id="uemail">
                <br />
                Password&emsp;&nbsp;&nbsp; :<input type="password" class="classreg" name="password" id="password">
                <br />
                Confirm password&emsp; : <input type="password" class="classreg" id="cpassword">
                <br />
                Gender&emsp; :<input type="radio" name="gender" value="Male" onclick="genfunction(this.value)">Male &nbsp;
                <input type="radio" name="gender" value="Female" onclick="genfunction(this.value)">Female
                <br />
                DateofBirth(YYYY/MM/DD)&emsp; :<input type="text" class="classreg"name="dob" id="dob">
                <br />
                <br/>
                <input type="submit" id="register"  name="register" value="Register" />
                <br />
                <input type="text" name="genresult"  id="genresult" style="visibility:hidden" />


            </div>
        </div>
    </form>
    <?php { ?>
    <script type="text/javascript">
        function genfunction(gender) {
           document.getElementById("genresult").value = gender;
        }
         
        
        $(document).ready(function (){
            $("#register").click(function () {
                var getid = $("#adname").val();
                var getpass = $("#adpass").val();
                var uid = $("#uid").val();
                var ufname = $("#ufname").val();
                var uemail = $("#uemail").val();
                var password = $("#password").val();
                var cpassword = $("#cpassword").val();
                var ulname = $("#ulname").val();
                var dob = $("#dob").val();
                var gend = $("#genresult").val();
            
                if (uid == '' || ufname == '' || uemail == '' || password == '' || cpassword == '' || ulname == '' || dob == '') {
                    alert("Fill up the empty field la!");
                    return false;
                }
                else if (gend == '') {
                    alert("Please pick your gender!")
                    return false;
                }
                else if ((password.length) < 7) {
                    alert("Enter a password more than 7 laa");
                    return false;
                } else if (!(password).match(cpassword)) {
                    alert("Your passwords don't match. Try again?");
                    return false;
                }
            }
       );
        });
    </script>
     <?php }?>
    <p>&#169 2015 DadaRage. No Rights Reserved</p>
</body>
</html>