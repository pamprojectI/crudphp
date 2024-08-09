<?php
	include 'config.php'; //เชื่อมต่อฐานข้อมูล
    $id = $_GET['id'];
    $sql = "SELECT * FROM member WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>

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
	    <h1>Edit Member</h1>
        <p></p>

        <form action="update_member.php" method="POST" enctype="multipart/form-data">
            <label for="id">Username Id</label>
            <input type="text" id="" name="id" value=<?=$row['id']?> >
            <label for="username">Username</label>
            <input type="text" id="" name="username" value=<?=$row['username']?> >
            <label for="password">Password</label>
            <input type="password" id="" name="password" value=<?=$row['password']?> >
            <label>Gender</label>
                <select id="" name="gender" value=<?=$row['gender']?> >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            <label>Name</label>
            <input type="text" id="" name="name" value=<?=$row['name']?> >
            <label>Email</label>
            <input type="text" id="" name="email" value=<?=$row['email']?> >
            <label>Image</label>
            <img src="image/<?=$row['image']?>" width="56px">
            <input type="file" id="" name="fileToUpload">
            <input type="hidden" id="" name="txtimg" value=<?=$row['image']?> >

            <input type="submit" name="submit" value="Update">
            <input type="reset" name="reset" value="Reset">
        </form>
            
    </div>

    <div class="footer">
	    <p>Footer</p>
    </div>
    
</body>
</html>


<!-- <script language="JavaScript">
	function Del(message) {
		var agree=confirm("Do you want to delete the data?");
		if (agree) {
			window.location=mypage;
		}
	}
</script>
	<td><a href="admin_del_member.php?id=< ?=$row['id']?>" onclick="Del (this.href);return false;"> Delete </a></td> -->
