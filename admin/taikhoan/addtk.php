<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addtk" method="post">
                    <div class="row mb10">
                        Mã tài khoản <br>
                        <input type="text" name="matk" placeholder="  id tự động tăng" disabled>
                    </div>

                    <div class="row mb10">
                        Username <br>
                        <input type="text" name="user">
                    </div>

                    <div class="row mb10">
                        Password <br>
                        <input type="password" name="pass">
                    </div>

                    <div class="row mb10">
                        Email <br>
                        <input type="text" name="email">
                    </div>

                    <div class="row mb10">
                        Địa Chỉ <br>
                        <input type="text" name="address">
                    </div>

                    <div class="row mb10">
                        SĐT <br>
                        <input type="text" name="tel">
                    </div>

                    <div class="row mb10">
                        <input type="submit" name="addtk" value="THÊM MỚI">
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