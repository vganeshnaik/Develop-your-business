<?php

include 'connection.php';

    if(isset($_POST['save_pro']))
    {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $addr = $_POST['address'];
        $desc = $_POST['desc'];
        $image = $_FILES['images']['name'];

        $query = "INSERT INTO product(product_name,price,address,description,image) VALUES ('$product','$price','$addr','$desc','$image')";
        $query_run = mysqli_query($conn, $query);
        

        if($query_run)
        {
            move_uploaded_file($_FILES["images"]["tmp_name"], "upload/departments/".$_FILES["images"]["name"]);// study_image and directry
            $SESSION['ststus'] = "Image Stored Successfully";
            header('Location: home.php'); //Location
        }
        else
        {
            $SESSION['ststus'] = "Image not inserted Successfully";
            header('Location: form.php'); //Location formd

        }
    }

?>