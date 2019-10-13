<html>
<head>
	
</head>

<?php
    require 'headers.php';
?>

    <body background color="red">
        <div class="">
           
            
            <form action="msg.php" method="post">
                <div class=inner_div>
				<p align=center>LOGIN</p>
                    <label class=welcome >Username :</label><br><input type="text" class=input_text id="uname" name="User_Name"><br><br>
                    <label class=welcome >Password :</label><br><input type="text" class=input_text id="pword" name="Password">
                    <div class=btn_holder><input type="submit" class=btn name="login" value="login"></div>
                </div>
            </form>
        </div>
    </body>

</html>