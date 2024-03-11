<?php
if (is_array($tintuc)) {
    extract($tintuc);
}

$hinhpath = "../upload/" . $hinh_anh;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100px' width='200px' >";
} else {
    $hinh = "no photo";
}

?>

<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT TIN TỨC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatetintuc" method="post" enctype="multipart/form-data">
            
            <div class="row mb10">
                Tiêu đề <br>
                <input type="text" name="tieu_de" value="<?php echo $tieu_de ?>">

            </div>
            <div class="row mb10">
                Nội dung <br>
                <input type="text" name="noi_dung" value="<?php echo $noi_dung ?>">

            </div>
            <div class="row mb10">
                Hình ảnh <br>

                <input type="file" name="hinh"> <br>
                <input type="hidden" name="hinh" value="<?php echo $hinh ?>"> <br> <br>
                
                <?php echo $hinh ?> 
                
            </div>

            <div class="row mb10">
                <select name="iddm">
                    Chọn danh mục

                    <?php foreach ($listdanhmuctintuc as $danhmuc) {

                        


                        echo '<option '.($danhmuc['id_danhmuc'] == $id_danh_muc ? "selected" : "").' value="'.$danhmuc['id_danhmuc'].'">'.$danhmuc['ten_danhmuc'].'</option>';
                        // $danhmuc thuộc bảng danh mục,  $iddm là khóa ngoại thuộc bảng sản phẩm

                        //  <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa ?\')" href="' . $xoatt . '"><input type="button" value="Xóa"></a>                                  
                        

                    } ?>


                    


                </select>
            </div>
            


            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listtintuc"><input type="button" value="Danh sách"></a>
            </div>

            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>
</div>