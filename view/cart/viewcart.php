<div class="row mb">

    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table border="1" style="width=100%">
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>

                    <?php 
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path.$cart[2];
                        $thanhtien = $cart[3] * $cart[4];
                        $tong += $thanhtien;
                        $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                        echo '
                            <tr>
                                <td><img src="'.$hinh.'" alt="" height="200px" width="300px"></td>
                                <td>'.$cart[1].'</td>
                                <td>'.$cart[3].'</td>
                                <td>'.$cart[4].'</td>
                                <td>'.$thanhtien.'</td>
                                <td>'.$xoasp.'</td>
                            </tr>';
                            $i += 1;
                            // update_luotxem($luotxemnew, $id);
                        } 
                        echo '<tr>
                                <td colspan="4">Tổng đơn hàng</td>
                                
                                <td>'.$tong.'</td>
                                
                                <td></td>
                            </tr>';
                    
                    
                    ?>

                    <!-- <tr>
                        <td>1</td>
                        <td><img src="images/banner1.jpg" alt=""></td>
                        <td>Đồng hồ</td>
                        <td>50</td>
                        <td>2</td>
                        <td>100 VNĐ</td>
                        <td><input type="button" value="Xóa"></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><img src="images/banner2.jpg" alt=""></td>
                        <td>Nón</td>
                        <td>120</td>
                        <td>3</td>
                        <td>360 VNĐ</td>
                        <td><input type="button" value="Xóa"></td>
                    </tr> -->
                </table>
            </div>

        </div>



        <div class="row mb bill">
            <input type="submit" value="Đồng ý đặt hàng"><a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
            <!-- <input type="button" value=""> -->

            <a href="index.php"><input type="button" value="Mua thêm hàng xóa"></a>
        </div>

    </div>



    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>


</div>