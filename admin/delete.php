<?php
    // Lấy biến key trên đường dẫn
    $id = $_GET["key"];
    require("../database/connect.php");
    $sql = "delete from anhsanpham where sanpham_id = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "delete from sanpham where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        mysqli_close($conn);
?>
    <script>
        alert("Xóa thành công!");
        window.location = "danhsachsanpham.php";
    </script>
<?php
    }
?>