<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../view/img/banner.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../view/img/banner1.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../view/img/banner2.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                    <div class=" row img"><img src="' . $hinh . '" alt=""></div>
                    <p>' . $price . '</p>
                    <a href="#">' . $name . '</a>
                </div>';
            }
            ?>

            <!-- <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh1.jpg" alt=""></div>
                <p>9.500.000₫</p>
                <a href="#">PC BEST FOR GAMING GTX 1660 Super I3 10105F</a>
            </div>
            <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh2.jpg" alt=""></div>
                <p>12.300.000₫</p>
                <a href="#">PC BATTLE GAMING i3 10105F GTX 1650</a>
            </div>
            <div class="boxsp">
                <div class=" row img"><img src="img/hinh3.jpg" alt=""></div>
                <p>12.900.000₫</p>
                <a href="#">PC VENTUS GAMING Type2 2060 12100F</a>
            </div>
            <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh4.jpg" alt=""></div>
                <p>13.900.000₫</p>
                <a href="#">PC CYPER I5 10400F RTX 2060</a>
            </div>
            <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh5.jpg" alt=""></div>
                <p>13.500.000₫</p>
                <a href="#">PC DELTA GAMING GTX 1660 Super 12400F</a>
            </div>
            <div class="boxsp">
                <div class=" row img"><img src="img/hinh6.jpg" alt=""></div>
                <p>17.900.000₫</p>
                <a href="#">PC AAA GAMING HIGHT SETTING RX6700XT - 12400F</a>
            </div>
            <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh7.jpg" alt=""></div>
                <p>19.900.000₫</p>
                <a href="#">PC MAXIMUM GAMING RTX 3070 -12400F</a>
            </div>
            <div class="boxsp mr">
                <div class=" row img"><img src="img/hinh8.jpg" alt=""></div>
                <p>168.600.000₫</p>
                <a href="#">PC ROG Ultimate Luxury i9 14900K - RTX 4090 ROG White</a>
            </div>
            <div class="boxsp">
                <div class=" row img"><img src="img/hinh9.jpg" alt=""></div>
                <p>188.900.000₫</p>
                <a href="#">PC SUPER ULTIMATE PLATIUM RTX 4090 13900KS</a>
            </div>
        </div> -->
        </div>
    </div>
    <div class="boxphai">
        <div class="row mb">
            <div class="boxtitle">TÀI KHOẢN</div>
            <div class="boxcontent formtaikhoan">
                <form action="#" method="post">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass" id=""><br>
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản ?
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập">
                    </div>
                </form>
                <li>
                    <a href="#">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="#">Đăng ký thành viên</a>
                </li>
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
                        echo '<li>
                        <a href="' . $linkdm . '">' . $name . '</a>
                            </li>';
                    }
                    ?>
                    <!-- <li>
                        <a href="#">CPU</a>
                    </li>
                    <li>
                        <a href="#">Màn hình</a>
                    </li>
                    <li>
                        <a href="#">Bàn phím cơ</a>
                    </li>
                    <li>
                        <a href="#">Chuột Gaming</a>
                    </li>
                    <li>
                        <a href="#">Laptop Gaming</a>
                    </li>
                    <li>
                        <a href="#">Balo - túi xách</a>
                    </li>
                    <li>
                        <a href="#">Build PC theo yêu cầu</a>
                    </li> -->
                </ul>
            </div>
            <div class="boxfooter searchBox">
                <form action="#" method="post">
                    <input type="text" name="" id="" value="Từ khóa tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo '<div class="row mb10 top10">
                    <img src="'.$img.'" alt="">
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                }
                ?>
                <!-- <div class="row mb10 top10">
                    <img src="./img/icon.jpg" alt="">
                    <a href="#">i9 14900K - RTX 4090 ROG White</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon1.jpg" alt="">
                    <a href="#">RTX 4090 13900KS</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon2.jpg" alt="">
                    <a href="#">RTX 3070 -12400F</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon3.jpg" alt="">
                    <a href="#">RX6700XT - 12400F</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon.jpg" alt="">
                    <a href="#">i9 14900K - RTX 4090 ROG White</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon1.jpg" alt="">
                    <a href="#">RTX 4090 13900KS</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon2.jpg" alt="">
                    <a href="#">RTX 3070 -12400F</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./img/icon3.jpg" alt="">
                    <a href="#">RX6700XT - 12400F</a>
                </div> -->
            </div>
        </div>
    </div>
</div>