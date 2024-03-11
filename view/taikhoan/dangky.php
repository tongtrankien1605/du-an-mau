<div class="row mb">


    <div class="boxtrai mr">
        
        
        <div class="row mb">
            
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">
                
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email<input type="email" name="email">
                    </div>

                    <div class="row mb10">
                        Username<input type="text" name="user" id="">
                    </div>

                    <div class="row mb10">
                        Password<input type="password" name="pass" id="">
                    </div>

                    
                    <input type="submit" name="dangky" value="Đăng ký">
                    

                    <input type="reset" value="Nhập lại">
                </form>

                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&& ($thongbao != "")){
                        echo $thongbao;
                    }

                ?>
                </h2>

            </div>
        </div>
        
        

    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>


</div> 