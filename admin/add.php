<!DOCTYPE html>
<html>
    <head>
        <title>
            Danh sách sản phẩm
        </title>
        
        <style>
            *{
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
            }
            .olabel{
                text-align: right;
                margin-right: 5px;
            }
        </style>
    </head>

    <body>
        <?php
            if (isset($_POST["btnThem"])){
                // Kết nối
                // $conn = mysqli_connect("localhost","root","","test") or die("Kết nối CSDL thát bại!");
                require('../database/connect.php');
                // Truy ván
                // Lấy dữ liệu trên form
                $ma = $_POST["ma"];


                $uploads_dir = '../anhsanpham';
                $listanh = [];

                foreach ($_FILES["anh"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["anh"]["tmp_name"][$key];
                        // basename() may prevent filesystem traversal attacks;
                        // further validation/sanitation of the filename may be appropriate
                        $name = basename($_FILES["anh"]["name"][$key]);
                        $ketqua = move_uploaded_file($tmp_name, "$uploads_dir/$name");
                         if ($ketqua){
                            array_push($listanh, $name);
                         }
                    }
                }
                
                
                $anh = $listanh[0];
                $ten = $_POST["ten"];
                $gia = $_POST["gia"];
                $danhmuc = $_POST["danhmuc"];
                $sql = "insert into sanpham(ma, anhsanpham, tensanpham, gia, danhmuc)
                                    values ('$ma', '$anh', '$ten', $gia, '$danhmuc')"; // chữ đặt trong dấu nháy đơn
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $sanpham_id = mysqli_insert_id($conn);
                    $values = "";
                    //  Nối chuỗi để thêm nhiều ảnh
                    foreach ($listanh as $index => $tenanh){
                        if($index != 0){
                            $values.= "('$tenanh',$sanpham_id)";
                            if($index != count($listanh) - 1){
                                $values.= ",";
                            }
                        }
                    }

                    $sql = "insert into anhsanpham(anh, sanpham_id)
                                    values $values"; // chữ đặt trong dấu nháy đơn
                    $result = mysqli_query($conn, $sql);

                    // Đóng kết nối
                    mysqli_close($conn);
                    // Thông báo thành công trước khi quay về
        ?>
        <script>
            alert("Thêm mới thành công!");
            window.location = "danhsachsanpham.php";
        </script>
        <?php
                }
            }
        ?>
        <div class="container">
            <h1>THÊM SẢN PHẨM</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td class="olabel">Mã</td>
                        <td><input type="text" name="ma"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Ảnh 1</td>
                        <td><input type="file" name="anh[]" required></td>
                        <td class="olabel">Ảnh 2</td>
                        <td><input type="file" name="anh[]" required></td>
                        <td class="olabel">Ảnh 3</td>
                        <td><input type="file" name="anh[]" required></td>
                        <td class="olabel">Ảnh 4</td>
                        <td><input type="file" name="anh[]" required></td>
                    </tr>
                    <tr>
                        <td class="olabel">Tên sản phẩm</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Giá</td>
                        <td><input type="text" name="gia"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Danh mục</td>
                        <td>
                            <select name="danhmuc" id="">
                                <option value="ban_phim">Bàn phím</option>
                                <option value="lot_chuot">Lót chuột</option>
                                <option value="chuot">Chuột</option>
                                <option value="tai_nghe">Tai nghe</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="olabel"><input type="submit" value="Thêm" name="btnThem"></td>
                        <td><input type="reset" value="Hủy"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>