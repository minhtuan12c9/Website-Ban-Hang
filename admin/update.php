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
            $id = $_GET["key"];
            require('../database/connect.php');

            $sql = "select * from sanpham where id = $id";
            $result = mysqli_query($conn, $sql);
            // Lấy hàng đầu tiên của bảng
            $row = mysqli_fetch_assoc($result);

            $sql_anh = "select * from anhsanpham where sanpham_id = $id";
            $result_anh = mysqli_query($conn, $sql_anh);

            if (isset($_POST["btnSua"])){
                // Kết nối
                // $conn = mysqli_connect("localhost","root","","test") or die("Kết nối CSDL thát bại!");
                // Truy ván
                // Lấy dữ liệu trên form
                $ma = $_POST["ma"];
                
                $uploads_dir = '../anhsanpham';
                $listanh = [];

                $anh_array = mysqli_fetch_all($result_anh);
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
                    }else {
                        if($key == 0){
                            array_push($listanh, $row["anhsanpham"]);
                        }else {
                            array_push($listanh, $anh_array[$key - 1][1]);
                        }
                    }
                }

                $anh = $listanh[0];
                $ten = $_POST["ten"];
                $gia = $_POST["gia"];
                $danhmuc = $_POST["danhmuc"];
                $sql = "update sanpham set ma='$ma', anhsanpham = '$anh', tensanpham = '$ten', gia = $gia, danhmuc = '$danhmuc' where id = $id" ; // chữ đặt trong dấu nháy đơn
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $sql = "delete from anhsanpham where sanpham_id = $id";
                    $result = mysqli_query($conn, $sql);

                    $values = "";
                    //  Nối chuỗi để thêm nhiều ảnh
                    foreach ($listanh as $index => $tenanh){
                        if($index != 0){
                            $values.= "('$tenanh',$id)";
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
            alert("Cập nhật thành công!");
            window.location = "danhsachsanpham.php";
        </script>
        <?php
                    // Quay về trang list.php
                    // header("location:list.php");
                }
            }
        ?>
        <div class="container">
            <h1>SỬA SẢN PHẨM</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td class="olabel">Mã</td>
                        <td><input type="text" name="ma" value="<?php echo $row["ma"];?>"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Ảnh 1</td>
                        <td>
                            <input type="file" name="anh[]">
                        </td>
                    </tr>
                    <?php
                        $index = 2;
                        while($row_anh = mysqli_fetch_assoc($result_anh)){
                    ?>
                        <tr>
                            <td class="olabel">Ảnh <?php echo $index;?></td>
                            <td>
                                <input type="file" name="anh[]" value="">
                            </td>
                        </tr>
                    <?php
                            $index++;
                        }
                    ?>
                    <tr>
                        <td class="olabel">Tên sản phẩm</td>
                        <td><input type="text" name="ten" value="<?php echo $row["tensanpham"];?>"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Giá</td>
                        <td><input type="text" name="gia" value="<?php echo $row["gia"];?>"></td>
                    </tr>
                    <tr>
                        <td class="olabel">Danh mục</td>
                        <td>
                            <select name="danhmuc" id="">
                                <option value='ban_phim'  <?php
                                    if ($row["danhmuc"]=='ban_phim')
                                        echo "selected";
                                ?>>Bàn phím</option>
                                <option value="lot_chuot"  <?php
                                    if ($row["danhmuc"]=="lot_chuot")
                                        echo "selected";
                                ?>>Lót chuột</option>
                                <option value="chuot"  <?php
                                    if ($row["danhmuc"]=="chuot")
                                        echo "selected";
                                ?>>Chuột</option>
                                <option value="tai_nghe"  <?php
                                    if ($row["danhmuc"]=="tai_nghe")
                                        echo "selected";
                                ?>>Tai nghe</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="olabel"><input type="submit" value="Sửa" name="btnSua"></td>
                        <td><input type="reset" value="Hủy"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>