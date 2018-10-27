<!DOCTYPE html>
<html>
<head>
	<title>Admin đăng nhập</title>
</head>
<style type="text/css">
body, html {
    height: 100%;
}
#background { 
	width: 100%; 
	height: 100%; 
	background-image: radial-gradient(circle, #dcdeb8, #cddea3, #b7de92, #99e086, #6de181);
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -10px;
    display: flex;
    justify-content: center;
    align-items: center;
    }
.List-Item {
	width: 300px;
	height: 210px; 
	background: black;
	background-image: linear-gradient(to right bottom, #edf62f, #acda3f, #74bb4a, #449b4f, #1b7a4d);
	border-radius: 15px;
	box-shadow: 0px 5px  35px #000;
	}
.Item {
	width: 100%;
	height: 69px;
	border-top: 1px solid rgba(0,0,0,.2);
	display: grid;
	align-content: center;
}
.Item input[type="text"],button {
	margin: auto;
}
</style>
<body>
<div id="background">
<div class="List-Item">
	<div class="Item"><input type="text" name="username" placeholder="Tên đăng nhập"></div>
	<div class="Item"><input type="text" name="pass" placeholder="Mật khẩu đăng nhập"></div>
	<div class="Item"><button type="submit" name="btnlogin">Đăng nhập</button></div>
</div>
</div>
</body>
</html>