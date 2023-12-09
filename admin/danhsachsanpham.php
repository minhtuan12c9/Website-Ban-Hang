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
            table{
                border-collapse: collapse;
                text-align: center;
            }
            img{
                width: 100%;
                padding: 10px;

            }
        </style>
    </head>

    <body>
        <?php
            // Kết nối
            require('../database/connect.php');

            $danhmuc="";
            if (isset ($_GET["danhmuc"]))
            {
                $danhmuc=$_GET["danhmuc"];
            }
            // Truy ván
            $sql = "select * from sanpham";
            if ($danhmuc)
            {
                $sql = "select * from sanpham where danhmuc = '$danhmuc'";
            }
            // result là table có nhiều row, mỗi row có 4 trường thông tin (id, ten, thutu, anhien)
            $result = mysqli_query($conn, $sql);
            
        ?>

        <div class="container">
            <h1>DANH SÁCH SẢN PHẨM</h1>
            
            <div>
                <select name="danhmuc" class="locdanhmuc">
                    <option value="" <?php
                        if ($danhmuc=='')
                            echo "selected";
                    ?>>Tất cả</option>
                    <option value="ban_phim"<?php
                        if ($danhmuc=='ban_phim')
                            echo "selected";
                    ?>>Bàn phím</option>
                    <option value="lot_chuot"<?php
                        if ($danhmuc=='lot_chuot')
                            echo "selected";
                    ?>>Lót chuột</option>
                    <option value="chuot"<?php
                        if ($danhmuc=='chuot')
                            echo "selected";
                    ?>>Chuột</option>
                    <option value="tai_nghe"<?php
                        if ($danhmuc=='tai_nghe')
                            echo "selected";
                    ?>>Tai nghe</option>
                </select>
                <a href="./danhsachsanpham.php" style="display:none;" class="locdanhmuclink"></a>
            </div>

            <table border="1">
                <tr>
                    <th>Mã</th>
                    <th width="10%" >Ảnh sản phẩm 1</th>
                    <th width="10%" >Ảnh sản phẩm 2</th>
                    <th width="10%" >Ảnh sản phẩm 3</th>
                    <th width="10%" >Ảnh sản phẩm 4</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th colspan="2"><a href="add.php">Thêm sản phẩm</a></th>
                </tr>
                <?php
                    // $row: chứa từng hàng của bảng $result
                    // $ROW: mảng với các từ khóa tương ứng với 4 trường thông tin (id, ten, thutu, anhien)
                    while($row = mysqli_fetch_assoc($result))
                    {

                        $sanpham_id = $row['id'];
                        $sql_anh = "select * from anhsanpham where sanpham_id = $sanpham_id";
                        $result_anh = mysqli_query($conn, $sql_anh);
                ?>
                        <tr>
                            <td><?php echo $row["ma"];?></td>
                            <td><img src="../anhsanpham/<?php echo $row["anhsanpham"];?>" alt=""></td>
                            <?php
                                while($anh = mysqli_fetch_assoc($result_anh)){
                                    $tenanh = $anh["anh"];
                                    echo "<td><img src='../anhsanpham/$tenanh' alt=''></td>";
                                }
                            ?>
                            <td><?php echo $row["tensanpham"];?></td>
                            <td><?php echo $row["gia"];?></td>

                            <td ><a href="update.php?key=<?php echo $row["id"]; ?>">Sửa</a></td>
                            <td ><a href="delete.php?key=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure about that?')">Xóa</a></td>
                        </tr>
                <?php
                    }
                    mysqli_close($conn);
                ?>
            </table>
        </div>
    </body>

    <script>
        const locdanhmuc = document.querySelector('.locdanhmuc');
        const locdanhmuclink = document.querySelector('.locdanhmuclink');

        locdanhmuc.onchange = function(){
            if(locdanhmuc.value){
                locdanhmuclink.href += '?danhmuc=' + locdanhmuc.value;
            }
            locdanhmuclink.click();
        }
    </script>
</html>