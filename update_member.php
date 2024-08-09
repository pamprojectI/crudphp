<?php
    include 'config.php';
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $image = $_POST['txtimg'];

    //อัพโหลดภาพ
    if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])){
        $new_image_name = 'pic_'.uniqid().".".pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "./image/".$new_image_name;
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$image_upload_path);
        } else {
        $new_image_name = "$image";
        }

    //อัพเดทข้อมูล
    $sql = "UPDATE member SET username='$username', password='$password', gender='$gender', name='$name', email='$email', image='$new_image_name' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "<script> alert('Update Successfully'); </script>";
        echo "<script> window.location='show_member.php'; </script>";
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
        echo "<script> alert('Invalid'); </script>";
    }
    mysqli_close($conn);
?>