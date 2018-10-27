<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initical-scale=1.0" />
	<!--Đây là đoạn nhúng jquery --> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Đây là đoạn nhúng FontAwesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<!--Đây là đoạn nhúng file js cho Slide-->			
	<script type="text/javascript" src="js/slider.js"></script>
	<!-- Đây là đoạn nhúng css cho site-->
	<link type="text/css" rel="stylesheet" href="css/style.css" />	
<title>Khoa CNTT - Trường đại học sư phạm ky thuât</title>
</head>
<script language="javascript">
    $(function(){
      //Keep track of last scroll
      var lastScroll = 0;
      $(window).scroll(function(event){
          //Sets the current scroll position
          var st = $(this).scrollTop();
          //Determines up-or-down scrolling
          if (st > lastScroll){
             //Replace this with your function call for downward-scrolling
             $('#MenuTop').hide();
          }
          else {
             //Replace this with your function call for upward-scrolling
             $('#MenuTop').fadeIn(1000,'linear');
          }
          //Updates scroll position
          lastScroll = st;
      });
    });
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>
 <div id="MenuTop">
  	<div id="logo"><a href="trangchu.php"><img style="height: 80px; width: 100%;" src="images/LogoMakr_3vbyPt.png"/></a></div>
		<div id="Menu">
		<ul>
		   <li><a href="trangchu.php">Trang chủ</a></li>
		   <li><a href="gioithieu.php">Giới thiệu</a>
		           <ul class="sub-menu">
		              <li><a href="gioithieu.php">Giới thiệu Khoa</a></li>
					   <li><a href="tamnhin.php">Tầm nhìn</a></li>
		           </ul>
		   </li>
		   <li><a href="giangvien.php">Giảng viên</a>
		   </li>		   
		   <li><a href="doankhoa.php">Ðoàn Khoa</a>
		   <li><a href="lienhe.php">Liên hệ</a></li>
		</ul>
	</div>
</div>
<div id="Body">
	<div id="Slider">
			<img class="slide" src="./images/slide1.jpg" stt="0">
			<img class="slide" src="./images/slide2.jpg" stt="1" style="display:none;">
			<img class="slide" src="./images/slide3.jpg" stt="2" style="display:none;">
			<img class="slide" src="./images/slide4.jpg" stt="3" style="display:none;">
			<a href="#" id="prev"><img src="./images/prev.png" width="64"height="64"></a>
			<a href="#" id="next"><img src="./images/next.png" width="64"height="64"></a>
		</div>
	<div id="Content">
		<div class="TitleContent">
			<span><a href="trangtin.php?theloai=tt">Tin tức</a></span>
		</div>
		<div class="Item-content">
			<div class="Item-content-left">
			<?php
				include("config.php");
				$query = "SELECT * FROM tintuc  WHERE theloai='tt' ORDER BY id DESC LIMIT 0,1";
				$result = mysqli_query($conn,$query);
				while ($row = mysqli_fetch_array($result)) {
				# code... ?>
				<span class="Item-content-left-top"><img src='<?php echo $row["hinhanh"]; ?>'></span>
				<span class="Item-content-left-mid">
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude']; ?></a>
				</span>
				<span class="Item-content-left-bot">
					<p><?php echo $row['caudaunoidung']; ?>...</p>
				</span>
			<?php
				}
			?>
			</div>
			<div class="Item-content-right">
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc WHERE theloai='tt' ORDER BY id DESC LIMIT 1,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-top">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc WHERE theloai='tt' ORDER BY id DESC LIMIT 2,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-mid">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc WHERE theloai='tt' ORDER BY id DESC LIMIT 3,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-bot">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
			</div>
		</div>
		<div class="TitleContent">
			<span><a href="trangtin.php?theloai=tb">Thông báo</a></span>
		</div>
		<div class="Item-content">
			<div class="Item-content-left">
			<?php
				include("config.php");
				$query = "SELECT * FROM tintuc  WHERE theloai='tb' ORDER BY id DESC LIMIT 0,1";
				$result = mysqli_query($conn,$query);
				while ($row = mysqli_fetch_array($result)) {
				# code... ?>
				<span class="Item-content-left-top"><img src='<?php echo $row["hinhanh"]; ?>'></span>
				<span class="Item-content-left-mid">
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude']; ?></a>
				</span>
				<span class="Item-content-left-bot">
					<p><?php echo $row['caudaunoidung']; ?>...</p>
				</span>
			<?php
				}
			?>
			</div>
			<div class="Item-content-right">
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='tb' ORDER BY id DESC LIMIT 1,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-top">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='tb' ORDER BY id DESC LIMIT 2,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-mid">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='tb' ORDER BY id DESC LIMIT 3,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-bot">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
			</div>
		</div>
		<div class="TitleContent">
			<span><a href="trangtin.php?theloai=ts">Tuyển sinh</a></span>
		</div>
		<div class="Item-content">
			<div class="Item-content-left">
			<?php
				include("config.php");
				$query = "SELECT * FROM tintuc  WHERE theloai='ts' ORDER BY id DESC LIMIT 0,1";
				$result = mysqli_query($conn,$query);
				while ($row = mysqli_fetch_array($result)) {
				# code... ?>
				<span class="Item-content-left-top"><img src='<?php echo $row["hinhanh"]; ?>'></span>
				<span class="Item-content-left-mid">
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude']; ?></a>
				</span>
				<span class="Item-content-left-bot">
					<p><?php echo $row['caudaunoidung']; ?>...</p>
				</span>
			<?php
				}
			?>
			</div>
			<div class="Item-content-right">
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='ts' ORDER BY id DESC LIMIT 1,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-top">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='ts' ORDER BY id DESC LIMIT 2,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-mid">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href="tintuc.php?id=<?php echo $row['id']; ?>"><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc  WHERE theloai='ts' ORDER BY id DESC LIMIT 3,1";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="Item-content-right-bot">
					<span><img src="<?php echo $row['hinhanh'];?>"></span>
					<a href=""><?php echo $row['tieude'];?>	</a>
				</span>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="Sidebar">
		<div class="Title-Sidebar"><label><a href="">Tin tức mới nhất</a></label></div>
		<div class="Content-Sidebar">
			<div class="Big-Content-Sidebar">
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc WHERE id = (SELECT MAX(id) FROM tintuc)";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span class="img"><a href=""><img src="<?php echo $row['hinhanh']; ?>"></a></span>
				<span class="left">
					<a href="">
					<?php echo $row['tieude'];?>
					</a>
				</span>
				<?php } ?>
			</div>
			<div class="Small-Content-Sidebar">
				<?php
					include("config.php");
					$query  = "SELECT * FROM tintuc WHERE id < (SELECT MAX(id) FROM tintuc)";
					$result = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_array($result)) {
						# code...
				?>
				<span>
					<a href="">
					<?php echo $row['tieude'];  ?>
					</a>
				</span>
				<?php } ?>
			</div>
		</div>
		<div class="Footer-Sidebar">
			<div class="fb-page" data-href="https://www.facebook.com/www.vute.skv/" data-tabs="timeline" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/www.vute.skv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.vute.skv/">Trường Đại Học Sư Phạm Kỹ Thuật Vinh</a></blockquote></div>
		</div>
	</div>
</div>
<div id="Footer">
	<span class="Footer-1">
	<a href=""><img src="images/LogoMakr_4rCgRo.png"></a>
	</span>
	<span class="Footer-2">
		<span class="Footer-title"><a href="">Khoa công nghệ thông tin</a></span>
		<span class="Footer-content">Trường đại học sư phạm kỹ thuật Vinh</span>
	</span>
	<span class="Footer-3">
		<span class="Footer-title">Theo dõi chúng tôi</span>
		<span class="Footer-content">
			<a href="https://www.facebook.com/zzzhvczzz"><img src="images/iconfb.png"></a>
			<a href="https://twitter.com/?lang=vi"><img src="images/iconyt.png"></a>
			<a href="https://youtube.com"><img src="images/icontwt.png"></a>
		</span>
	</span>
	<span class="Footer-4">
		<span class="Footer-title">Thống kê truy cập</span>
		<span class="Footer-content"><a href="https://info.flagcounter.com/zWRL"><img src="https://s01.flagcounter.com/mini/zWRL/bg_FFFFFF/txt_000000/border_CCCCCC/flags_0/" alt="Flag Counter" border="0"></a>
		</span>
	</span>
</div>
</body>
</html>