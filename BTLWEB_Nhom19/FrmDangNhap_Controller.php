<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="cssdndk.css">
</head>

<body>

<?php
	session_start();

	require_once("./db.php");
	 $ID=$_REQUEST["ID"];
	 $Pass=$_REQUEST["Pass"];

	$sql_select_taikhoan="SELECT *FROM taikhoan where ID='$ID' and Pass='$Pass'";
	$user =mysqli_query($conn, $sql_select_taikhoan);
	if(mysqli_num_rows($user)==0)
	{
	echo("<script>alert('Tài khoản bạn nhập không đúng!')</script>");
	}
	else
	{
		$userData = mysqli_fetch_assoc($user);
		$_SESSION["user"] = $userData["Hoten"];
		$_SESSION["quyen"] = $userData["quyen"];
		header("Location: BTL_DN.php");
		echo("<script>alert('Đăng nhập thành công!')</script>");
	}


?>
<header align="center">
		<a href="BTL.php">
			<p align="center"><marquee> <img src="img/logo.png" width="300"></marquee> </p>
		</a>
  </header>
	<marquee direction="right" bgcolor="#E8FF00"><h2 align="center"  >BẠN VỪA NHẬP SAI TÀI KHOẢN, VUI LÒNG NHẬP LẠI</h2></marquee>

	<form name="frm_login" action="FrmDangNhap_Controller.php" method="post" enctype="multipart/form-data">
<table align="center" width="392" border="1" class="giua">
  <tbody>
    <tr>
      <td height="39" colspan="2" align="center">ĐĂNG NHẬP</td>
    </tr>
    <tr>
      <td width="125">Tên đăng nhập</td>
      <td width="251"><input type="text" name="ID"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input type="password" name="Pass"></td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="button" value="Đăng nhập" onClick="check_input()"> <input type="reset" value="Kết thúc"></td>
    </tr>
  </tbody>
</table>
</body>
</html>
	<script language="javascript">
	function check_input()
	{
		var ID_ = document.frm_login.ID.value;
		var Pass_ = document.frm_login.Pass.value;

		if(ID_=="" || Pass_=="")
			{
				alert("Bạn chưa nhập đủ thông tin. Xin ktra lại");
			}

		else
			document.frm_login.submit();
	}
	</script>
