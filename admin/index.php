<?php
include("../model/pdo.php");
include("header.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/taikhoan.php");
include("../model/binhluan.php");



if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        // controller danh mục

        case 'adddm':
            # code...
            // kiểm tra xem người dùng có nhấn vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include('danhmuc/add.php');
            break;

        case 'listdm':
            # code...
            $listdanhmuc = loadall_danhmuc();
            include('danhmuc/listdm.php');
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();

            include('danhmuc/listdm.php');
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }

            include("danhmuc/update.php");

            break;

        case 'updatedm':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($tenloai, $id);

                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();

            include('danhmuc/listdm.php');

            # code...

            break;

        // controller sản phẩm

        case 'addsp':
            # code...
            // kiểm tra xem người dùng có nhấn vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                // $hinh = $_POST['hinh'];
                // $img = $_FILES['hinh']['name'];

                


                
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    // $img = $target_file;
                }
                else{
                    $target_file = "../upload/nophoto.jpg";
                }

                insert_sanpham($tensp,$giasp, $target_file, $mota, $iddm) ;
                $thongbao = "Thêm thành công";
            }

            $listdanhmuc = loadall_danhmuc();

            include('sanpham/add.php');
            break;

        case 'listsp':
            # code...
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }
            else{
                $kyw = '';
                $iddm = 0;
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include('sanpham/listsp.php');
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = loadall_sanpham();

            include('sanpham/listsp.php');
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include("sanpham/update.php");

            break;

        case 'updatesp':

            if (isset($_POST['submit']) && $_POST['submit']) {
                $id1 = $_POST['id'];

                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinhanh = $_POST['hinh'];


                // $hinh = $_FILES['hinh']['name'];

                $target_dir = "../upload/";

                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                $target_file = $target_dir . $_FILES['hinh']['name'];
                // $target_file = $target_dir . $hinh;

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    // echo 'Upload thành công';
                    // $hinh = $target_file;
                    $hinhanh = $target_file;
                }
                else{
                    // $target_file = $target_dir.$hinh;
                }

                update_sanpham($id1, $tensp, $giasp, $hinhanh, $mota, $iddm) ;

                
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();


            include("sanpham/listsp.php");


            # code...

            break;


        // controller khách hàng


        case 'dskh':
            

            $listtaikhoan = loadall_taikhoan();
            include("taikhoan/list.php");

            break;

        
        
        case 'xoatk':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }

            $listtaikhoan = loadall_taikhoan();
       
            include("taikhoan/list.php");

            break;

        case 'addtk':
            # code...
            // kiểm tra xem người dùng có nhấn vào nút add hay không
            if (isset($_POST['addtk']) && ($_POST['addtk'])) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                insert_taikhoan1($user, $pass, $email, $address, $tel);

                // insert_taikhoan($tenloai);
                $thongbao = "Thêm thành công";

            }
            $listtaikhoan = loadall_taikhoan();

            include('taikhoan/addtk.php');
            break;


        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }

            include("taikhoan/updatetk.php");

            break;

        case 'updatetk':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);

                $thongbao = "Cập nhật thành công";
            }

            $listtaikhoan = loadall_taikhoan();

            include('taikhoan/list.php');

            break;

        //  controller bình luận

        case 'dsbl':
        

            $listbinhluan = loadall_binhluan(0);
            include("binhluan/list.php");

            break;


        case 'xoabl':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

            $listbinhluan = loadall_binhluan(0);
       
            include("binhluan/list.php");

            break;

        case 'thoatadmin':
            
            // session_unset();

            header('location: ../index.php');
            // include("../duanmau/index.php");
            
            break;

        //  controller thống kê

        default:

        
            include("home.php");
            # code...
            break;
    }
} else {
    include("home.php");
}

include("footer.php");
?>