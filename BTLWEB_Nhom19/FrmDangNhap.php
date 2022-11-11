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

	