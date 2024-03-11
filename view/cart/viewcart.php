<div class="row mb">

    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table border="1" style="width=100%">
                    <!-- <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr> -->

                    <?php 
                        viewcart(1);
                    
                    
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

            <!-- <input type="submit" value="Đồng ý đặt hàng"><a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a> -->

            <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>

            <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>

            <a href="index.php"><input type="button" value="ĐẶT THÊM"></a>

        </div>

    </div>



    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>


</div>