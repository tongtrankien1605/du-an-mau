<?php

session_start();

include "view/header.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/pdo.php";
include "global.php";

if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];

    switch ($act) {

        case 'sanpham':

            if((isset($_POST['kyw']))&&($_POST['kyw'] != "")){
                $kyw = $_POST['kyw'];
            }
            else{
                $kyw = "";
            }

            if((isset($_GET['iddm']))&&($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
                
            }
            else{
                $iddm = 0;
            }

            $dssp = loadall_sanpham($kyw, $iddm);

            $tendm = load_ten_dm($iddm);

            include "view/sanpham.php";

            break;

        case 'sanphamct':

            

            if((isset($_GET['idsp']))&&($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);



                extract($onesp);
                // var_dump($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);

                $luotxemnew = $luotxem + 1;

                update_luotxem($luotxemnew, $id);


                include "view/sanphamct.php";
            }
            else{
                include "view/home.php";
            }


            break;
        
        case 'dangky':

            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng";
            }

            include "view/taikhoan/dangky.php";

            break;

        case 'dangnhap':

            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
               
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);


                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    // var_dump($_SESSION['user']);

                    header('location: index.php');
                // $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng";
                }
                else{
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký";
                }
            }

            include "view/taikhoan/dangky.php";

            break;


        case 'edit_taikhoan':

            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                // $checkuser = checkuser($user, $pass);

                update_taikhoan($id, $user, $pass, $email, $address, $tel);

                $_SESSION['user'] = checkuser($user, $pass);

                $thongbao = "Cập nhật tài khoản thành công";

                header('location: index.php?act=edit_taikhoan');
               
            }

            include "view/taikhoan/edit_taikhoan.php";

            break;

        case 'quenmk':

            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                
                $email = $_POST['email'];
                
                $checkemail = checkemail($email);

                if(is_array($checkemail)){
                    $thongbao = "Mật khẩu là: ".$checkemail['pass'];
                }
                else{
                    $thongbao = "Email này không tồn tại";
                }

                
            }

            include "view/taikhoan/quenmk.php";

            break;

        case 'thoat':

            // session_destroy();

            session_unset();

            header('location: index.php');

            break;

        // controller cart

        case 'addtocart':

            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $price * $soluong;
                $spadd = [$id, $name, $img, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
                

                
            }

            include "view/cart/viewcart.php";

            break;

        case 'delcart':

            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'], 1);

            }
            else{
                $_SESSION['mycart'] = [];

            }

            // var_dump($_SESSION['mycart']);
            

            header('location: index.php?act=viewcart');

            break;;

        case 'viewcart':

            include "view/cart/viewcart.php";

            break;




        //  controler 
        case 'gioithieu':

            include "view/gioithieu.php";

            break;

        case 'lienhe':

            include "view/lienhe.php";

            break;

        case 'gopy':

            include "view/gopy.php";

            break;

        case 'hoidap':

            include "view/hoidap.php";

            break;

        default:
            include "view/home.php";
            break;
    }

}
else{
    include "view/home.php";
}
include "view/footer.php";

?>