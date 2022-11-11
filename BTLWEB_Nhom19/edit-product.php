<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="./css.css">
	<?php
		require_once("./db.php");
		$idtruyen = $_REQUEST["idtruyen"];
		$selecttruyen = 'SELECT * from truyen WHERE idtruyen = "'.$idtruyen.'"';
		$data = mysqli_query($conn,$selecttruyen);
		$row= mysqli_fetch_assoc($data);
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
		<form class="add-form" action="edit-product_save.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<p>ID truyện</p>
				<input type="text"  value="<?php echo $row["idtruyen"];  ?>" name="idtruyen" placeholder="nhập id truyện"/>
			</div>
			<div class="form-group">
				<p>Tên truyện</p>
				<input type="text" value="<?php echo $row["tentruyen"];  ?>" name="tentruyen" placeholder="nhập tên truyện"/>
			</div>
			<div class="form-group">
				<p>Giá</p>
				<input type="text" value="<?php echo $row["giatien"]; ?>" name="gia" placeholder="nhập giá truyện"/>
			</div>
			<div class="form-group">
				<p>Loại: <?php
					if($row["loai"] == 1) echo "Mới ra";
					else if($row["loai"] == 2) echo "Hot";
					else echo "Thiếu nhi";
 				?></p>
				<select name="loai">
					<option value="1">Mới ra</option>
					<option value="2">Hot</option>
					<option value="3" >Thiếu nhi</option>
				</select>
			</div>
			<button type="submit">Sửa</button>
		</form>
</nav>
</body>
</html>
