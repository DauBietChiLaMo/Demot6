<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="cssdndk.css">
</head>

<body>
	<header align="center">
		<a href="BTL.php">
			<p align="center">  <img src="img/logo.png" width="300"></p>				
		</a> 	
  </header>							 
	
<form name="frm_login" action="FrmDangKy_Save.php" method="post" enctype="multipart/form-data">
<table align="center" width="478" border="1" class="giua">
  <tbody>
    <tr>
      <td height="39" colspan="2" align="center">THÔNG TIN ĐĂNG KÝ</td>
    </tr> 
    <tr>
      <td>Tài khoản</td>
      <td><input type="text" name="ID"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input type="password" name="Pass"></td>
    </tr>
    <tr>
      <td>Họ tên</td>
      <td><input type="text" name="Hoten"></td>
    </tr>
	  <tr>
      <td>Số điện thoại</td>
      <td><input type="number" name="Sdt"></td>
    </tr>
	  <tr> 
	<td height="31"> Giới tính </td>
	<td> <select name="gt">
			<option value="0">--Chọn giới tính--</option>
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
			</select></td>		  
	</tr>
    <tr>
      <td colspan="2" align="center"><input type="button" value="Đăng ký" onClick="check_input()"><input type="reset" value="Kết thúc"></td>
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
		var hoten_ = document.frm_login.Hoten.value;
		var sdt_ = document.frm_login.Sdt.value;		
		var gt_ =document.frm_login.gt.value
		if(ID_=="" || Pass_==""|| hoten_==""||sdt_==""|| gt_== 0 )
			{
				alert("Bạn chưa nhập đủ thông tin. Xin ktra lại");	
			}			
		else
			{
			 document.frm_login.submit();
			}
			
	}
	</script>
	
</body>
</html>

