<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/images/banner1.jpg" style="width:100%">
                        <div class="text">Picture 1</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/images/banner2.jpg" style="width:100%">
                        <div class="text">Picture 2</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/images/banner3.jpg" style="width:100%">
                        <div class="text">Picture 3</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                </div>
                <br>

                <!-- The dots/circles -->
                <!-- <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div> -->
            </div>
        </div>
        <div class="row">

            <?php

            $i = 0;
            foreach ($spnew as $sp) {

                extract($sp);


                $onesp = loadone_sanpham($id);
                extract($onesp);
                // var_dump($onesp);
              
                $luotxemnew = $luotxem + 1;

                $linksp = "index.php?act=sanphamct&idsp=$id&luotxem=".$luotxemnew;


                
                    $hinh = $img_path . $img;


                if ($i == 2 || $i == 5 || $i == 8) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }

                // $mr = "mr";

                
                echo '
                    <div class="boxsp ' . $mr . '">
                        <div class="img">
                            <a href="'.$linksp.'"><img src="' . $hinh . '" alt="" height="250px"></a>
                        </div>
                        <div class="row info">
                            <p>$ '.$price.'</p>
                            <a class="aspnew" href="'.$linksp.'">' . $name . '</a>
                        </div>

                        <div class="row btnaddtocart">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">  
                            </form>
                        </div>


                    </div>
                    ';
                # code...
                $i += 1;

                update_luotxem($luotxem, $id);
                

            }
            ?>

            <!-- <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp mr">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>

            <div class="boxsp">
                <div class="img">
                    <img src="upload/anh1.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div> -->
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>