<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<style>
    .binhluan table{
    width: 90%;
    margin-left: -10%;
  }

  
  .binhluan table td:nth-child(1){
    width: 50%;
  }

  .binhluan table td:nth-child(2){
    width: 20%;
  }

  .binhluan table td:nth-child(3){
    width: 30%;
  }
</style>
<body>
    
    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent binhluan">
            <ul>
            <table>    
                <?php

                // echo 'Nội dung bình luận ở đây: '.$idpro;
                    foreach ($dsbl as $bl) {

                        extract($bl);

    
                        echo '<tr><td>'.$noidung.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$ngaybinhluan.'</td></tr>';
                        # code...
                    }
                ?>
            </table> 

            </ul>
        </div>

        
        <div class="boxfooter binhluanform">

        <?php if(isset($_SESSION['user'])){ ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" placeholder="Từ khóa tìm kiếm">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        <?php }
            else{
        ?>
            <div>
                <h2>Vui lòng đăng nhập để sử dụng chức năng bình luận</h2>
            </div>
        <?php } ?>

        </div>

    <?php 

    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $noidung = $_POST['noidung'];
        $iduser = $_SESSION['user']['id'];
        $idpro = $_POST['idpro'];
        $ngaybinhluan = date('h:i:sa d/m/Y');


        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
        
                    
    ?>

    </div>

</body>
</html>