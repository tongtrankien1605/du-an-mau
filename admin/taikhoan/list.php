<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">

            <div class="row mb10 formdsloai">

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <!-- <th>MẬT KHẨU</th> -->
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>THAO TÁC</th>
                    </tr>

                    <?php foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$id;
                        $xoatk = "index.php?act=xoatk&id=".$id;
                        echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . $role . '</td>

                                
                                <td>
                                <a href="' . $xoatk . '"><input type="button" value="Xóa"></a>                                  
                                </td>

                            </tr>
                                ';

                    }
                    ?>


                </table> <br>
                <input type="button" value="Chọn tất cả">
                <input type="reset" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>