<?php
include("../model/pdo.php");
include("header.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/taikhoan.php");
include("../model/binhluan.php");
include("../model/tintuc.php");
include("../model/cart.php");

session_start();

if(isset($_SESSION['user']))



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

            // support controller tin tức

        case 'addtintuc1':   

            $errTieuDe = "";
            $errNoiDung = "";
            $errHinhAnh = "";

            $tieude = "";
            $noidung = "";
            $iddm = "";
            $filename = "";


            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $tieude = $_POST['tieu_de'];
                $noidung = $_POST['noi_dung'];
                $iddm = $_POST['iddm'];

                $filename = $_FILES['hinh']['name'];

                $isCheck = true;

                if(!$tieude){
                    $isCheck = false;
                    $errTieuDe = "Bạn không được để trống tiêu đề";
                }

                if(!$noidung){
                    $isCheck = false;
                    $errNoiDung = "Bạn không được để trống nội dung";
                }

                if(!$filename){
                    $isCheck = false;
                    $errHinhAnh = "Bạn cần thêm hình ảnh";
                }

                

                
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
                }
                else{
                    $target_file = "../upload/nophoto.jpg";
                }

                if($isCheck == true){

                // insert_tintuc($tieude, $noidung, $target_file, $iddm) ;
                $thongbao = "Thêm thành công";
                }
                
            }
            
    
            // $listdanhmuctintuc = loadall_danhmuctintuc();
            
            include("tintuc/add.php");

            break;


        case 'listtintuc1':
            # code...
            // $listtintuc = loadall_tintuc();
            include('tintuc/listtintuc.php');
            

        

        break;

        case 'suatintuc1':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $tintuc = loadone_tintuc($_GET['id']);
            }
            // $listdanhmuctintuc = loadall_danhmuctintuc();
            include ('tintuc/update.php');
            break;
    
        case 'updatetintuc1':

            if (isset($_POST['capnhat']) && $_POST['capnhat']) {

                $id = $_POST['id'];
                $iddm = $_POST['iddm'];

                $noidung = $_POST['noi_dung'];
                $tieude = $_POST['tieu_de'];

                $hinh = $_POST['hinh'];


                $target_dir = "../upload/";
                $target_file = $target_dir . $_FILES['hinh']['name'];

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
                    $hinh = $target_file;        
                }
                else{
                    $hinh = "";
                }

                // update_tintuc($id, $iddm, $noidung, $hinh, $tieude) ;

                
                $thongbao = "Cập nhật thành công";
            }

            // $listdanhmuctintuc = loadall_danhmuctintuc();
            // $listtintuc = loadall_tintuc();


            include('tintuc/listtintuc.php');


            # code...

            break;

        case 'xoatintuc1':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // delete_tintuc($_GET['id']);
            }

            // $listtintuc = loadall_tintuc();

            include('tintuc/listtintuc.php');
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
                

                
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
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
            include ('sanpham/update.php');
            break;

        case 'updatesp':

            if (isset($_POST['capnhat']) && $_POST['capnhat']) {

                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinh = $_POST['hinh'];

                $target_dir = "../upload/";
                $target_file = $target_dir . $_FILES['hinh']['name'];

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
                    $hinh = $target_file;        
                }
                else{
                    $hinh = "";
                }

                update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm) ;

                
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();


            include('sanpham/listsp.php');


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

            //  controller bill

        case 'listbill':
        
            if(isset($_POST['kyw'])&&($_POST['kyw'] != "")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            $listbill = loadall_bill($kyw,0);

            include("bill/listbill.php");

            
            break;

        case 'xoalistbill':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_listbill($_GET['id']);
            }

            $listbill = loadall_bill();
        
            include("bill/listbill.php");

            break;


        case 'sualistbill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bill = loadone_bill($_GET['id']);
            }

            include("bill/update.php");

            break;

        case 'updatelistbill':

            if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                $id = $_POST['id'];
                $ttdh = $_POST['tinhtrangdonhang'];

                update_tinhtrangdonhang($id, $ttdh);
                $thongbao = "Cập nhật thành công";



            }

            $listbill = loadall_bill();

    
            include("bill/listbill.php");

            break;

        


        //  controller thống kê

        case 'thongke':
            
            $listthongke = loadall_thongke();
            include("thongke/list.php");

            break;

        case 'bieudo':
        
            $listthongke = loadall_thongke();
            include("thongke/bieudo.php");

            break;

        // CONTROLLER TIN TỨC


        case 'addtintuc':

            $errTieuDe = "";
            $errNoiDung = "";
            $errHinhAnh = "";

            $tieu_de = "";
            $noi_dung = "";
            $iddm = "";
            $filename = "";

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $iddm = $_POST['iddm'];
                $noi_dung = $_POST['noi_dung'];
                $tieu_de = $_POST['tieu_de'];
                $filename = $_FILES['hinh']['name'];
                

                
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
                }
                else{
                    $target_file = "../upload/nophoto.jpg";
                }

                $isCheck = true;

                if(!$tieu_de){
                    $errTieuDe = "Bạn không được để trống tiêu đề";
                    $isCheck = false;
                }
                if(!$noi_dung){
                    $errNoiDung = "Bạn không được để trống nội dung";
                    $isCheck = false;
                }
                if(!$filename){
                    $errHinhAnh = "Bạn cần upload hình ảnh";
                    $isCheck = false;
                }

                if($isCheck == true){
                    insert_tintuc($noi_dung, $tieu_de, $target_file, $iddm) ;
                    $thongbao = "Thêm thành công";
                }

                

                
            }

            $listdanhmuctintuc = loadall_danhmuctintuc();
            
            
            include("tintuc/add.php");

            break;

        case 'listtintuc':
            # code...
           
            

            $listdanhmuctintuc = loadall_danhmuctintuc();
            $listtintuc = loadall_tintuc();
            include('tintuc/listtintuc.php');
            break;
            
        case 'xoatintuc':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tintuc($_GET['id']);
                
            }

            $listtintuc = loadall_tintuc();
        
            include("tintuc/listtintuc.php");

            break;

        case 'suatintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tintuc = loadone_tintuc($_GET['id']);
            }
            $listdanhmuctintuc = loadall_danhmuctintuc();
            include ('tintuc/update.php');
            break;

        case 'updatetintuc':

            

            if (isset($_POST['capnhat']) && $_POST['capnhat']) {

                $id = $_POST['id'];

                $noi_dung = $_POST['noi_dung'];
                $tieu_de = $_POST['tieu_de'];
                $iddm = $_POST['iddm'];

                $hinh = $_POST['hinh'];

                $target_dir = "../upload/";
                $target_file = $target_dir . $_FILES['hinh']['name'];

                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    
                    $hinh = $target_file;        
                }
                else{
                    $hinh = "";
                }


                
                
                update_tintuc($id, $noi_dung, $tieu_de, $iddm, $hinh) ;

                
                $thongbao = "Cập nhật thành công";
                
            }

            $listdanhmuctintuc = loadall_danhmuctintuc();
            $listtintuc = loadall_tintuc();


            include('tintuc/listtintuc.php');


            # code...

            break;

        


            

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