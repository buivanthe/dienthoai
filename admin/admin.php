<?php 
   session_start();
   if(!isset($_SESSION['username'])   or ($_SESSION['phanquyen']==1))
   {
		
		header('location:login.php');
		exit();
   }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="ckeditor/ckeditor.js"></script>
<title> Bán Điện Thoại </title>
<link rel="stylesheet" type="text/css" href="css/index.css">




</head>
<?php 
	include("../include/connect.php");
?>
<body>
<div id="wapper">
	<div id="header">
		<div id="lg-header">
			<h1><a href="../index.php">logo</a></h1>
		</div><!-- End .bg-lg-header -->
		<div id="bg-header">
		</div><!-- End .bg-header -->
	</div><!-- End .header -->
	<div id="content">
		<div id="top-content">
						<p>Chào bạn <font color="green"><b><u><?= $_SESSION['username']?></u></b></font><a href="logout.php"> | Thoát</a></p>
		</div>
		<div id="main-content">
			<div id="left-content">
				<div class="danhmucsp">
					<div class="center">
					<h4>Quản lý</h4>
						<ul>
							<li><a href="admin.php">Trang chủ</a></li>
							<li><a href="?admin=hienthisp"> Quản lý sản phẩm</a></li>
							<li><a href="?admin=hienthidm"> Quản lý danh mục</a></li>
							<li><a href="?admin=hienthihd"> Quản lý hóa đơn</a></li>
							<li><a href="?admin=hienthind"> Quản lý người dùng</a></li>
							<li><a href="?admin=hienthitt"> Quản lý tin tức</a></li>
							<li><a href="?admin=hienthiht"> Quản lý hỗ trợ</a></li>
						</ul>
					</div><!-- End .center -->
				</div>	<!-- End .menu-left -->
			</div><!-- End .left-content -->
			<!---------------- Hiển trị content-admin------------------->
			
			
			<div id="center-content">
                <?php
                    include("content_admin.php");
                ?>
			</div>
		</div><!-- End .main-content -->
	</div><!-- End .content -->
	
</div><!-- End .wapper -->
</body>
</html>
