<div class="row mb">


            <div class="boxtitle">TÀI KHOẢN</div>
            <div class="boxcontent formtaikhoan">

                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                    ?>

                        <div class="row mb10">
                            Xin Chào <br>
                            <?= $user ?>
                        </div>

                        <div class="row mb10">

                            <?php   if(isset($_SESSION['user'])){ ?>
                            <li>
                                <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                            </li>
                            <?php } ?>


                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            </li>

                            <?php if($role==1){ ?>
                            <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                            <?php } ?>

                            <li>
                                <a href="index.php?act=thoat">Thoát</a>
                            </li>
                        </div>

                    <?php

                    }
                    else{
                ?>
                
                    

                <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="user" id="">
                    </div>

                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass" id="">
                    </div>

                    <div class="row mb10">
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                    </div>

                    <div class="row mb10">
                        <input type="submit" name="dangnhap" value="Đăng nhập">
                    </div>

                </form>

                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>

               <?php } ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {

                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '
                                <li>
                                    <a href="' . $linkdm . '">' . $namedm . '</a>
                                </li>
                            ';
                        # code...
                    }
                    ?>
                    <!-- <li>
                        <a href="#">Đồng hồ</a>
                    </li>

                    <li>
                        <a href="#">Laptop</a>
                    </li>

                    <li>
                        <a href="#">Balo</a>
                    </li>

                    <li>
                        <a href="#">Điện thoại</a>
                    </li>

                    <li>
                        <a href="#">Macbook</a>
                    </li>

                    <li>
                        <a href="#">Apple Watch</a>
                    </li>

                    <li>
                        <a href="#">Smart TV</a>
                    </li> -->

                </ul>
            </div>
            <div class="boxfooter searbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                    <input type="submit" name="timkiem" value="Tìm Kiếm">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php
                
                foreach ($dstop10 as $sp) {
                    extract($sp);


                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $luotxemnew = $luotxem + 1;

                    // $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $linksp = "index.php?act=sanphamct&idsp=$id&luotxem=".$luotxemnew;
                    $img = $img_path.$img;
                    echo '
                        <div class="row mb10 top10">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>
                        ';
                    // $luotxem += 1;

                    # code...
                }
                

                ?>
                <!-- <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">AAAAA</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">BBBBB</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">CCCCC</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">DDDDD</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">EEEEE</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">FFFFF</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">GGGGG</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">HHHHH</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">IIIII</a>
                </div>

                <div class="row mb10 top10">
                    <img src="upload/anh1.jpg" alt="">
                    <a href="#">KKKKK</a>
                </div> -->
            </div>
        </div>