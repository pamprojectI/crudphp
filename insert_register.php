<?php
    require_once 'config.php';
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $gender = $_POST ['gender'];
    $name = $_POST ['name']; 
    $email = $_POST ['email'];  
    $image = $_POST ['image'];   
    $status = $_POST ['status'];

    //อัพโหลดภาพ
    if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])){
            $new_image_name = 'pic_'.uniqid().".".pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
            $image_upload_path = "./image/".$new_image_name;
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$image_upload_path);
      } else {
            $new_image_name = "";
      }

    //เพิ่มข้อมูลในตาราง member
    $sql = "INSERT INTO member (username, password, gender, name, email, image, status)
    VALUES ('$username','$password','$gender','$name','$email','$new_image_name','0')";
    $result = mysqli_query($conn, $sql);

    if ($result){
            echo "<script> alert('Successfully'); </script>";
            echo "<script> window.location='login.php'; </script>";
      } else {
            echo "Error" . $sql . "<br>" . mysqli_error($conn);
            echo "<script> alert('Invalid'); </script>";
      }
    mysqli_close($conn);
?>