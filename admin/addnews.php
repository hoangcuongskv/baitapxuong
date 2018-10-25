<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
<style type="text/css">
	p {font-size: 30px; border: 1px solid rgba(0,0,0,.1);}
	table { border: 1px solid rgba(0,0,0,.1); }
	.firt-td {text-align: center; border-bottom: 1px solid rgba(0,0,0,.1);  }
	input[type='text'] {width: 70%;}
</style>
<body>
	<?php 
	if (isset($_POST['btnadd'])) {
		# code...
		$tieude = isset($_POST['tieude'])?$_POST['tieude']:'';
		$noidung = isset($_POST['noidung'])?$_POST['noidung']:'';
		$nguoidang = isset($_POST['nguoidang'])?$_POST['nguoidang']:'';
		$hinhanh = isset($_FILE['hinhanh']['name'])?$_FILE['hinhanh']['name']:'';
		$ngaydang = isset($_POST['ngaydang'])?$_POST['ngaydang']:'';
		$caudaubai = isset($_POST['caudaubai'])?$_POST['caudaubai']:'';
		$chuyenmuc = isset($_POST['chuyenmuc'])?$_POST['chuyenmuc']:'';
		echo $hinhanh;
	}
	?>
	<p align="center">Thêm Bài viết</p>
	<form method="post">
	<table width="80%" align="center">
		<tr class="tr"><td class="firt-td">Tiêu đề</td><td><textarea class="ckeditor" id="tieude" name="tieude"></textarea></td></tr>
		<tr><td class="firt-td">Nội dung</td><td><textarea class="ckeditor" id="noidung" name="noidung"></textarea></td></tr>
		<tr><td class="firt-td">Ngày đăng</td><td><input type="date" name="ngaydang"></td></tr>
		<tr><td class="firt-td">Người đăng</td><td><input type="text" name="nguoidang"></td></tr>
		<tr><td class="firt-td">Hình ảnh</td><td><input type="file" name="hinhanh"></td></tr>
		<tr><td class="firt-td">Câu đầu bài</td><td><textarea class="ckeditor" id="caudaubai" name="caudaubai"></textarea></td></tr>
		<tr><td class="firt-td">Chuyên mục</td>
			<td>
				<select name="chuyenmuc">
					<option value="Tin tức">Tin tức</option>	
					<option value="Thông báo">Thông báo</option>
					<option value="Tuyển sinh">Tuyển sinh</option>	
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button type="submit" name="btnadd">Thêm bài viết</button>
				<button type="submit" name="btnback">Về lại trang Admin</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>