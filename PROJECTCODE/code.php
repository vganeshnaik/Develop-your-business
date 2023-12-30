<?php
$conn = mysqli_connect("localhost","root","","phptutorials");

    if(isset($_POST['save_pro']))
    {
        $name = $_post['stud_name'];
        $class = $_post['stud_class'];
        $phone = $_post['stud_phone'];
        $image = $_FILES['stud_image']['name'];

        $query = "INSERT INTO student (stud_name,stud_class,stud_phone,stud_image) VALUES ('$name','$phone','$image')";
        $query_run = mysqli_query($conn, $query);
        

        if($query_run)
        {
            move_uploaded_file($_FILES["stud_image"]["tmp_name"], "upload/departments/".$_FILES["dpt_cate_image"]["name"]);// study_image and directry
            $SESSION['ststus'] = "Image Stored Successfully";
            header('Location: create.php'); //Location
        }
        else
        {
            $SESSION['ststus'] = "Image not inserted Successfully";
            header('Location: create.php'); //Location formd

        }
    }

?>