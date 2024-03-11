<div class="row mb">


    <div class="boxtrai mr">
        
        <!-- 1 -->
        <div class="row mb">
            <?php 
                extract($onesp) ;
            ?>
            <div class="boxtitle">CHI TIẾT SẢN PHẨM: <strong><?php echo $name ?></strong></div>
            <div class="row boxcontent">
                <?php 

                    if(isset($img)){
                        $img = $img_path.$img;
                    }
                    else{
                        "No Photo";
                    }

                    // $img = $img_path.$img;
                    echo '<div class="row mb spct"><img src="'.$img.'" height="250px" width="350px"></div>';
                    echo $mota;
                ?>

            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                   
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?>});
                
            });
        </script>

        <!-- 1 -->
        <div class="row" id="binhluan">
            
        </div>

        <!-- 1 -->
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {

                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                        # code...
                    }
                

                ?>
            </div>
        </div>

    </div>

    

    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>


</div>