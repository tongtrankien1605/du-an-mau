<div class="row">
    <div class="row formtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>


    <div class="row formcontent">

            <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php 
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo 
                                '<tr>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                            
                        }
                    ?>
                    

                    
                </table>
            </div>

            <div class="row mb10">
                
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        
    </div>
</div>