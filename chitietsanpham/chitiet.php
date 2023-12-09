<!DOCTYPE html>
<html>
    <head>
        <title>bai4</title>
        <style>
            *{
              margin: 0;
              padding: 0; 
              box-sizing: border-box;
            }
            .comtanor{
                margin: 0px auto;
                width: 100%;
                height: 200vh;
                padding: 10px 20px 0px 20px;
                background-color: rgb(219, 205, 205);
                position: relative;
                margin-top: 150px;
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
                margin-top: 20px;
            }
            .menu h2{
                margin-left: 5px;
            }
            .conten{
                width: 68%;
                float: right;
                height: 190vh;
                margin: 5px;
            }
            .conten.left{
                width: 50%;
                float: left;
                height: 100vh;
                margin: 0px;
            }
            .conten.right{
                width: 50%;
                float: left;
                height: 100vh;
                margin: 0px;
                padding: 15px 3%;
            }
            .conten.left.hinhchinh{
                width: 90%;
                margin: 10px 2%;
                height: 570px;
                box-shadow: 0 10px 15px rgba(0,0,0,0.2);
                background-size: cover;
                /* margin-left: -50px; */
            }
            .conten.left.menuhinh{
                width: 90%;
                margin: 0px 5% 0px 3%;
                height: 150px;
                padding: 6%;
                padding-left: 8%;
            }
            .conten.left.menuhinh.unit{
                width: 19%;
                margin-left: 1%;
                height: 100px;
                float: left;
                background-size: cover;
                box-shadow: 0 10px 15px rgba(0,0,0,0.2);
                opacity: 0.5;
            }
            .conten.left.menuhinh.unit:hover{
                opacity: 1;
            }
            .conten.right.top{
                width: 100%;
                height: auto;
                
            }
            .conten.right.top a{
                float: left;
                width: auto;
                font: 0.8em sans-serif;
                font-size: 20px;
                margin-left: 5px;
                color: grey;
                height: 20px;
                text-decoration: none;
                margin-bottom: 10px;
            }
            .conten.right.top a:hover{
                color: rgb(0, 0, 0);
            }
            .conten.right.top h2{
                font: sans-serif;
                font-size: 30px;
                margin-left: 5px;
                height: auto;
            }
            .clear{
                clear: both;
            }
            .conten.right.top.gia{
                color: red;
                font:sans-serif;
                font-size: 50px;
            }
            .conten.right.top.chitiet{
                font: 0.7em sans-serif;
                margin: 2px;
                font-size: 20px;
            }
            .conten.right.top ul li{
                display: inline-block;
            }

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
        </style>
    </head>
    <body>
        <?php
            if(isset($_GET["id"])){
                require("../database/connect.php");
                $id = $_GET["id"];

                $sql = "select * from sanpham where id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                $sql_anh = "select * from anhsanpham where sanpham_id = $id";
                $result_anh = mysqli_query($conn, $sql_anh);
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
                    <li></li>
                    <li><a href="../login/signup.php">Đăng ký / </a></li>
                    <li><a href="../login/signin.php">Đăng nhập</a></li>
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

        <div class="comtanor">
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
                <div class="conten left">
                    <div class="conten left hinhchinh" style="background-image: url(../anhsanpham/<?php echo $row['anhsanpham'];?>);">

                    </div>
                    <div class="conten left menuhinh">
                        <div class="conten left menuhinh unit" style="background-image: url(../anhsanpham/<?php echo $row['anhsanpham'];?>); opacity: 1;" onclick="thaydoi(this)"></div>
                        <?php 
                            while($row_anh = mysqli_fetch_assoc($result_anh)){
                        ?>
                            <div class="conten left menuhinh unit" style="background-image: url(../anhsanpham/<?php echo $row_anh['anh'];?>); opacity: 0.5;" onclick="thaydoi(this)"></div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="conten right">
                    <div class="conten right top">
                        <a href="#">TRANG CHỦ</a>
                        <a>/</a>
                        <a href="#">CẤU TRÚC BÀN PHÍM</a>
                        <a>/</a>
                        <a href="#">GASKET MOUNT</a>
                        <div class="clear"></div>
                        <h2>Bàn phím cơ AKKO 5075B Plus Blue on White (Multi-modes / RGB / Hotswap / Gasket mount)</h2>  
                        <div class="clear"></div>
                        <h2 class="conten right top gia">2,299,000 ₫</h2>
                        <hr>
                        <p class="conten right top chitiet">Danh mục: 75%, AKKO Switch v3, ASA Profile, Bàn phím, Blue on White, Gasket Mount, Hotswap, Multi-modes, PBT Double-Shot, RGB, Wireless</p>
                        <hr>
                        <p class="conten right top chitiet">Từ khóa: Bàn phím cơ AKKO 5075B Plus Blue on White</p>
                        <ul>
                            <li><input type="button" value="Thêm vào giỏ hàng"></li>
                            <li><input type="button" value="Mua ngay"></li>
                        </ul>
                    </div>
                </div>
            </div> 
            <script>
                let link_menuhinh=document.querySelectorAll(".conten.left.menuhinh.unit");
                var hinhchinh=document.querySelector(".conten.left.hinhchinh");
                function thaydoi(e){
                    hinhchinh.style.backgroundImage=e.style.backgroundImage;
                    for(var i=0;i<link_menuhinh.length;i++){
                        link_menuhinh[i].style.opacity="0.5";
                    }
                    e.style.opacity="1";
                }
            </script>   
        </div>
    </body>
</html>