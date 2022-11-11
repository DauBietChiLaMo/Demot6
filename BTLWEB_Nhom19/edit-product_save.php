<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="./css.css">
    <?php
        require_once("./db.php");
        $mes = '';
        $folder_path = "uploads/";
        $idtruyen = $_REQUEST["idtruyen"];
        $tentruyen = $_REQUEST["tentruyen"];
        $gia = $_REQUEST["gia"];
        $hinhanh = '';
        $loai = (int) $_REQUEST["loai"];
        $sqladd = "UPDATE truyen SET tentruyen = '".$tentruyen."', giatien = ".$gia.", loai = ".$loai." WHERE idtruyen='".$idtruyen."'";
        if(mysqli_query($conn,$sqladd)) {
            $mes = "Sửa thành công sản phẩm có id : ".$idtruyen;
        } else {
            $mes = "Sửa thất bại";
        }
    ?>
</head>

<body>
<nav class="test">
  <div id="dk">
		<ul class="dk1">
			<li><a><b>XIN CHÀO QUẢN TRỊ VIÊN</b></a></li>
			<li><a href="BTL.php"><b>ĐĂNG XUẤT</b></a></li>
			<li><a href="Admin_GioHang.php"><b>GIỎ HÀNG</b></a></li>
		</ul>
		</div>
		<p class="add-success"><?php echo $mes;  ?></p>
</nav>
</body>
</html>
