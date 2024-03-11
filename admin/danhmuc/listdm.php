<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">

            <div class="row mb10 formdsloai">

                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Thao tác</th>
                    </tr>

                    <?php foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $namedm . '</td>
                                <td>
                                <a href="' . $suadm . '"><input type="button" value="Sửa"></a>  
                                <a href="' . $xoadm . '"><input type="button" value="Xóa"></a>                                  
                                    
                                </td>
                            </tr>
                                ';

                    }
                    ?>


                </table> <br>
                <input type="button" value="Chọn tất cả">
                <input type="reset" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>