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
        </style>
    </head>

    <body>
        <?php
            session_start();
            if (isset($_POST['btnsub'])){
                $ten = $_POST["ten"];
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $repass = $_POST["repass"];

                $_SESSION["user"] = [
                    'ten' => $ten,
                    'email' => $email,
                    'pass' => $pass,
                ];

                header("location:signin.php");
            }
        ?>
        <div class="container">
            <h1 class="dk">
                Thành viên đăng ký
            </h1>
            <p class="chu">
                Xin chào quý khách!
            </p>
            <form class="fo" action="" method = "post">
                <label for="name">Tên đầy đủ</label>
                    
                <input type="text" name="ten" id="name" placeholder="VD: Hồ Phan Minh Tuấn" autocomplete="off" required>
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="VD: hophanminhtuan2619@gmail.com" required>
                
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu" required>
                
                <label for="pass">Nhập lại mật khẩu</label>
                <input type="password" name="repass" id="pass" placeholder="Nhập lại mật khẩu" required>
                
                <input class="sub" name="btnsub" type="submit" id="sub" value="Đăng ký" onclick="return btn()">
            </form>
        </div>

        <script>
            var t = document.querySelectorAll("input");
            let tmp = true;
            function btn(){
                for (let i=0;i<t.length;i++)
                {
                    if (t[0].value==""){
                        alert("Vui lòng nhập tên!");
                        tmp = false;
                        // break;
                        return false;
                    }
                        
                    if (t[1].value==""){
                        alert("Vui lòng nhập email!");
                        tmp = false;
                        // break;
                        return false;
                    }
                        
                    if (t[2].value==""){
                        alert("Vui lòng nhập mật khẩu!");
                        tmp = false;
                        // break;
                        return false;
                    }
                    if (t[3].value==""){
                        alert("Vui lòng nhập lại mật khẩu!");
                        tmp = false;
                        // break;
                        return false;
                    }
                    if (t[3].value!=t[2].value){
                        alert("Mật khẩu không khớp Vui lòng nhập lại!");
                        tmp = false;
                        // break;
                        return false;
                    }
                    tmp = true;
                }
                if (tmp==true){
                    alert("Đăng ký thành công!");
                }
            }
        </script>
    </body>
</html>