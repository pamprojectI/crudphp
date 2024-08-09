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
	    <h1>Register</h1>
        <form action="insert_register.php" method="POST" enctype="multipart/form-data">
            <label for="username">Username</label>
            <input type="text" id="" name="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" id="" name="password" placeholder="Password">
            <label>Gender</label>
            <select id="" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="name">Name</label>
            <input type="text" id="" name="name" placeholder="Name">
            <label for="email">E-mail</label>
            <input type="text" id="" name="email" placeholder="E-mail">
            <label>Image</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">	
        </form>
    </div>

    <div class="footer">
	    <p>Footer</p>
    </div>
    
</body>
</html>