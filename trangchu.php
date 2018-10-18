<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initical-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="jquery.scrollupformenu.js"></script>
<title>Khoa CNTT - Trường đại học sư phạm ky thuât</title>
</head>
<style>
@media screen and (min-width: 768px) {
* { font-family:sans-serif;}
/* Body site*/
#Body {
	width:100%;
	margin:auto;
	margin-top:80px;
	background: linear-gradient(#abbaab,#ffffff);
}
/* Menu mẹ*/
#MenuTop {
	width:100%;
	height:80px;
	background:linear-gradient(#232526,#414345);
	opacity:0.8;
	margin:auto;
	position:fixed;
	top:0;
	left:0;
	box-shadow: 5px #666;
	-moz-box-shadow: 5px 5px 5px #666;
	-webkit-box-shadow: 5px 5px 5px #666;
	z-index:500;
}
#Menu ul { list-style-type:none; margin:0; text-align:center; padding:0; }
#Menu ul li { display:inline-table; width:16%; height:80px; line-height:80px; left: 0px; position: relative;}
#Menu ul li a { display:block; color: #e9d362; text-decoration:none;}
#Menu ul li a:hover { color:#ffffff; opacity: 0.8; display: block;}
#Menu {width: 70%; height: 80px; float: right;}
#Menu ul li > .sub-menu
{
	background:linear-gradient(#232526,#414345);;
	display: none;
	position: absolute;	
}
#Menu ul li:hover > .sub-menu{
	background: #000000;
	display: block;
}
.sub-menu li {
	height: 40px;
}
.sub-menu li a {
	width: 200px
}
.sub-menu li a:hover {
	background: linear-gradient(#0f2027,#2c5364);
}
/* Logo trang web*/
#logo {width: 30%; height: 80px; float: left;}
}
</style>
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
<body>
 <div id="MenuTop">
  	<div id="logo"><a href="trangchu.php"><img style="height: 80px; width: 100%;" src="images/LogoMakr_3vbyPt.png"/></a></div>
		<div id="Menu">
		<ul>
		   <li><a href="">Trang chủ</a></li>
		   <li><a href="">Giới thiệu</a>
		           <ul class="sub-menu">
		              <li><a href="">Giới thiệu Khoa</a></li>
		              <li><a href="">Môi trường </a></li>
					   <li><a href="">Tầm nhìn</a></li>
		           </ul>
		   </li>
		   
		   <li><a href="">Giảng viên</a>
		           <ul class="sub-menu">
		              <li><a href="">Thông báo</a></li>
		              <li><a href="">Biểu mẫu</a></li>					
		           </ul>
		   </li>
		   <li><a href="">Sinh viên</a>
		           <ul class="sub-menu">
		              <li><a href="">Thông báo</a></li>
		              <li><a href="">Việc làm thực tập</a></li>
					  <li><a href="">Biểu mẫu</a></li>
					  <li><a href="">Khen thưởng</a></li>				
		           </ul></li>
		   
		   <li><a href="">Ðoàn Khoa</a>
		           <ul class="sub-menu">
		              <li><a href="">Thông báo</a></li>
					  <li><a href="">Biểu mẫu</a></li>				
		           </ul></li>
		   <li><a href="">Liên hệ</a></li>
		</ul>
	</div>
</div>
<div id="Body">
<button id="BtnTest">Thử xem nào</button>
<p>AAAA1</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
<p>AAAA</p>
</div>
<p>Scrolled <span>0</span> times.</p>	
</body>
</html>