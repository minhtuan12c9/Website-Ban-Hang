<!DOCTYPE html>
<html>
    <head>
        <title>
            Form.com
        </title>
        <style>
            *{
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
            }
            .clear{
                clear: both;
            }
            body{
                background-size: cover;
            }
            .container{
                width: 30%;
                box-shadow: 0 0 20px 3px;
                margin: 50px auto;
                padding: 10px 0;
            }
            .dk{
                margin-top: 20px;
                text-align: center;
            }
            .chu{
                margin-top: 10px;
                text-align: center;
                font-size: 20px;
            }
            .fo{
                margin-top: 30px;
                padding: 0 20px;
            }
            label{
                font-weight: bolder;
                display: block;
                margin-top: 30px;
            }
            input{
                width: 100%;
                margin-top: 8px;
                padding: 12px 10px;
                border: 1px solid rgb(211, 205, 205);
                border-radius: 5px;
                outline: none;
            }
            .sub{
                margin-top: 30px;
                margin-bottom: 20px;
                border-radius: 10px;
                border: 1px solid rgb(47, 165, 159);
                background: rgb(47, 165, 159);
                color: white;
                font-weight: bolder;
                cursor: pointer;
            }
            .sub:hover{
                opacity: 0.8;
            }
            input::placeholder{
                color: red;
            }

            .dk2{
                width: 100%;
                margin-top: 8px;
                padding: 12px 10px;
                border: 1px solid rgb(211, 205, 205);
                border-radius: 5px;
                outline: none;

                margin-top: 40px;
                margin-bottom: 20px;
                border-radius: 10px;
                border: 1px solid rgb(47, 165, 159);
                background: rgb(47, 165, 159);
                color: white;
                font-weight: bolder;
                cursor: pointer;

                text-align: center;
            }
            .hoi{
                text-align: center;
                margin-bottom: 20px;
                margin-top: -5px;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <?php
            session_start();
            if (isset($_POST['btnlog']) && isset($_SESSION["user"])){
                $email = $_POST["email"];
                $pass = $_POST["pass"];

                if($email==$_SESSION["user"]["email"] && $pass==$_SESSION["user"]["pass"]){
                    ?>
                    <script>
                        alert("Thanh Cong");
                    </script>
                    <?php
                    header("location:../giaodienchinh/giaodienchinh.php");
                }
                
            }
        ?>

        <div class="container">
            <h1 class="dk">
                Thành viên đăng nhập
            </h1>
            <p class="chu">
                Xin chào quý khách!
            </p>
            <form class="fo" action="" method = "post">
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="VD: hophanminhtuan2619@gmail.com">
                
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu">
                
                <input class="sub" name="btnlog" type="submit" id="sub" value="Đăng nhập">
                <p class="hoi">Bạn chưa có tài khoản?</p>
                <p class="hoi">Đăng ký ngay!</p>
                <a style="text-decoration: none" href="signup.php">
                    <div class="dk2" style="background-color: orange;margin-top: 0">Đăng ký</div>
                </a>
            </form>
        </div>
    </body>
</html>