<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>

    <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" placeholder="tìm theo tên sản phẩm">
                    <select name="iddm">

                            <option value="0" selected>Tất cả</option>
                            <?php foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo "
                                <option value=".$id."> $namedm </option>";
                            } ?>
                            
                        </select>

                        <input type="submit" name="listok" value="GO">
                </form>

    <div class="row formcontent">
        <form action="#" method="post">

            <div class="row mb10 formdsloai">

                

                <table>
                    <tr>
                        <th></th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Lượt xem</th>
                        <th>Thao tác</th>
                    </tr>

                    

                    <?php foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $hinhpath = "../upload/".$img;

                        if(is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' height='100px' width='200px' >";
                        }
                        else{
                            $hinh = "nophoto";
                        }
                        echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' .$name. '</td>   
                                <td>' .$hinh. '</td>                              
                                <td>' .$namedm. '</td>                              
                                <td>' .$price. '</td>                              
                                <td>' .$mota. '</td>
                                <td>' .$luotxem. '</td>
                                <td>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"></a>  
                                <a  onclick="return confirm(\'Bạn có chắc chắn muốn xóa ?\')" href="' . $xoasp . '"><input type="button" value="Xóa"></a>    
                                
                                
                                    
                                </td>
                            </tr>
                                ';

                    }
                    ?>

                    

                </table> <br>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>