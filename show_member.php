<?php
	include 'config.php'; //เชื่อมต่อฐานข้อมูล
	// session_start(); 
	
	// if (!isset($_SESSION["username"])) //ต้อง Login ก่อนถึงเข้าใช้งานได้
	// header("location:login.php"); 
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
        <div class="search-container">
            <form action="/show_member.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="content">
	    <h1>Show Member</h1>
        <p>Wellcome ::</p>

        <!-- < ?php if (isset($_SESSION["username"])) {
            echo $_SESSION["username"];
	    }
	    ?> -->

        <table> 
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr> 

            <?php
	            $sql = "SELECT * FROM member WHERE id" or die ("Error:" . mysqli_error());
	            $hand = mysqli_query($conn, $sql);
	            while($row = mysqli_fetch_array($hand)) {
	        ?>

            <tr> 
                <td><?=$row['id']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['gender']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><img src="image/<?=$row['image']?>" width="56px" hieght="56px"></td>
                <td><a href="edit_member.php?id=<?=$row['id']?>">Edite</a></td>
                <td><a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('Do You Want to Delete this?')">Delete</a></td>
            </tr> 

        	<?php
	        }
	            mysqli_close($conn);
	        ?>

        </table>
            
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
