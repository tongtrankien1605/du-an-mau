<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH TIN TỨC</h1>
    </div>


    <div class="row formcontent">
        <form action="#" method="post">

            <div class="row mb10 formdsloai">

                

                <table>
                    <tr>
                        <th></th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Hình</th>
                        <th>Danh mục</th>
                        <th>Thao tác</th>
                    </tr>

                    

                    <?php foreach ($listtintuc as $tintuc) {
                        extract($tintuc);
                        $suatintuc = "index.php?act=suatintuc&id=".$id;
                        $xoatintuc = "index.php?act=xoatintuc&id=".$id;
                        $hinhpath = "../upload/".$hinh_anh;

                        if(is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' height='100px' width='200px' >";
                        }
                        else{
                            $hinh = "nophoto";
                        }
                        echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' .$tieu_de. '</td>   
                                <td>' .$noi_dung. '</td>                              
                                <td>' .$hinh. '</td>                              
                                <td>' .$ten_danhmuc. '</td>                              
                            
                                <td>
                                <a href="' . $suatintuc . '"><input type="button" value="Sửa"></a>  
                                <a  onclick="return confirm(\'Bạn có chắc chắn muốn xóa ?\')" href="' . $xoatintuc . '"><input type="button" value="Xóa"></a>    
                                
                                
                                    
                                </td>
                            </tr>
                                ';

                    }
                    ?>

                    

                </table> <br>
                <input type="button" value="Chọn tất cả">
                <input type="reset" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addtintuc"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>