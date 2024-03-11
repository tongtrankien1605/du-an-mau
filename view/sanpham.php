<div class="row mb">


    <div class="boxtrai mr">
        
        <!-- 1 -->
        <div class="row mb">
            
            <div class="boxtitle">SẢN PHẨM: <strong><?php echo $tendm ?></strong></div>
            <div class="row boxcontent">
                <?php 
                        $i = 0;
                foreach ($dssp as $sp) {

                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path . $img;

                    $tien = "$";
                    $text = "Giá: ";

                    if ($i == 2 || $i == 5 || $i == 8 ) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    
                    
                    echo '
                        <div class="boxsp ' . $mr . '">
                            <div class="img">
                                <a href="'.$linksp.'"><img src="' . $hinh . '" alt="" height="250px"></a>
                            </div>
                            <p>   '.$text.'  '  . $price .' '.$tien.' </p>
                            <a class="aspnew" href="'.$linksp.'">' . $name . '</a>
                        </div>
                        ';
                    # code...
                    $i += 1;
                }
                ?>
            </div>
        </div>

        

    </div>

    

    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>


</div>