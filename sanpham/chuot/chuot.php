<!DOCTYPE html>
<html>
    <head>
        <title>banphim</title>
        <style>
            *{
              margin: 0px;
              padding: 0px; 
              box-sizing: border-box;
            }
            .comtanor{
                margin: 0px auto;
                width: 100%;
                height: 200vh;
                padding: 10px 20px 0px 0px;
                background-color: rgb(219, 205, 205);
                position: relative;
            }
            .menu{
                width: 18%;
                position: fixed;
                height: 50vh;
                background-color: rgb(95, 95, 230);
                margin: 5px;
                margin-left: 8%;
                border:  0px;
                border-radius: 2vh;
                padding-top: 5px;
                margin-top: 230px;
            }
            .menu h2{
                margin-left: 5px;
            }
            .conten{
                width: 68%;
                float: right;
                height: 190vh;
                margin: 5px;
                margin-right: 90px;
            }
            .clear{
                clear: both;
            }
            .thanhkeo{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                width: 100%;
                height: 25vh;
                background-color: rgb(138, 181, 181);
                border:  0px;
                border-radius: 2vh;
                position: relative;
                margin-top: 98px;
            }
            .thanhkeo.unit{

                width: 20%;
                height: 20vh;
                margin-left: 3%;
                margin-top: 1.5%;
                float: left;

            }
            .thanhkeo.unit h3{
                color: rgb(0, 0, 0);
                font: 0.5em sans-serif;
                margin-left: 10px;
                margin-top: 2px;
                font-size: 13px;

            }
            .thanhkeo.unit:hover h3{
                color: rgb(15, 99, 99);
            }
            .thanhkeo.unit.hinh{
                width: 100px;
                height: 100px;
                padding-left: 12px;
                border: 0px;
                border-radius: 40px;
                background-size: cover;
            }
            .thanhkeo.unit.hinh img{
                max-width: 120%;
                height: auto;
            }
            .thanhkeo.unit:hover .hinh{
                width: 110px;
                height:110px;
                margin:0px 5px 5px 0;
            }
            .name{
                font: 2em sans-serif;
                float: left;
                margin-top: 170px;
                margin-bottom: -80px;
                margin-left: 530px;
            }
            .thanhkeo.buttom{
                width: 4%;
                height: 18%;
                background-color: rgb(101, 14, 242);
                position: absolute;
                padding: 0.55% 0.85%;
                border:  0px;
                border-radius: 50%;
            }
            .thanhkeo.buttom.left{
                top: 60px;
                left: 2px;
            }
            .thanhkeo.buttom:hover{
                background-color: rgb(62, 11, 143);
            }
            .thanhkeo.buttom.right{
                top: 60px;
                right: 2px;
            }
           
            .menu table{
                margin: 10px 5px;
            }
            .menu td{
                padding-top: 5px;
            }
            .conten.mid{
                width: 100%;
                height: 76.5%;
                background-color: rgb(96, 109, 109);
                border:  0px;
                border-radius: 2vh;
                position: relative;
                margin: 10px 0px;
            }
            .conten.mid.menu{
                width: 97%;
                height: 50px;
                margin:5px 15px 10px 5px;
            }
            .conten.mid.menu.left{
                margin: 0px;
                padding: 0px;
                float: left;
                width: 50%;
                height: 100%;
            }
            .conten.mid.menu.right{
                margin: 0px;
                padding: 0px;
                float: right;
                width: 50%;
                height: 100%;
                padding-left: 20px;
            }
            .conten.mid.menu.left.unit{
                margin: 0px;
                padding: 0px;
                width: 22%;
                height: 80%;
                margin: 1%;
                padding: 2%;
                text-align: center;
                font-size: 60%;
                border:  0px;
                border-radius: 40px;
                background-color: rgb(216, 205, 52);
                cursor: pointer;
            }
            .conten.mid.menu.left.unit[value="Tìm"]{
                background-color: rgb(13, 168, 91);
            }
            .conten.mid.menu.left.unit[value="Tìm"]:hover{
                background-color: rgb(13, 126, 70);
            }
            .conten.mid.menu.left.unit:hover{
                background-color: rgb(172, 162, 22);
            }
            .conten.mid.main{
                width: 97%;
                height: 75%;
                margin:5px 15px 10px 5px;
                position: relative;
            }
            .conten.mid.main.unit{
                width: 150px; 
                height: 200px;
                background-color: rgb(45, 91, 101);
                margin:5px 20px 10px 20px;
                float: left;
                position: relative;
            }
            .conten.mid.main.unit.hinh{
                width: 95%; 
                height: 60%;
                margin:0px 2%;
                position: relative;
                background-size: cover;
            }
            .conten.mid.main.unit.hinh img{
                max-width: 100%;
                max-height: auto;
            }
            .conten.mid.main.unit:hover .hinh{
                width: 100%; 
                margin:0px 0%;
            }
            .conten.mid.main.unit:hover .noidung h3{
                color: rgb(19, 118, 118);
            }
            .conten.mid.main.unit.noidung{
                width: 100%; 
                height: 20%;
                background-color: rgb(199, 194, 220);
                margin:0px;
                position: relative;
            }
            .conten.mid.main.unit.noidung p{
                color: grey;
                font: 0.6em sans-serif;
                margin-left: 10px;
            }
            .conten.mid.main.unit.noidung h3{
                color: rgb(0, 0, 0);
                font: 0.6em sans-serif;
                margin-left: 10px;
                margin-top: 2px;
            }
            .conten.mid.main.unit.gia{
                width: 95%; 
                height: 20%;
                margin:0px 2%;
                position: relative;
                font: 1em sans-serif;
                padding: 10px 5px 0px 10px;
                color: rgb(25, 174, 228);
            }
            .conten.mid.main.unit.econ{
                width: 30px;
                height: 30px;
                position: absolute;
                top: 80%;
                left: 60%;
                background-image: url(https://cdn.pixabay.com/photo/2017/03/29/04/09/shopping-icon-2184065_960_720.png);
                background-size: cover;
                border-radius: 10px;
                cursor: pointer;
            }
            .conten.mid.main.unit.econ:hover{
                width: 35px;
                height: 35px;
                top: 78%;
                left: 59%;
            }
            .conten.mid.bot{
                width: 97%;
                height: 7%;
                margin: 0px 15px;
                /* position: relative; */
                padding: 10px;
                margin-top: 150px;
            }
            .conten.mid.bot.unit{
                width: 50px;
                height: 50px;
                margin: 0px 15px;
                background-color: rgb(210, 233, 78);
                float: left;
            }
            .conten.mid.bot.unit:hover{
                background-color: rgb(210, 239, 44);
            }
            .conten.mid.bot.unit.main{
                width: 90%;
                height: 90%;
                margin: 5%;
                background-color: rgb(223, 135, 135);
                border-radius: 0px;
                font-size: 20px;
                padding: 10% 30%;
            }
            .conten.mid.bot.unit:hover .main{
                width: 100%;
                height: 100%;
                margin: 1%;
                background-color: rgb(132, 73, 73);
                padding: 12% 35%;
            }
            /* -------------------------------------------menu chính trên cùng--------------------------------------------------------- */
            .menu1{
                position: relative;
                z-index: 99;
            }
            /* ////////////////////////////////////////// thanh tiêu đề màu xanh */
            .title-bar{
                background: rgb(5, 145, 114);
                padding-left: 100px;
                padding-right: 150px;
                position: fixed;
                top: 0;
            }
            .title-bar ul{
                display: inline-block;
            }
            .title-bar ul li{
                display: inline-block;
                position: relative;
            }
            .title-bar ul li a{
                text-decoration: none;
            }
            .contact{
                border-radius: 20px;
                border: 1px solid black;
                background: rgb(235, 238, 65);
                padding: 5px 5px;
            }
            .shop{
                list-style: none;
            }
            .shop li{
                margin-left: 30px ;
            }
            .shop li a{
                color: white;
            }
            .login{
                margin-left: 750px;
            }
            .login li a{
                color: white;
            }
            /* ////////////////////////////////////////// thanh lắc đầu */
            .lacdau{
                background: white;
                padding: 0 80px;
                font-size: 20px;
                position: fixed;
                top: 30px;
                width: 100%;
            }
            .logolacdau{
                width: 13%;
                float: left;
            }
            .danhsach{
                width: 100%;
                height: 124px;
                padding-top: 40px;
                padding-left: 200px;
                padding-bottom: 20px;
            }
            .lacdau ul li{
                display: inline-block;
                margin-left: 20px;
            }
            .lacdau ul li:hover a{
                color: rgb(133, 11, 145);
            }
            .lacdau ul li a{
                text-decoration: none;
                margin-bottom: 40px;
                font-weight: bolder;
                font-size: 20px;
            }
            .search{
                border: none;
                font-size: 20px;
                /* border-left: 1px solid gray; */
                background: white;
                cursor: pointer;
                padding: 5px 10px;
            }
            .timkiem{
                border: 1px solid black;
                border-radius: 10px;
                width: 300px;
            }
            .timkiem input{
                border: none;
                font-size: 18px;
                padding: 10px 0;
                background: white;
                outline: none;
            }

            /* thiết kế nút mũi tên*/
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* thiết kế nút mũi tên next nằm phía bên trái */
            .prev {
                left: 0;
                border-radius: 3px 0 0 3px;
            }
            /* thiết kế nút mũi tên next nằm phía bên phải */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            /* hiệu ứng thay đổi background khi hover vào nút mũi tên*/
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }

            /* ------------------------------------------------------------------------- */
            .bottom{
                background: rgb(219, 205, 205);
                margin-top: 15px;
                width: 100%;
                padding: 20px 20px;
                padding-left: 100px;
                height: 20vh;
                font-size: 20px;
            }
            .bottom h3{
                padding-bottom: 15px;
            }
            .left-bot{
                float: left;
                width: 30%;
            }
            .right-bot{
                float: right;
                width: 30%;
            }
            .mid-bot{
                float: left;
                width: 30%;
                margin: 0 5%;
                padding-left: 30px;
            }

        </style>
    </head>
    <body>
        <?php
            require("../../database/connect.php");
        ?>
        <div class="comtanor">
            <!-- menu chính trên cùng -->
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
                        <li></li>
                        <li><a href="../../login/signup.php">Đăng ký / </a></li>
                        <li><a href="../../login/signin.php">Đăng nhập</a></li>
                    </ul>
                </div>
    
    
                <div class="lacdau">
                    <div>
                        <a class="logolacdau" href="../../giaodienchinh/giaodienchinh.php"><img src="logo.png" alt=""></a>
                    </div>
                    <div class="danhsach">
                        <ul>
                            <li>
                                <a href="#">TIN TỨC</a>
                            </li>
                            <li>
                                <a href="../../sanpham/banphim/banphim.php">BÀN PHÍM</a>
                            </li>
                            <li>
                                <a href="../../sanpham/tainghe/tainghe.php">TAI NGHE</a>
                            </li>
                            <li>
                                <a href="../../sanpham/chuot/chuot.php">CHUỘT</a>
                            </li>
                            <li>
                                <a href="#">PHỤ KIỆN</a>
                            </li>
                            <li>
                                <a href="#">SWITCH</a>
                            </li>
                            <li>
                                <a href="../../sanpham/lotchuot/lotchuot.php">LÓT CHUỘT</a>
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

            <div class="menu">
                <h2>HÃNG SẢN XUẤT</h2>
                <hr>
                <table>
                    <tr>
                        <td><input type="checkbox" value="DAREU"></td>
                        <td>DAREU</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="E-DRA"></td>
                        <td>E-DRA</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="LẮC ĐẦU"></td>
                        <td>LẮC ĐẦU</td>
                    </tr>
                </table>
                <h2>KHOẢNG GIÁ</h2>
                <hr>
                <table>
                    <tr>
                        <td><input type="checkbox" value="Dưới 100 ngàn"></td>
                        <td>Dưới 100 ngàn</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="100 ngàn-200 ngàn"></td>
                        <td>100 ngàn-200 ngàn</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="200 ngàn-500 ngàn"></td>
                        <td>200 ngàn-500 ngàn</td>
                    </tr>
                </table>
            </div>
            <div class="conten">
                <h1 class="name"><b>CHUỘT</b></h1>
                
                <div class="clear"></div>
                <div class="thanhkeo">    
                    <!-- <div class="thanhkeo buttom left">&#8656</div> -->
                    <div class="thanhkeo unit" style="margin-left: 5%;">
                        <div class="thanhkeo unit hinh">
                            <img src="https://lacdau.com/media/product/250-2810-">
                        </div>
                        <h3><b>BÀN PHÍM MOFII NUMPAD X810 ĐEN</b></h3>
                    </div>
                    <div class="thanhkeo unit">
                        <div class="thanhkeo unit hinh">
                            <img src="https://lacdau.com/media/product/250-15-3d9d2c146d1a70951fdd3946125f1e86.png">
                        </div>
                        <h3><b>COMBO PHÍM CHUỘT GIẢ CƠ LIMEIDE GTX3000</b></h3>
                    </div>
                    <div class="thanhkeo unit">
                        <div class="thanhkeo unit hinh">
                            <img src="https://lacdau.com/media/product/250-12-9c537f8c0bd297c6f0eb7ee56c280b0e.png">
                        </div>
                        <h3 ><b>COMBO PHÍM CHUỘT GIẢ CƠ LIMEIDE T21 ĐEN</b></h3>
                    </div>
                    <div class="thanhkeo unit">
                        <div class="thanhkeo unit hinh">
                            <img src="https://lacdau.com/media/product/250-10-545ed0058d6206639a6f4f78a055ed71.jpg">
                        </div>
                        <h3><b>BÀN PHÍM KHÔNG DÂY MOFII NUMPAD X910 XANH</b></h3>
                    </div>
                    <!-- <div class="thanhkeo buttom right">&#8658</div> -->
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                <div class="conten mid">
                    <div class="conten mid menu">
                        <div class="conten mid menu left">
                            <input type="button" class="conten mid menu left unit" value="Hàng mới"></input>
                            <input type="button" class="conten mid menu left unit" value="Giá tăng dần"></input>
                            <input type="button" class="conten mid menu left unit" value="Giá giảm dần"></input>
                            <input type="button" class="conten mid menu left unit" value="Xem nhiều"></input>
                        </div>
                        <div class="conten mid menu right">
                            <input type="text" class="conten mid menu left unit" placeholder="Giá thấp nhất"></input>
                            <input type="text" class="conten mid menu left unit" placeholder="Giá cao nhất"></input>
                            <input type="button" class="conten mid menu left unit" value="Tìm"></input>
                            <select class="conten mid menu left unit" title="Lọc sản phẩm">
                                <option>Lọc SP</option>
                            </select>
                        </div>
                    </div>
                    <div class="conten mid main">
                        <?php 
                            $sql = "select * from sanpham where danhmuc='chuot'";
                            // result là table có nhiều row, mỗi row có 4 trường thông tin (id, ten, thutu, anhien)
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <!-- product item -->
                    
                            <div class="conten mid main unit">
                                <div class="conten mid main unit hinh">
                                    <img src="<?php echo $row['anhsanpham'];?>">
                                </div>
                                <div class="conten mid main unit noidung">
                                    <p>Mã: <?php echo $row['ma'];?></p>
                                    <h3><b><?php echo $row['tensanpham'];?></b></h3>
                                </div>
                                <div class="conten mid main unit gia"><b><?php echo number_format($row['gia']);?>đ</b></div>
                                <div class="conten mid main unit econ"></div>
                            </div>

                         <!-- product item -->
                            <?php
                            }
                            ?>
                    </div>

                    <div class="conten mid bot">
                        <div class="conten mid bot unit" style="margin-left: 400px;">
                            <div class="conten mid bot unit main"><b>1</b></div>
                        </div>
                        <div class="conten mid bot unit">
                            <div class="conten mid bot unit main"><b>2</b></div>
                        </div>
                        <div class="conten mid bot unit">
                            <div class="conten mid bot unit main"><b>3</b></div>
                        </div>
                        <div class="conten mid bot unit">
                            <div class="conten mid bot unit main"><b>4</b></div>
                        </div>
                        <div class="conten mid bot unit">
                            <div class="conten mid bot unit main"><b>5</b></div>
                        </div>
                    </div>
                </div>
            </div>
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

        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>