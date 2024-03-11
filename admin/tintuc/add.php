<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI TIN TỨC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
                    
                    <div class="row mb10">
                        Tiêu đề <br>
                        <input type="text" name="tieu_de" value="<?= $tieu_de ?>" >
                        <span style="color: red"><?=  $errTieuDe ?></span>
                    </div>
                    <div class="row mb10">
                        Nội dung <br>
                        <input type="text" name="noi_dung" value="<?= $noi_dung ?>">
                        <span style="color: red"><?=  $errNoiDung ?></span>


                    </div>
                    <div class="row mb10">
                        Hình ảnh <br>
                        <input type="file" name="hinh" >
                        <span style="color: red"><?=  $errHinhAnh ?></span>

                    </div>

                    <div class="row mb10">
                        Danh mục <br>
                        <select name="iddm" id="">
                            <?php foreach($listdanhmuctintuc as $danhmuc){
                                extract($danhmuc);
                                echo "
                                <option value=".$id_danhmuc."> $ten_danhmuc </option>";
                            } ?>
                            
                        </select>

                        
                    </div>
                    

                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listtintuc"><input type="button" value="DANH SÁCH"></a>
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