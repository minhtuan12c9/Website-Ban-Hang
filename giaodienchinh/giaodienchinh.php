<!DOCTYPE html>
<html>
    <head>
        <title>
            LẮC ĐẦU SHOP
        </title>
        <link rel="stylesheet" href="giaodienchinh.css">
    </head>

    <body>
        <?php
            session_start();

            if (isset($_GET["btnlogout"])){
                unset ($_SESSION["user"]);
                header("location:giaodienchinh.php");
            }
        ?>
        <div class="menu1">
            <div class="title-bar">
                <ul>
                    <li class="contact">
                        <a href="#">Địa chỉ liên hệ</a>
                    </li>
                    <li class="contact">
                        <a href="#">Hotline trực tuyến</a>
                    </li>
                </ul>
    
                <ul class="shop">
                    <li>
                        <a href="#">Shopee</a>
                    </li>
                    <li>
                        <a href="#">Lazada</a>
                    </li>
                    <li>
                        <a href="#">Instagram</a>
                    </li>
                    <li>
                        <a href="#">Tiktok</a>
                    </li>
                    <li>
                        <a href="#">Youtube</a>
                    </li>
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                </ul>
    
                <ul class="login">
                    <?php
                        if(isset($_SESSION["user"])){
                            ?>

                            <li style="color: white;"><?php echo($_SESSION["user"]["ten"]);?></li>
                            <li style="margin-left: 10px;"><a href="giaodienchinh.php?btnlogout">Đăng xuất</a></li>
                            <?php
                        }else{
                            ?>

                            <li></li>
                            <li><a href="../login/signup.php">Đăng ký / </a></li>
                            <li><a href="../login/signin.php">Đăng nhập</a></li>

                            <?php
                        }
                    ?>
                    
                </ul>
            </div>


            <div class="lacdau">
                <div>
                    <a class="logolacdau" href="../giaodienchinh/giaodienchinh.php"><img src="logo.png" alt=""></a>
                </div>
                <div class="danhsach">
                    <ul>
                        <li>
                            <a href="#">TIN TỨC</a>
                        </li>
                        <li>
                            <a href="../sanpham/banphim/banphim.php">BÀN PHÍM</a>
                        </li>
                        <li>
                            <a href="../sanpham/tainghe/tainghe.php">TAI NGHE</a>
                        </li>
                        <li>
                            <a href="../sanpham/chuot/chuot.php">CHUỘT</a>
                        </li>
                        <li>
                            <a href="#">PHỤ KIỆN</a>
                        </li>
                        <li>
                            <a href="#">SWITCH</a>
                        </li>
                        <li>
                            <a href="../sanpham/lotchuot/lotchuot.php">LÓT CHUỘT</a>
                        </li>
                        <li>
                            <a href="#">BÀN GHẾ</a>
                        </li>
                        <li>
                            <a href="#">HỖ TRỢ</a>
                        </li>
                        <li>
                            <a href="#">ĐẠI LÝ</a>
                        </li>
                        <li>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <div class="timkiem">
                                <form action="">
                                    <button class="search"><i class="fa fa-search"></i></button>
                                    <input type="text" placeholder="Bạn cần tìm gì..." name="search">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div id="slideshow">
            <div class="slide-wrapper">
                <div class="myslide"><img src="1.jpg" alt=""></div>
                <div class="myslide"><img src="2.jpg" alt=""></div>
                <div class="myslide"><img src="3.jpg" alt=""></div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>
        <!-- Nút tròn điều khiển slideshow-->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="bottom">
            <div class="left-bot">
                <h3>TRUNG TÂM BẢO HÀNH MIỀN BẮC</h3>
                <p>Địa chỉ: 241 Phố Vọng, Phường Đồng Tâm, quận Hai Bà Trưng, Tp. Hà Nội</p>
                <p>Hotline: 0924.356.856</p>
            </div>
            <div class="mid-bot">
                <h3>TRUNG TÂM BẢO HÀNH MIỀN TRUNG</h3>
                <p>Địa chỉ: Lô 10 Hoàng Thị Loan, quận Liên Chiểu, Tp. Đà Nẵng</p>
                <p>Hotline: 0236.3611.788 - 0236.3611.688</p>
            </div>
            <div class="rigth-bot">
                <h3>TRUNG TÂM BẢO HÀNH MIỀN NAM</h3>
                <p>Địa chỉ: 666/35 đường 3/2, phường 14, quận 10, Tp. Hồ <br> Chí Minh</p>
                <p>Hotline: 0924.356.856</p>
            </div>
        </div>
        <script src="myscript.js"></script>
    </body>
</html>