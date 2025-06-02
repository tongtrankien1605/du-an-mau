<?php 
    session_start();

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

    <?php

        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        }

    ?>

        <div class="row mb10">

            Admin: <b><div class="homeadmin" > <?= $user ?> </div></b> <br>

            <li class="homeadmin1">-> <a href="index.php?act=thoatadmin">Trở về trang người dùng</a></li>

            
        </div>

    
                        

                    

    
</body>
</html>
