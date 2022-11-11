<!DOCTYPE html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="./css.css">
<link rel="stylesheet" href="./detail.css">
<?php
    require_once("./db.php");
    $idtruyen = $_REQUEST["idtruyen"];
    $select = 'SELECT * from truyen where idtruyen="'.$idtruyen.'"';
    $query = mysqli_query($conn,$select);
    $product = mysqli_fetch_assoc($query);
?>
</head>
<html>
    <body>
    <nav class="test">
	<div id="dk">
		<ul class="dk1">
		<li><a href="<?php session_start(); if(isset($_SESSION["user"])) echo 'btl_dn.php'; else echo 'btl.php' ?>"><b>TRANG CHỦ</b></a></li>
		</ul>
		</div>
	</nav>
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img class="img-detail" src="<?php echo $product["hinhanh"] ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <h3 style="color: red";>Tên sản phẩm: <?php echo $product["tentruyen"]; ?></h3>
                    <h3 style="margin-top:0px;"><b>Giá tiền: <?php echo $product["giatien"] ?> VNĐ</b></h3>
                    <p><h3>Mô tả: <?php echo $product["mota"]; ?></h3></p>
                </div>
            </div>
        </div>
    </body>
</html>
