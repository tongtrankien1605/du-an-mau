<?php 
    if(is_array($bill)){
        extract($bill);
    }

    // var_dump($bill);
    

    
    
?>

<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT DANH SÁCH BILL</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatelistbill" method="post">

                    <div class="row mb30">
                        Mã đơn hàng <br><br>
                        <input type="text" name="madh" value="<?= $id ?>" disabled>
                    </div>

                    <div class="row mb10">
                        

                        
                        <label for="ttdh">Chọn tình trạng đơn hàng:</label> <br><br>
                        <select name="tinhtrangdonhang">
                            <option value="0">Đơn hàng mới</option>
                            <option value="1">Đang xử lý</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Đã giao hàng</option>
                        </select>
                        <br><br>

                        

                        
                        
                    </div>

                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
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