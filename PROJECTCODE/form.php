<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyb Details Form</title>
    <link rel="stylesheet" href="dyb.css">
</head>
<body>
    <div class="header">
       <img src="logo/dyb.png" alt="image" id="headimg"/> 
        <h1 id="heading">Develop Your Business</h1>
        <button class="sign"><a href="upl.php "><b>back</b></a></button>
    </div>

    <div id="imgprev"></div>
    <div class="formb">

    <form action="formd.php" method="POST">
        
        <label for="product">Product name</label>
        <input type="text" id="product" name="product" required>
        <br><br>

        <label for="price">Price</label>
        <input type="text" id="price" name="price" required>
        <br><br>

        <label for="address">Address</label>
        <textarea cols="60" rows="5" name="address" required>Address</textarea>

        <label for="desc">Description: </label>
        <br>
        <textarea cols="60" rows="5" name="desc" required></textarea>
        <br><br>

        <input type="file" name="img"  id="imagedis"  onchange="displayimg(event)">
        <br><br>

        <button type="submit" name="save_pro">submit</button>
    </form>
    </div>

    <script>

        function displayimg(event){
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgprev');
            var newimg = document.createElement('img');
            //imagediv.innerHTML = " ";
            
            newimg.src=image;
            newimg.width="300";
            imagediv.appendChild(newimg);
        }


    </script>
</body>
</html>
