<?php


function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $ii = 1;
    if ($del == 1) {
        $xoasp_th = "<th>Thao tác</th>";
        $xoasp_td2 = "<td></td>";
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }

    echo '
                        <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        ' . $xoasp_th . '
                        </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;

        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '

                            
                            <tr>
                                <td>' . $ii . '</td>
                                <td class="img1"><img src="' . $hinh . '" alt="" height="200px" width="200px"></td>
                                <td>' . $cart[1] . '</td>
                                <td>' . $cart[3] . '</td>
                                <td>' . $cart[4] . '</td>
                                <td>' . $thanhtien . '</td>
                                ' . $xoasp_td . '
                            </tr>';
        $i += 1;
        $ii += 1;
        // update_luotxem($luotxemnew, $id);
    }
    echo '<tr>
                                <td colspan="5">Tổng đơn hàng</td>
                                
                                <td>' . $tong . '</td>
                                
                                ' . $xoasp_td2 . '
                            </tr>';
}

function bill_chitiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $ii = 1;
    

    echo '
                        <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        </tr>';

    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        // $thanhtien = $cart['price'] * $cart['soluong'];
        $tong +=  $cart['thanhtien'];

        

        echo '

                            
                            <tr>
                                <td>' . $ii . '</td>
                                <td class="img1"><img src="' . $hinh . '" alt="" height="200px" width="200px"></td>
                                <td>' . $cart['name'] . '</td>
                                <td>' . $cart['price'] . '</td>
                                <td>' . $cart['soluong'] . '</td>
                                <td>' . $cart['thanhtien'] . '</td>
                            </tr>';
        $i += 1;
        $ii += 1;
        // update_luotxem($luotxemnew, $id);
    }
    echo '<tr>
                                <td colspan="5">Tổng đơn hàng</td>
                                
                                <td>' . $tong . '</td>
                                
                            </tr>';
}



function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;

                         
}

    return $tong;

}


function insert_bill($iduser,$name,$email, $address, $tel, $pttt, $ngaydathang, $tongdonhang )
{
    $sql = "INSERT INTO bill (iduser,bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) 
    VALUES ('$iduser','$name','$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang') ";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser,$idpro, $img, $name, $price, $soluong, $thanhtien, $idbill )
{
    $sql = "INSERT INTO cart (iduser, idpro, img, name, price, soluong, thanhtien, idbill) 
    VALUES ('$iduser','$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill') ";
    return pdo_execute($sql);
}


function loadone_bill($id)
{
    $sql = "select * from bill where id =" . $id;

    $bill = pdo_query_one($sql);

    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill =" . $idbill;

    $bill = pdo_query($sql);

    return $bill;
}

function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill =" . $idbill;

    $bill = pdo_query($sql);

    return sizeof($bill);
}

function loadall_bill($kyw="",$iduser=0)
{
    $sql = "select * from bill where 1";
    
    if($iduser>0) $sql.= " AND iduser =" . $iduser;

    if($kyw != "") $sql.= " AND id like '%".$kyw."%'";
    
    $sql.= " order by id desc";

    $listbill = pdo_query($sql);

    return $listbill;
}

function delete_listbill($id)
{
    $sql = "delete from bill where id =" . $_GET['id'];
    pdo_execute($sql);
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;

        case '1':
            $tt = "Đang xử lý";
            break;

        case '2':
            $tt = "Đang vận chuyển";
            break;

        case '3':
            $tt = "Đã giao hàng";
            break;
        
        default:
        
            $tt = "Đơn hàng mới";
    
            break;
    }
    return $tt;
}


function get_pttt($n){
    switch ($n) {
        case '0':
            $pt = "Trả tiền khi nhận hàng";
            break;

        case '1':
            $pt = "Chuyển khoản ngân hàng";
            break;

        case '2':
            $pt = "Thanh toán online";
            break;

        
        default:
        
            $pt = "Trả tiền khi nhận hàng";
    
            break;
    }
    return $pt;
}

function loadall_thongke(){
    $sql = "select danhmuc.id as madm, danhmuc.namedm as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.= " from sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
    
    
    
    $sql.= " group by danhmuc.id order by danhmuc.id desc";

    $listthongke = pdo_query($sql);

    return $listthongke;
}


function update_tinhtrangdonhang($id, $ttdh)
{
    $sql = "UPDATE bill SET bill_status = '$ttdh' where id = " . $id;
    pdo_execute($sql);
}
?>