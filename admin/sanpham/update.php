<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../upload/" . $img;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100px' width='200px' >";
} else {
    $hinh = "no photo";
}

?>

<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">

                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                        // extract($danhmuc);
                        if($iddm == $id){
                            echo ' <option value=" '. $danhmuc['id'] .' " selected>'. $danhmuc['namedm'] .'</option>';
                        }
                        else{
                            echo ' <option value="'.$danhmuc['id'].'" > '.$danhmuc['namedm'].' </option>';
                        }
                    } ?>

                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?php echo $name ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>
            <div class="row mb10">
                Hình ảnh <br>

                <input type="file" name="hinh"> <br>
                <input type="hidden" name="hinh" value="<?php echo $hinh ?>"> <br> <br>
                
                <?php echo $hinh ?> 
                
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"> <?php echo $mota ?> </textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="submit" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
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