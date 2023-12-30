<?php

require_once "connection.php";

$sql = "SELECT * FROM product";

$all_product = $conn->query($sql);
?>




<!DOCTYPE html>

<html>

<head>

    <title>DyB Home-Page</title>
    
    <link rel="stylesheet" href="home.css" />

</head>

<body>

    <nav>

        
        <img id="tit" src="logo/dyb.png" alt="logo"/>
        

        <input type = "text" name = "search" id="search" placeholder="search" />

        <!-- <button class="sign"><a href="dyb.html">SignIn</a></button> -->

        <!-- <button class="log"><a href="log.html">LogIn</a></button> -->

        <button class="dyb"><a href="form.php">DyB</a></button>
        <button class="sign"><a href="home.php">Log Out</a></button>

    </nav>

    <div class="cont">

        <?php

            while($row = mysqli_fetch_assoc($all_product)){
        ?>
       

        <div class="card">

            <div class="imgcon">
            <img class="img" src="img.jpg" alt="image"/>
            </div>
            
            <h4><?php echo $row["product_name"]; ?></h4>
            <p style="color: white">price: <?php echo $row["price"]; ?></p>
            <p style="color: white"><?php echo $row["address"]; ?></p>
            <p style="color: white"><?php echo $row["DESCRIPTION"]; ?></p>
           
        </div>
    

        <?php
            }
        ?>

        <!-- <div class="card">

            <div class="imgcon">

            <img class="img" src="img.jpg" alt="image"/>
            
            </div>

            <h4>Develop Your Business</h4>

        </div>



        <div class="card">

            <div class="imgcon">
                <img class="img" src="img.jpg" alt="image"/>
            </div>
            <h4>Develop Your Business</h4>

        </div>

        <div class="card">


            <div class="imgcon">
                <img class="img" src="img.jpg" alt="image"/>
            </div>

            <h4>Develop Your Business</h4>

        </div>

        <div class="card">

            <div class="imgcon">
            <img class="img" src="img.jpg" alt="image"/>
            </div>

            <h4>Develop Your Business</h4>

        </div>

        <div class="card">

            <div class="imgcon">

            <img class="img" src="img.jpg" alt="image"/>

            </div>
            <h4>Develop Your Business</h4>

        </div>


        <div class="card">


            <div class="imgcon">
            <img class="img" src="img.jpg" alt="image"/>
            </div>

            <h4>Develop Your Business</h4>

        </div>
        
        <div class="card">

            <div class="imgcon">

            <img class="img" src="img.jpg" alt="image"/>

            </div>

            <h4>Develop Your Business</h4>

        </div>
        
          -->

    </div>

</body>


</html>
