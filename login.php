<!-- < ?php 
	session_start(); 
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

    <div class="topnav">
	    <a href="index.php">Home</a>
	    <a href="show_member.php">Member</a>
	    <a href="register.php">Register</a>
	    <a href="login.php">Login</a>
    </div>
    <div class="content">
	    <h1>Login</h1>

    <form action="check_login.php" method="POST">
        <label for="">Username</label>
        <input type="text" id="" name="username" />
        <labelfor="">Password</label>
        <input type="password" id="" name="password" />
        <?php
            if(isset($_SESSION["Error"])){
                echo $_SESSION["Error"];
            }
        ?>
        <input type="submit" name="submit" value="Login" />
        <input type="reset" name="reset" value="Reset" />
        <p><a href="register.php">Register</a></p>
    </form>
    </div>

    <div class="footer">
	    <p>Footer</p>
    </div>
</body>
</html>