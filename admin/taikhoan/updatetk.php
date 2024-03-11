<?php 
    if(is_array($tk)){
        extract($tk);
    }

    
    
?>

<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post">

                <div class="row mb10">
                        Mã tài khoản <br>
                        <input type="text" name="matk" placeholder="  id tự động tăng" disabled value="<?= $id ?>">
                    </div>

                    <div class="row mb10">
                        Username <br>
                        <input type="text" name="user" value="<?= $user ?>">
                    </div>

                    <div class="row mb10">
                        Password <br>
                        <input type="password" name="pass" value="<?= $pass ?>">
                    </div>

                    <div class="row mb10">
                        Email <br>
                        <input type="text" name="email" value="<?= $email ?>">
                    </div>

                    <div class="row mb10">
                        Địa Chỉ <br>
                        <input type="text" name="address" value="<?= $address ?>">
                    </div>

                    <div class="row mb10">
                        SĐT <br>
                        <input type="text" name="tel" value="<?= $tel ?>">
                    </div>



                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                    if(isset($thongbao) && $thongbao != ""){
                    echo $thongbao ;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>