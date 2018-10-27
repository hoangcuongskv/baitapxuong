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
<style type="text/css">
#bodygioithieu {width: 75%; float: left;  border-right: 1px solid rgba(0,0,0,.1); margin-top: 80px;}
#bodygioithieu p {width: 100%; float: left;}
</style>
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
<div id="bodygioithieu">
<table cellpadding="4" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style="vertical-align:top">
			<table cellpadding="2" cellspacing="2" style="width:100%">
				<tbody>
					<tr>
						<td>
						<table border="1" cellpadding="4" cellspacing="0">
							<tbody>
								<tr>
									<th scope="col">STT</th>
									<th scope="col">HỌ V&Agrave; T&Ecirc;N</th>
									<th scope="col">CDKH</th>
									<th scope="col">PH&Aacute;I</th>
									<th scope="col">BỘ M&Ocirc;N</th>
									<th scope="col">EMAIL</th>
									<th scope="col">T&Igrave;NH TRẠNG</th>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~AminaHamith" target="_blank">Amina Hamith</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bckien" target="_blank">B&ugrave;i Ch&iacute; Ki&ecirc;n</a></td>
									<td>GVC</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nguyenkdtt(at)yahoo.com</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bdthinh" target="_blank">B&ugrave;i Đắc Thịnh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bhthong" target="_blank">B&ugrave;i Huy Th&ocirc;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>thongbui1912(at)gmail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bmtdiem" target="_blank">B&ugrave;i Minh Từ Diễm</a></td>
									<td>GV, DEA</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>bmtdiem(at)gmail.com</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>6</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bqhuy" target="_blank">B&ugrave;i Quang Huy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btloc" target="_blank">B&ugrave;i Tấn Lộc</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>btloc(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>8</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btphong" target="_blank">B&ugrave;i Thanh Phong</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btdanh" target="_blank">B&ugrave;i Thị Danh</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>btdanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>10</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btkngan" target="_blank">B&ugrave;i Thị Kim Ng&acirc;n</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>11</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btluan@hcmus.edu.vn" target="_blank">B&ugrave;i Thị Luận</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>btluan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>12</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btnngoc@hcmus.edu.vn" target="_blank">B&ugrave;i Thị Như Ngọc</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>btnngoc(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>13</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btny" target="_blank">B&ugrave;i Thị Như &Yacute;</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>btny(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>14</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btlen" target="_blank">B&ugrave;i Tiến L&ecirc;n</a></td>
									<td>GVC, TS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>btlen(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>15</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~btdnam" target="_blank">B&ugrave;i Trần Đồng Nam</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>16</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bvthach" target="_blank">B&ugrave;i Văn Thạch</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>17</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bvhung@hcmus.edu.vn" target="_blank">B&ugrave;i Việt Hưng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>bvhung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>18</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~bxthang" target="_blank">B&ugrave;i Xu&acirc;n Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>19</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdtan" target="_blank">Cao Đăng T&acirc;n</a></td>
									<td>GVC</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>tan(at)hcmuns.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>20</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cmvinh" target="_blank">Cao Minh Vĩnh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>21</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cnthuc" target="_blank">Cao Nghi Thục</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>cnthuc(at)math.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>22</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ctmdung@hcmus.edu.vn" target="_blank">Cao Thị Mỹ Dung</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ctmdung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>23</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cttlien" target="_blank">Cao Thị Th&ugrave;y Li&ecirc;n</a></td>
									<td>NCV</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>cttlien(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>24</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cxnam" target="_blank">Cao Xu&acirc;n Nam</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>cxnam(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>25</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom1_2017" target="_blank">CDIO Nhom 1</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>26</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom10_2017" target="_blank">CDIO Nhom 10</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>27</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom11_2017" target="_blank">CDIO Nhom 11</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>28</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom12_2017" target="_blank">CDIO Nhom 12</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>29</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom13_2017" target="_blank">CDIO Nhom 13</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>30</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom14_2017" target="_blank">CDIO Nhom 14</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>31</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom15_2017" target="_blank">CDIO Nhom 15</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>32</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom16_2017" target="_blank">CDIO Nhom 16</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>33</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom17_2017" target="_blank">CDIO Nhom 17</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>34</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom18_2017" target="_blank">CDIO Nhom 18</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>35</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom19_2017" target="_blank">CDIO Nhom 19</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>36</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom2_2017" target="_blank">CDIO Nhom 2</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>37</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom3_2017" target="_blank">CDIO Nhom 3</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>38</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom4_2017" target="_blank">CDIO Nhom 4</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>39</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom5_2017" target="_blank">CDIO Nhom 5</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>40</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom6_2017" target="_blank">CDIO Nhom 6</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>41</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom7_2017" target="_blank">CDIO Nhom 7</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>42</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom8_2017" target="_blank">CDIO Nhom 8</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>43</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cdio_nhom9_2017" target="_blank">CDIO Nhom 9</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>44</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ccthien" target="_blank">Ch&acirc;u Ch&iacute; Thiện</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>45</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cnphuong" target="_blank">Ch&acirc;u Ngọc Phương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>46</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cndkhiem" target="_blank">Ch&acirc;u Nguyễn Duy Khi&ecirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>47</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ctduc" target="_blank">Ch&acirc;u Th&agrave;nh Đức</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>ctduc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>48</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cvtao" target="_blank">Ch&acirc;u Văn Tạo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>49</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ctbsan" target="_blank">Chu Tất B&iacute;ch San</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>50</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ctmkhoi" target="_blank">Chu Th&aacute;i Minh Kh&ocirc;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>51</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~cqkhanh" target="_blank">Chung Quang Kh&aacute;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>52</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ctlinh" target="_blank">Chung Th&ugrave;y Linh</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>ctlinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>53</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dqhhai" target="_blank">Đ&agrave;m Quang Hồng Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>54</td>
									<td><a href="http://www.fit.hcmuns.edu.vn/~dbvan" target="_blank">Đặng B&aacute;c Văn</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>dbvan(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>55</td>
									<td><a href="http://www.fit.hcmus.edu.vn/vn/www.fit.hcmus.edu.vn/~dbphuong" target="_blank">Đặng B&igrave;nh Phương</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>dbphuong(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>56</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dctri" target="_blank">Đặng Cao Tr&iacute;</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>dctri(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>57</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ddkhoa" target="_blank">Đặng Đăng Khoa</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>TGMT, THCS</td>
									<td>ddkhoa87(at)gmail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>58</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dhvan" target="_blank">Đặng Hải V&acirc;n</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>dhvan(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>59</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dhtrung@hcmus.edu.vn" target="_blank">Đặng Ho&agrave;i Trung</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dhtrung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>60</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dhhai" target="_blank">Đặng Ho&agrave;ng Hải</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>dhhai(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>61</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dlkhoa" target="_blank">Đặng L&ecirc; Khoa</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>62</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dmchau" target="_blank">Đặng Minh Ch&acirc;u</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>63</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dndtien" target="_blank">Đặng Nguyễn Đức Tiến</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>dndtien(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>64</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dthang" target="_blank">Đặng Thị Hằng</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>65</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dthtrang" target="_blank">Đặng Thị Huyền Trang</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>dthtrang(at)selab.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>66</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dttle@hcmus.edu.vn" target="_blank">Đặng Thị Thanh L&ecirc;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dttle(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>67</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dttnguyen" target="_blank">Đặng Thị Thanh Nguy&ecirc;n</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>dttnguyen(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>68</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtmhau" target="_blank">Đặng Trần Minh Hậu</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>dtmhau(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>69</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtan@hcmus.edu.vn" target="_blank">Đặng Trường An</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dtan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>70</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtunghia" target="_blank">Đặng Tuấn Nghĩa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>71</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~datuan" target="_blank">Đ&agrave;o Anh Tuấn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>72</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~daotuan@hcmus.edu.vn" target="_blank">Đ&agrave;o Anh Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>daotuan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>73</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~davu" target="_blank">Đ&agrave;o Anh Vũ</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>74</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ddnam" target="_blank">Đ&agrave;o Duy Nam</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ddnam(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>75</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dmson" target="_blank">Đ&agrave;o Minh Sơn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>djjd121274(at)yahoo.com</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>76</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtthang" target="_blank">Đ&agrave;o Tất Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>77</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtquang" target="_blank">Đ&agrave;o Tiến Quang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>78</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtnghia" target="_blank">Đ&agrave;o Trọng Nghĩa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>79</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnhduong" target="_blank">Đậu Ngọc H&agrave; Dương</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>dnhduong(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>80</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtanguyet@hcmus.edu.vn" target="_blank">Đậu Trần &Aacute;nh Nguyệt</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>dtanguyet(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>81</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtu" target="_blank">Diệp T&uacute;</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>82</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dbthang" target="_blank">Đinh B&aacute; Thắng</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>83</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dbtien" target="_blank">Đinh B&aacute; Tiến</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>84</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ddien" target="_blank">Đinh Điền</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>ddien(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>85</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnthanh" target="_blank">Đinh Ngọc Thanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>86</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnadung" target="_blank">Đinh Nguyễn Anh Dũng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>87</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dntnghia" target="_blank">Đinh Nguyễn Trọng Nghĩa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>88</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dqhue" target="_blank">Đinh Quang Huệ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>89</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dqtuan@hcmus.edu.vn" target="_blank">Đinh Quốc Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dqtuan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>90</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dthong" target="_blank">Đinh Thanh Hồng</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>91</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dangoc" target="_blank">Đỗ &Aacute;i Ngọc</a></td>
									<td>GVC</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>92</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ddhao" target="_blank">Đ&ocirc;̃ Đức Hào</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>93</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dhcuong" target="_blank">Đỗ Ho&agrave;ng Cường</a></td>
									<td>GVC, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>94</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dlhson" target="_blank">Đỗ Lệnh H&ugrave;ng Sơn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>95</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnkha" target="_blank">Đỗ Nguy&ecirc;n Kha</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>96</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dphuc" target="_blank">Đỗ Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>97</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dphoang" target="_blank">Đỗ Phương Ho&agrave;ng</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>98</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dttoan" target="_blank">Đỗ Thanh To&agrave;n</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>dttoan(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>99</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dttuan" target="_blank">Đỗ Thanh Tuấn</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>100</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtctram" target="_blank">Đỗ Thị C&aacute;t Tr&acirc;m</a></td>
									<td>CV, ThS</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>dtctram(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>101</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dttha" target="_blank">Đỗ Thị Thanh H&agrave;</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>102</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dxquang" target="_blank">Đỗ Xu&acirc;n Quang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>103</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dcthuc" target="_blank">Đo&agrave;n Ch&aacute;nh Thức</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>104</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtavu@hcmus.edu.vn" target="_blank">Đo&agrave;n Thị Anh Vũ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dtavu(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>105</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtmtham" target="_blank">Đo&agrave;n Thị Mộng Thắm</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>106</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtbthuy" target="_blank">Đồng Thị B&iacute;ch Thủy</a></td>
									<td>PGS, TS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>thuy(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>107</td>
									<td><a href="http://www.fit.hcmuns.edu.vn/~daduc" target="_blank">Dương Anh Đức</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>daduc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>108</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dcnhan" target="_blank">Dương Ch&iacute; Nh&acirc;n</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>109</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dhhuy@hcmus.edu.vn" target="_blank">Dương Hữu Huy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dhhuy(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>110</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~DHBao" target="_blank">Dương Huỳnh Bảo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>111</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dmduc" target="_blank">Dương Minh Đức</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>112</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dmngoc" target="_blank">Dương Mỹ Ngọc</a></td>
									<td>GV</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>113</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnlnam" target="_blank">Dương Ngọc Long Nam</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>114</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dntthao" target="_blank">Dương Nguyễn Thạch Thảo</a></td>
									<td>GV</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>dntthao(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>115</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dnvu" target="_blank">Dương Nguy&ecirc;n Vũ</a></td>
									<td>GS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>116</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtbhue@hcmus.edu.vn" target="_blank">Dương Thị B&iacute;ch Huệ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dtbhue(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>117</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtkdiem" target="_blank">Dương Thị Kiều Diễm</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>dtkdiem(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>118</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ngadtt@hcmus.edu.vn" target="_blank">Dương Thị Th&uacute;y Nga</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ngadtt(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>119</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~dtnga" target="_blank">Dương Th&uacute;y Nga</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>120</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~FMeunier" target="_blank">Francois Meunier</a></td>
									<td>GS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>121</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~httuan" target="_blank">H&agrave; Thanh Tuấn</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>122</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htcnhan@hcmus.edu.vn" target="_blank">H&agrave; Th&uacute;c Ch&iacute; Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htcnhan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>123</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hntnam" target="_blank">Hầu Nguyễn Th&agrave;nh Nam</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>124</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hathu" target="_blank">Hồ Anh Thư</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>125</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hbquoc" target="_blank">Hồ Bảo Quốc</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>hbquoc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>126</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hdkha" target="_blank">Hồ Đ&igrave;nh Khả</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>127</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hltknhung" target="_blank">Hồ L&ecirc; Thị Kim Nhung</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>hltknhung(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>128</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hthvy" target="_blank">Hồ Thị Ho&agrave;ng Vy</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>129</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htmanh" target="_blank">Hồ Thị Minh Anh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>130</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htttuyen" target="_blank">Hồ Thị Thanh Tuyến</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>htttuyen(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>131</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htxanh" target="_blank">Hồ Thị Xanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>132</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~httin" target="_blank">Hồ Tr&iacute; T&iacute;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htritin(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>133</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htthanh" target="_blank">Hồ Tuấn Thanh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>htthanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>134</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hvcuu" target="_blank">Hồ Văn Cừu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>135</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hatu/" target="_blank">Ho&agrave;ng Anh T&uacute;</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>hatu(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>136</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hctrang" target="_blank">Ho&agrave;ng Cẩm Trang</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>camtrang79(at)yahoo.com</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>137</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hcdvu" target="_blank">Ho&agrave;ng C&ocirc;ng Duy Vũ</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>hcdvu(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>138</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hhmy" target="_blank">Ho&agrave;ng H&agrave; My</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>139</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hkhuan" target="_blank">Ho&agrave;ng Kha Hu&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>140</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hkhue" target="_blank">Ho&agrave;ng Khu&ecirc;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>dragonnet09(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>141</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hlcuong@hcmus.edu.vn" target="_blank">Ho&agrave;ng Lương Cường</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hlcuong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>142</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hmpduc" target="_blank">Ho&agrave;ng Minh Ph&uacute;c Đức</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>143</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hqminh" target="_blank">Ho&agrave;ng Quốc Minh</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>144</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~httu" target="_blank">Ho&agrave;ng Thanh T&uacute;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>145</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htdquy@hcmus.edu.vn" target="_blank">Ho&agrave;ng Thị Đ&ocirc;ng Quỳ</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>htdquy(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>146</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htpchi@hcmus.edu.vn" target="_blank">Ho&agrave;ng Thị Phương Chi</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htpchi(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>147</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hvtuan" target="_blank">Ho&agrave;ng Vũ Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>148</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hvqha" target="_blank">Ho&agrave;ng Vũ Quỳnh H&agrave;</a></td>
									<td>TS</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>149</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hxthao" target="_blank">Ho&agrave;ng Xu&acirc;n Thảo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>150</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hltvy" target="_blank">Hứa L&ecirc; Thanh Vy</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>151</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hhco" target="_blank">Huỳnh Hữu C&oacute;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>NONE</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>152</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hhloi" target="_blank">Huỳnh Hữu Lợi</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>153</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hnbang" target="_blank">Huỳnh Ngọc Bang</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>154</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hqtri" target="_blank">Huỳnh Quốc Tr&iacute;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hqtri(at)fit.hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>155</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htnhan@hcmus.edu.vn" target="_blank">Huỳnh Thanh Nhẫn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htnhan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>156</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htklan" target="_blank">Huỳnh Thị Kim Lan</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>157</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htbtran" target="_blank">Huỳnh Thụy Bảo Tr&acirc;n</a></td>
									<td>GVC, ThS</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>htbtran(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>158</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htmhoa@hcmus.edu.vn" target="_blank">Huỳnh Trần Mỹ H&ograve;a</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htmhoa(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>159</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htphuong@hcmus.edu.vn" target="_blank">Huỳnh Tr&uacute;c Phương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>htphuong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>160</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~htanh" target="_blank">Huỳnh Tuấn Anh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>161</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hvtuan@hcmus.edu.vn" target="_blank">Huỳnh Văn Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hvtuan(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>162</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~kluvy@hcmus.edu.vn" target="_blank">Khuất L&ecirc; Uy&ecirc;n Vy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>kluvy(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>163</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ktnquynh" target="_blank">Kim Thị Như Quỳnh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>quynh.kim(at)freerangetechnology.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>164</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lthanh" target="_blank">Lại Thị Hạnh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>165</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lqvu" target="_blank">L&acirc;m Quang Vũ</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>lqvu(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>166</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lttin" target="_blank">L&acirc;m Tr&iacute; T&iacute;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>167</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvhao@hcmus.edu.vn" target="_blank">L&acirc;m Văn Hạo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lvhao(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>168</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lxnhat" target="_blank">L&acirc;m Xu&acirc;n Nhật</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>lxnhat(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>169</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lbthien" target="_blank">L&ecirc; Bảo Thiện</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>170</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lecongman@gmail.com" target="_blank">L&ecirc; C&ocirc;ng Mẫn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lecongman(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>171</td>
									<td><a href="http://satoh-lab.ex.nii.ac.jp/users/ledduy" target="_blank">L&ecirc; Đ&igrave;nh Duy</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>ledduy(at)nii.ac.jp</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>172</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldlong" target="_blank">L&ecirc; Đ&igrave;nh Long</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>173</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldnhan" target="_blank">L&ecirc; Đ&igrave;nh Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>174</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldthang" target="_blank">L&ecirc; Đ&igrave;nh Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>175</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lddnhan" target="_blank">L&ecirc; Đức Duy Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>176</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldphuc@hcmus.edu.vn" target="_blank">L&ecirc; Đức Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ldphuc(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>177</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldquang" target="_blank">L&ecirc; Đức Quang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>178</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ldtai" target="_blank">L&ecirc; Đức T&agrave;i</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>ldtai(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>179</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lgthanh" target="_blank">L&ecirc; Giang Thanh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>lgthanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>180</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhminh" target="_blank">L&ecirc; H&agrave; Minh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>181</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhbac" target="_blank">L&ecirc; Ho&agrave;i Bắc</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>lhbac(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>182</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhtam" target="_blank">L&ecirc; Ho&agrave;i T&acirc;m</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lhtam(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>183</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhthai" target="_blank">L&ecirc; Ho&agrave;ng Th&aacute;i</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>184</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhvtuan" target="_blank">L&ecirc; Ho&agrave;ng Việt Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>185</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhtuan@hcmus.edu.vn" target="_blank">L&ecirc; Hữu Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lhtuan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>186</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lknan" target="_blank">L&ecirc; Khắc Nhi&ecirc;n &Acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>187</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lkyen" target="_blank">L&ecirc; Kim Yến</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>188</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lmtung" target="_blank">L&ecirc; Mai T&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>lmtung(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>189</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lmquang" target="_blank">L&ecirc; Minh Quang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>190</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lmquoc" target="_blank">L&ecirc; Minh Quốc</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>191</td>
									<td><a href="http://www.fit.hcmus.edu.vn/vn/www.fit.hcmus.edu.vn/~lntvi" target="_blank">L&ecirc; Ng&ocirc; Thục Vi</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>CNPM, VPK</td>
									<td>lntvi(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>192</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lnson" target="_blank">L&ecirc; Ngọc Sơn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>193</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lnthanh" target="_blank">L&ecirc; Ngọc Th&agrave;nh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>lnthanh(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>194</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lnhtien@hcmus.edu.vn" target="_blank">L&ecirc; Nguyễn Hoa Ti&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lnhtien(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>195</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lnhnam" target="_blank">L&ecirc; Nguyễn Ho&agrave;i Nam</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>lnhnam(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>196</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lntvu" target="_blank">L&ecirc; Nguyễn Tường Vũ</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>197</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lphong" target="_blank">L&ecirc; Phong</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>198</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lqhoa" target="_blank">L&ecirc; Quốc H&ograve;a</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>lqhoa(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>199</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lqhung" target="_blank">L&ecirc; Quốc Hưng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>200</td>
									<td><a href="http://sites.google.com/site/lttamvn/" target="_blank">L&ecirc; Thanh T&acirc;m</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>lttam(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>201</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lttung" target="_blank">L&ecirc; Thanh T&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>202</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltathao" target="_blank">L&ecirc; Thị Anh Thảo</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>203</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltbmai" target="_blank">L&ecirc; Thị Bạch Mai</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ltbmai(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>204</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lthngan" target="_blank">L&ecirc; Thị Ho&agrave;ng Ng&acirc;n</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>lthngan(at)gmail.com</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>205</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lthdao" target="_blank">L&ecirc; Thị Hồng Đ&agrave;o</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hongdao.lethi181091(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>206</td>
									<td><a href="http://www.fit.hcmus.edu.vn/vn/www.fit.hcmuns.edu.vn/~ltnhan" target="_blank">L&ecirc; Thị Nh&agrave;n</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>ltnhan(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>207</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lttminh" target="_blank">L&ecirc; Thị Thanh Minh</a></td>
									<td>TG</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>208</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltdat" target="_blank">L&ecirc; Thiện Đạt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>209</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltanh" target="_blank">L&ecirc; Thụy Anh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>ltanh(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>210</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltngoc" target="_blank">L&ecirc; Th&uacute;y Ngọc</a></td>
									<td>GV</td>
									<td>Nữ</td>
									<td>THCS</td>
									<td>ltngoc(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>211</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltdphuc@hcmus.edu.vn" target="_blank">L&ecirc; Trần Duy Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ltdphuc(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>212</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltranh" target="_blank">L&ecirc; Tr&iacute; Anh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>ltranh(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>213</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltduc" target="_blank">L&ecirc; Trọng Đức</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>ltduc(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>214</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~letuthanh@hcmus.edu.vn" target="_blank">L&ecirc; Tự Th&agrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>letuthanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>215</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltthu" target="_blank">L&ecirc; Tuấn Thu</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>thuletuan(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>216</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltung" target="_blank">L&ecirc; T&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>217</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvlai" target="_blank">L&ecirc; Văn Lai</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>218</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvluyen" target="_blank">L&ecirc; Văn Luyện</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lvluyen(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>219</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvhai@hcmus.edu.vn" target="_blank">L&ecirc; Viết Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lvhai(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>220</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvhung" target="_blank">L&ecirc; Việt Hưng</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>hungviet13(at)yahoo.com</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>221</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvlong" target="_blank">L&ecirc; Viết Long</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>lvlong(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>222</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvtuan" target="_blank">L&ecirc; Viết Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>223</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvcuong" target="_blank">L&ecirc; Vĩnh Cương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>224</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvmthu" target="_blank">L&ecirc; V&otilde; Minh Thư</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>225</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lxdinh" target="_blank">L&ecirc; Xu&acirc;n Định</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>lxdinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>226</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lxvinh@hcmus.edu.vn" target="_blank">L&ecirc; Xu&acirc;n Vĩnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lxvinh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>227</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lbvinh" target="_blank">Lu Boun Vinh</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>228</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lavinh" target="_blank">Lương An Vinh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>anvinhluong(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>229</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhco" target="_blank">Lương H&aacute;n Cơ</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>230</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltaduc" target="_blank">Lương Thanh Anh Đức</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>231</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ltmngan@hcmus.edu.vn" target="_blank">Lương Thị Mỹ Ng&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ltmngan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>232</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvminh" target="_blank">Lương Vĩ Minh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>lvminh(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>233</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lvthang" target="_blank">Lương Việt Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>234</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lhcpha" target="_blank">Lưu Huỳnh Ch&acirc;u Pha</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>lhcpha(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>235</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lkhoa" target="_blank">Lưu Khoa</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>lkhoa(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>236</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lttnhan@hcmus.edu.vn" target="_blank">Lưu Thị Thanh Nh&agrave;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>lttnhan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>237</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~lqngoc" target="_blank">L&yacute; Quốc Ngọc</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>KHMT, TGMT</td>
									<td>lqngoc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>238</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mtkhoa" target="_blank">Mạc Tư Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>239</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mtktrinh" target="_blank">Mạch Thị Kh&aacute;nh Trinh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>240</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~matuan" target="_blank">Mai Anh Tuấn</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>matuan(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>241</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mhthanh" target="_blank">Mai Hải Thanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>242</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mhbien" target="_blank">Mai Ho&agrave;ng Bi&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>mhbien(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>243</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mvcuong" target="_blank">Mai Văn Cường</a></td>
									<td>GVC, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>mvcuong(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>244</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mvpvu" target="_blank">Mai V&acirc;n Phương Vũ</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>245</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mxphu" target="_blank">Mai Xu&acirc;n Ph&uacute;</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>mxphu(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>246</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~mttrung" target="_blank">Mang Th&agrave;nh Trung</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>247</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~NKabachi" target="_blank">Nadia Kabachi</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>248</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqminh" target="_blank">Nghi&ecirc;m Quốc Minh</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>nqminh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>249</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nbphuc" target="_blank">Ng&ocirc; B&aacute; Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>250</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nbnphuong" target="_blank">Ng&ocirc; B&aacute; Nam Phương</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nbnphuong(at)fit.hcmus.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>251</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ncduc" target="_blank">Ng&ocirc; Ch&aacute;nh Đức</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>252</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndnghiep@hcmus.edu.vn" target="_blank">Ng&ocirc; Đại Nghiệp</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ndnghiep(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>253</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndthanh" target="_blank">Ng&ocirc; Đức Th&agrave;nh</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>ndthanh(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>254</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhbien" target="_blank">Ng&ocirc; Huy Bi&ecirc;n</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nhbien(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>255</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmnhut/" target="_blank">Ng&ocirc; Minh Nhựt</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>nmnhut(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>256</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmthien@hcmus.edu.vn" target="_blank">Ng&ocirc; Minh Thiện</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nmthien(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>257</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nndkhoa" target="_blank">Ng&ocirc; Ngọc Đăng Khoa</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nndkhoa(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>258</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntpuyen@hcmus.edu.vn" target="_blank">Ng&ocirc; Thị Phương Uy&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntpuyen(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>259</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntthuan@hcmus.edu.vn" target="_blank">Ng&ocirc; Thị Thuận</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntthuan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>260</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttquy@hcmus.edu.vn" target="_blank">Ng&ocirc; Trần Thiện Qu&yacute;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nttquy(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>261</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nadan" target="_blank">Nguyễn An D&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>262</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nate" target="_blank">Nguyễn An Tế</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nate(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>263</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nathi" target="_blank">Nguyễn Anh Thi</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>nathi(at)hcmus.edu.vn, thinguyen16(at)gmail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>264</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~natuan" target="_blank">Nguyễn Anh Tuấn</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>natuan(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>265</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ncdat" target="_blank">Nguyễn Cao Đạt</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>266</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ncthai" target="_blank">Nguyễn Cao Trường Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>ncthai(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>267</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ncnhan@hcmus.edu.vn" target="_blank">Nguyễn Ch&iacute; Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ncnhan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>268</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nctrung" target="_blank">Nguyễn Ch&iacute; Trung</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>269</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ncthanh@hcmus.edu.vn" target="_blank">Nguyễn C&ocirc;ng Th&agrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ncthanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>270</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndtu" target="_blank">Nguyễn Đăng Tứ</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>ndtu(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>271</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndty" target="_blank">Nguyễn Đăng Tỵ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>272</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndqbao@hcmus.edu.vn" target="_blank">Nguyễn Điền Quốc Bảo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ndqbao(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>273</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndavinh" target="_blank">Nguyễn Đ&igrave;nh An Vĩnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>274</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndkhuong" target="_blank">Nguyễn Đ&igrave;nh Khương</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>KT</td>
									<td>ndkhuong(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>275</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndphu" target="_blank">Nguyễn Đ&igrave;nh Phư</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>276</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndthuc" target="_blank">Nguyễn Đ&igrave;nh Th&uacute;c</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>ndthuc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>277</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndha" target="_blank">Nguyễn Đ&ocirc;ng H&agrave;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>278</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndhai" target="_blank">Nguyễn Đức Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>279</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndhoang@hcmus.edu.vn" target="_blank">Nguyễn Đức Ho&agrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ndhoang(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>280</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndhoang" target="_blank">Nguyễn Đức Ho&agrave;ng</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>281</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndhha" target="_blank">Nguyễn Đức Ho&agrave;ng Hạ</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>282</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndhuy" target="_blank">Nguyễn Đức Huy</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>ndhuy(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>283</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndtai" target="_blank">Nguyễn Đức T&agrave;i</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>284</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndthan" target="_blank">Nguyễn Đức Th&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>285</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ndloc" target="_blank">Nguyễn Duy Lộc</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>KT, THCS</td>
									<td>ndloc(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>286</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhduong" target="_blank">Nguyễn Hải Dương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>287</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhminh" target="_blank">Nguyễn Hải Minh</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>nhminh(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>288</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhquan" target="_blank">Nguyễn Hải Qu&acirc;n</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>289</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhthien" target="_blank">Nguyễn Hải Thiện</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>nhthien(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>290</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhluong" target="_blank">Nguyễn Hiền Lương</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhluong(at)math.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>291</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhmduy" target="_blank">Nguyễn Hồ Minh Duy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>292</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhnam" target="_blank">Nguyễn Ho&agrave;i Nam</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>293</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhoan" target="_blank">Nguyễn Ho&agrave;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>294</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhanh" target="_blank">Nguyễn Ho&agrave;ng Anh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nhanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>295</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhchuong" target="_blank">Nguyễn Ho&agrave;ng Chương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>nhchuong(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>296</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhdung" target="_blank">Nguyễn Ho&agrave;ng Dũng</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>nhdung(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>297</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhkhai" target="_blank">Nguyễn Ho&agrave;ng Khai</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhkhai(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>298</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhkhoi" target="_blank">Nguyễn Ho&agrave;ng Kh&ocirc;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>nhkhoi(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>299</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhlong" target="_blank">Nguyễn Ho&agrave;ng Long</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>long.nguyen2731(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>300</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhphong@hcmus.edu.vn" target="_blank">Nguyễn Ho&agrave;ng Phong</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhphong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>301</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhtanh" target="_blank">Nguyễn Ho&agrave;ng T&uacute; Anh</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>nhtanh(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>302</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhhuy" target="_blank">Nguyễn Hồng Huy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>303</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhnghi" target="_blank">Nguyễn Huệ Nghi</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>304</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhke@hcmus.edu.vn" target="_blank">Nguyễn Hữu Kế</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhke(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>305</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhloi" target="_blank">Nguyễn Hữu Lợi</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>306</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhtnhat" target="_blank">Nguyễn Hữu Tr&iacute; Nhật</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhtnhat(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>307</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhkhanh" target="_blank">Nguyễn Huy Kh&aacute;nh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nhkhanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>308</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nhtanh@hcmus.edu.vn" target="_blank">Nguyễn Huỳnh Tuấn Anh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nhtanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>309</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nkhuy" target="_blank">Nguyễn Khắc Huy</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nkhuy(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>310</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nkhanh" target="_blank">Nguyễn Kh&aacute;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>311</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nkdung" target="_blank">Nguyễn Kim Dung</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>nkdung(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>312</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nkphung" target="_blank">Nguyễn Kỳ Ph&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>313</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nlvu" target="_blank">Nguyễn L&acirc;m Vũ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>314</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nlhdung" target="_blank">Nguyễn L&ecirc; Ho&agrave;ng Dũng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nlhdung(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>315</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nlhuy" target="_blank">Nguyễn L&ecirc; Huy</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>KT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>316</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nlnngu" target="_blank">Nguyễn L&ecirc; Nguy&ecirc;n Ngữ</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>317</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nltngan" target="_blank">Nguyễn Lưu Th&ugrave;y Ng&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>318</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ngmtuan" target="_blank">Nguyễn Mạnh Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>319</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmhung" target="_blank">Nguyễn Mạnh H&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ituni(at)live.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>320</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmautuan" target="_blank">Nguyễn Mậu Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>321</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmhuy" target="_blank">Nguyễn Minh Huy</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nmhuy(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>322</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmnam" target="_blank">Nguyễn Minh Nam</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>323</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmtrang" target="_blank">Nguyễn Minh Trang</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>324</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmtri" target="_blank">Nguyễn Minh Tr&iacute;</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>325</td>
									<td><a href="http://xn--nmtun-b21b.vn/" target="_blank">Nguyễn Minh Tuấn</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>nmtuan(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>326</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nntung" target="_blank">Nguyễn Ngọc T&ugrave;ng</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>327</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnavu" target="_blank">Nguyễn Ngọc Anh Vũ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>328</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnghy" target="_blank">Nguyễn Ngọc Gia Hy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>329</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnlong" target="_blank">Nguyễn Ngọc Long</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nnlong02(at)gmail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>330</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnmanh" target="_blank">Nguyễn Ngọc Mạnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>331</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnqanh" target="_blank">Nguyễn Ngọc Quỳnh Anh</a></td>
									<td>TG</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>332</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnthao" target="_blank">Nguyễn Ngọc Thảo</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>nnthao(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>333</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnthu" target="_blank">Nguyễn Ngọc Thu</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>334</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nntuyen@hcmus.edu.vn" target="_blank">Nguyễn Ngọc Tuyến</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nntuyen(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>335</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nnhuan" target="_blank">Nguyễn Như Hu&acirc;n</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>336</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nppnam" target="_blank">Nguyễn Phạm Phương Nam</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nppnam(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>337</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~npanh" target="_blank">Nguyễn Phan Anh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>338</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~npvu" target="_blank">Nguyễn Phi Vũ</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>339</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nphai" target="_blank">Nguyễn Phước Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>340</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nploc" target="_blank">Nguyễn Phước Lộc</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>341</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nptdat" target="_blank">Nguyễn Phước Tất Đạt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>342</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~npthao" target="_blank">Nguyễn Phương Thảo</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>343</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqanh" target="_blank">Nguyễn Quang Anh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>344</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nquangminh" target="_blank">Nguyễn Quang Minh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>345</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqbao" target="_blank">Nguyễn Quốc Bảo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>346</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqbinh" target="_blank">Nguyễn Quốc B&igrave;nh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>nqbinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>347</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqhung@hcmus.edu.vn" target="_blank">Nguyễn Quốc H&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nqhung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>348</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqlan" target="_blank">Nguyễn Quốc L&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>349</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nqthanh" target="_blank">Nguyễn Quốc Thanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>350</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nquyminh" target="_blank">Nguyễn Qu&yacute; Minh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>351</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nshquoc" target="_blank">Nguyễn Sơn Ho&agrave;ng Quốc</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nshquoc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>352</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntcam" target="_blank">Nguyễn Tấn Cầm</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>353</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntdat" target="_blank">Nguyễn Tấn Đạt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>354</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nmkhang" target="_blank">Nguyễn Tấn Trần Minh Khang</a></td>
									<td>GVC, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>355</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthung" target="_blank">Nguyễn Tăng Hưng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>356</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntvinh" target="_blank">Nguyễn Tất Vinh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>357</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntnuyen@hcmus.edu.vn" target="_blank">Nguyễn Th&aacute;i Ngọc Uy&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ntnuyen(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>358</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntchuyen" target="_blank">Nguyễn Thanh Chuy&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>359</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntan" target="_blank">Nguyễn Th&agrave;nh An</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntan0221(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>360</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthan" target="_blank">Nguyễn Th&agrave;nh An (T1807)</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>361</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthai" target="_blank">Nguyễn Thanh Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>362</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntlam@hcmus.edu.vn" target="_blank">Nguyễn Thanh L&acirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntlam(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>363</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntlong" target="_blank">Nguyễn Th&agrave;nh Long</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>364</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntphong" target="_blank">Nguyễn Thanh Phong</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>365</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntphuong" target="_blank">Nguyễn Thanh Phương</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>ntphuong(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>366</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntquan" target="_blank">Nguyễn Thanh Qu&acirc;n</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>367</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthson" target="_blank">Nguyễn Thanh Sơn</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>NONE</td>
									<td>ntson(at)ptnk.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>368</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttrung" target="_blank">Nguyễn Th&agrave;nh Trung</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>nttrung(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>369</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttu" target="_blank">Nguyễn Thanh T&uacute;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nttu(at)fetel.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>370</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ngtnguyen@hcmus.edu.vn" target="_blank">Nguyễn Thảo Nguy&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ngtnguyen(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>371</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntbich" target="_blank">Nguyễn Thị B&iacute;ch</a></td>
									<td>GVC, ThS</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>ntbich(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>372</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntdtien" target="_blank">Nguyễn Thị Diễm Ti&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>373</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthoan" target="_blank">Nguyễn Thị Ho&agrave;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>374</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthhanh@hcmus.edu.vn" target="_blank">Nguyễn Thị Hồng Hạnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nthhanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>375</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthnhung" target="_blank">Nguyễn Thị Hồng Nhung</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>nthnhung(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>376</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nththu" target="_blank">Nguyễn Thị Hồng Thư</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>377</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nththuong@hcmus.edu.vn" target="_blank">Nguyễn Thị Hồng Thương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nththuong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>378</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthnga@hcmus.edu.vn" target="_blank">Nguyễn Thị Huyền Nga</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nthnga(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>379</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthlien" target="_blank">Nguyễn Thị Huỳnh Li&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>380</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthtram" target="_blank">Nguyễn Thị Huỳnh Tr&acirc;m</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>381</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkai" target="_blank">Nguyễn Thị Ki&ecirc;m &Aacute;i</a></td>
									<td>TG</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>382</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkanh@hcmus.edu.vn" target="_blank">Nguyễn Thị Kim Anh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntkanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>383</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkhan" target="_blank">Nguyễn Thị Kim H&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>384</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkngan" target="_blank">Nguyễn Thị Kim Ng&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ntkngan(at)selab.hcmuns.edu.n</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>385</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntlthu" target="_blank">Nguyễn Thị Lệ Thu</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>386</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntllinh@hcmus.edu.vn" target="_blank">Nguyễn Thị Lệ Linh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntllinh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>387</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntmphuc" target="_blank">Nguyễn Thị Minh Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ntmphuc(at)fit.hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>388</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntmtuyen" target="_blank">Nguyễn Thị Minh Tuyền</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>389</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntmngoc" target="_blank">Nguyễn Thị Mộng Ngọc</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ntmngoc(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>390</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntmdung" target="_blank">Nguyễn Thị Mỹ Dung</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>391</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntnhan" target="_blank">Nguyễn Thị Ngọc H&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>392</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntntrang" target="_blank">Nguyễn Thị Nguyệt Trang</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ntntrang(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>393</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntnanh" target="_blank">Nguyễn Thị Như Anh</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>ntnanh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>394</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntphoa" target="_blank">Nguyễn Thị Phương Hoa</a></td>
									<td>CV, ThS</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>nphoa(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>395</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntpthanh" target="_blank">Nguyễn Thị Phương Thanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>396</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntthuyen" target="_blank">Nguyễn Thị Thanh Huyền</a></td>
									<td>NCV</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>ntthuyen(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>397</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttly" target="_blank">Nguyễn Thị Thảo Ly</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>398</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntthien" target="_blank">Nguyễn Thi Thu Hiền</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>399</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntttrang" target="_blank">Nguyễn Thị Th&ugrave;y Trang</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>400</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttquynh" target="_blank">Nguyễn Thị T&uacute; Quỳnh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>401</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttrieu" target="_blank">Nguyễn Thiện Triều</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>402</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthuong" target="_blank">Nguyễn Thu Hương</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>403</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ngtdung@hcmus.edu.vn" target="_blank">Nguyễn Th&ugrave;y Dung</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ngtdung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>404</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntlinh" target="_blank">Nguyễn Th&ugrave;y Linh</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>405</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthuy" target="_blank">Nguyễn Tiến Huy</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>406</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntienhuy" target="_blank">Nguyễn Tiến Huy (B)</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>407</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntthanh@hcmus.edu.vn" target="_blank">Nguyễn Tiến Th&agrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntthanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>408</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntienviet" target="_blank">Nguyễn Tiến Việt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>409</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntvu" target="_blank">Nguyễn Tiến Vũ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>410</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntmthu" target="_blank">Nguyễn Trần Minh Thư</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>ntmthu(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>411</td>
									<td><a href="http://www.fit.hcmus.edu.vn/vn/DesktopModules/Efac-DanhSachGiaoVien/www.google.com" target="_blank">Nguyễn Trần Trung</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>ntrtrung(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>412</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntrnhan@hcmus.edu.vn" target="_blank">Nguyễn Tr&iacute; Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntrnhan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>413</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttuan" target="_blank">Nguyễn Tri Tuấn</a></td>
									<td>GVC, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>nttuan(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>414</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nttai" target="_blank">Nguyễn Trọng T&agrave;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>415</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntviet" target="_blank">Nguyễn Trọng Việt</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>ntviet(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>416</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nth%e1%ba%adu" target="_blank">Nguyễn Trung Hậu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>417</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nthieu" target="_blank">Nguyễn Trung Hiếu</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>nthieu(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>418</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkien" target="_blank">Nguyễn Trung Ki&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>419</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntran" target="_blank">Nguyễn Trường An</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>420</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntson" target="_blank">Nguyễn Trường Sơn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>ntson(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>421</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntnam" target="_blank">Nguyễn Tuấn Nam</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>422</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntkhang" target="_blank">Nguyễn Tuấn Khang</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntkhang(at)selab.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>423</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvbang" target="_blank">Nguyễn Văn Bảng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>424</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvgiang" target="_blank">Nguyễn Văn Giang</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>nvgiang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>425</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvkhiet" target="_blank">Nguyễn Văn Khiết</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>426</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvlinh" target="_blank">Nguyễn Văn Lĩnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>427</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvtam" target="_blank">Nguyễn Văn T&acirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nvtam(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>428</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvthin" target="_blank">Nguyễn Văn Th&igrave;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nvthin(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>429</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvthuan@hcmus.edu.vn" target="_blank">Nguyễn Văn Thuận</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nvthuan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>430</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvvu" target="_blank">Nguyễn Văn Vũ</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>431</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nviem" target="_blank">Nguyễn Vi&ecirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>432</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvhoang" target="_blank">Nguyễn Viết Ho&agrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>433</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvthanh" target="_blank">Nguyễn Việt Th&agrave;nh</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>434</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvtiep" target="_blank">Nguyễn Vinh Tiệp</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>nvtiep(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>435</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvtung@hcmus.edu.vn" target="_blank">Nguyễn Vĩnh T&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nvtung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>436</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvu" target="_blank">Nguyễn Vũ</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>437</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvtngan@hcmus.edu.vn" target="_blank">Nguyễn Vương Th&ugrave;y Ng&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>nvtngan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>438</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nxkhanh" target="_blank">Nguyễn Xu&acirc;n Kh&aacute;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>439</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntcau" target="_blank">Ninh Thanh Cầu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>440</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~nvluan" target="_blank">Ninh Vũ Lu&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>441</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntqanh@hcmus.edu.vn" target="_blank">N&ocirc;ng Thị Quỳnh Anh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ntqanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>442</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~paphuong" target="_blank">Phạm Anh Phương</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>paphuong(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>443</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pdvnquang" target="_blank">Phạm Đ&agrave;o V&otilde; Nhật Quang</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>pdvnquang(at)selab.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>444</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pdphuong" target="_blank">Phạm Duy Phương</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>pdphuong(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>445</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~phphuong@hcmus.edu.vn" target="_blank">Phạm Ho&agrave;i Phương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>phphuong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>446</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~phvu" target="_blank">Phạm Ho&agrave;i Vũ</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>phvu(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>447</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~phhai" target="_blank">Phạm Ho&agrave;ng Hải</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>phhai(at)ymail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>448</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~phamkngoc@hcmus.edu.vn" target="_blank">Phạm Kim Ngọc</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>phamkngoc(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>449</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pmhoang" target="_blank">Phạm Minh Ho&agrave;ng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>450</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pmnhat" target="_blank">Phạm Minh Nhật</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>451</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pmtu" target="_blank">Phạm Minh T&uacute;</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>pmtu(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>452</td>
									<td><a href="http://www.fit.hcmus.edu.vn/vn/www.fit.hcmuns.edu.vn/~pmtuan" target="_blank">Phạm Minh Tuấn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>pmtuan(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>453</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pntrung" target="_blank">Phạm Nam Trung</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>454</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnahuy" target="_blank">Phạm Nguyễn Anh Huy</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>455</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pncuong" target="_blank">Phạm Nguyễn Cương</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>pncuong(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>456</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnmanh" target="_blank">Phạm Nguy&ecirc;n Mạnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>457</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnstung" target="_blank">Phạm Nguyễn Sơn T&ugrave;ng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>pnstung(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>458</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnthao" target="_blank">Phạm Nguy&ecirc;n Thảo</a></td>
									<td>GV</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>pnthao(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>459</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnanh" target="_blank">Phạm Nguyệt &Aacute;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>460</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pttrinh" target="_blank">Phạm Phạm Tuyết Trinh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>461</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pqnghia" target="_blank">Phạm Quang Nghĩa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>pqnghia21694(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>462</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pqmy" target="_blank">Phạm Quốc Mỹ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>463</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pttung" target="_blank">Phạm Thanh T&ugrave;ng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>pttung(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>464</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~PTNhan" target="_blank">Phạm Thế Nh&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>phamthenhan1988(at)yahoo.com,ptnhan(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>465</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptbhue" target="_blank">Phạm Thị Bạch Huệ</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>466</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pttthoa" target="_blank">Phạm Thị Thanh Thoa</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>467</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptnghia" target="_blank">Phạm Trọng Nghĩa</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>468</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptsan" target="_blank">Phạm T&uacute; San</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>469</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptson" target="_blank">Phạm Tuấn Sơn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>ptson(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>470</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pvviet@hcmus.edu.vn" target="_blank">Phạm Văn Việt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>pvviet(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>471</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pxquang" target="_blank">Phạm Xu&acirc;n Quang</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>472</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pbthang@inomar.edu.vn" target="_blank">Phan B&aacute;ch Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>pbthang(at)inomar.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>473</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pdlong" target="_blank">Phan Đ&igrave;nh Long</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>474</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pdhung" target="_blank">Phan Duy H&ugrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>pdhung(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>475</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~phkhiem@hcmus.edu.vn" target="_blank">Phan Hồng Khi&ecirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>phkhiem(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>476</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~plsang" target="_blank">Phan L&ecirc; Sang</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>plsang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>477</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~PNHai" target="_blank">Phan Nguyễn Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>478</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pnminh" target="_blank">Phan Nguyệt Minh</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>479</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ppdoan" target="_blank">Phan Ph&uacute;c Do&atilde;n</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>480</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pttrung" target="_blank">Phan Th&agrave;nh Trung</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>phanthanhtrung86(at)yahoo.com</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>481</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pttuan" target="_blank">Phan Thanh Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>482</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptbha" target="_blank">Phan Thị B&iacute;ch H&agrave;</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>483</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ntbngoc" target="_blank">Phan Thị B&iacute;ch Ngọc</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>484</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ptvinh@hcmus.edu.vn" target="_blank">Phan Trung Vĩnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ptvinh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>485</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pvkong" target="_blank">Phan Văn K&ocirc;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>486</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pxhuy" target="_blank">Phan Xu&acirc;n Huy</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>487</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~pndkhoa" target="_blank">Ph&oacute; Ngọc Đăng Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>488</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~naida" target="_blank">Prof. Naida</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>489</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~qdthu" target="_blank">Qu&aacute;ch Đ&igrave;nh Thứ</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>490</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~qkgia" target="_blank">Qu&aacute;ch Khả Gia</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>491</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~qmthao" target="_blank">Qu&aacute;ch Minh Thảo</a></td>
									<td>TG</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>qmthao(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>492</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~rchapuis" target="_blank">Roger Chapuis</a></td>
									<td>GS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>493</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~Saida" target="_blank">Saida Bouakaz</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>494</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttkhanh@hcmus.edu.vn" target="_blank">Tạ Thị Kiều Hạnh</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>ttkhanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>495</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thduong" target="_blank">Th&aacute;i Hải Dương</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>496</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thphat" target="_blank">Th&aacute;i Hồng Ph&aacute;t</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>497</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thvan" target="_blank">Th&aacute;i H&ugrave;ng Văn</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>498</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tlvinh" target="_blank">Th&aacute;i L&ecirc; Vinh</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>tlvinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>499</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnam" target="_blank">Thoại Nam</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>500</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tghong" target="_blank">Tiết Gia Hồng</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>tghong(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>501</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tthao" target="_blank">Ti&ecirc;u Tuấn H&agrave;o</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>502</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tblam" target="_blank">T&ocirc; B&aacute; L&acirc;m</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>503</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thviet" target="_blank">T&ocirc; Ho&agrave;i Việt</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>thviet(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>504</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tohien@hcmus.edu.vn" target="_blank">T&ocirc; Thị Hiền</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tohien(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>505</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnhtram" target="_blank">Tống Nguyễn Quỳnh Tr&acirc;m</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>506</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tndang" target="_blank">Trắc Ngọc Đăng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tndang(at)selab.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>507</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tthai" target="_blank">Trần Thanh Hải</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>tthai(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>508</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tatuan" target="_blank">Trần Anh Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>509</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tatuanb" target="_blank">Trần Anh Tuấn (B)</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>510</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tcde" target="_blank">Trần Cao Đệ</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>511</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdthu" target="_blank">Trần Đan Thư</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNPM, VPK</td>
									<td>tdthu(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>512</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdkhoa@hcmus.edu.vn" target="_blank">Trần Đăng Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tdkhoa(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>513</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdinh" target="_blank">Trần Định</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>514</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdinhhoang" target="_blank">Trần Đ&igrave;nh Ho&agrave;ng</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>luoibieng2006(at)yahoo.com</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>515</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdhung" target="_blank">Trần Đ&igrave;nh Hưng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>516</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdnghia" target="_blank">Trần Đ&igrave;nh Nghĩa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>517</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdtcuong" target="_blank">Trần Đỗ Th&agrave;nh Cường</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>518</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdbinh" target="_blank">Trần Do&atilde;n B&igrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>519</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdthanh" target="_blank">Trần Do&atilde;n Th&agrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>520</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdloc" target="_blank">Trần Đồng Lộc</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tdongloc1712(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>521</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdduan" target="_blank">Trần Đức Duẫn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>522</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdhoang" target="_blank">Trần Duy Ho&agrave;ng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tdhoang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>523</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdquang" target="_blank">Trần Duy Quang</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tdquang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>524</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tdthao" target="_blank">Trần Duy Thảo</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tdthao(at)fit.hcmuns.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>525</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thlam" target="_blank">Trần H&agrave; L&acirc;m</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>thlam(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>526</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thnhi" target="_blank">Trần Hạnh Nhi</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>527</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thdat" target="_blank">Trần Hiển Đạt</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>528</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thkhanh" target="_blank">Trần Ho&agrave;ng Khanh</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>thkhanh(at)selab.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>529</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thphuc" target="_blank">Trần Ho&agrave;ng Ph&uacute;c</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>530</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thtuan" target="_blank">Trần Ho&agrave;ng Tuấn</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>531</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thngoc" target="_blank">Trần Hồng Ngọc</a></td>
									<td>GV, TS</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>thngoc(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>532</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thtai" target="_blank">Trần Hồng T&agrave;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tranhongtaitht(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>533</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ththai" target="_blank">Trần Hồng Th&aacute;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>534</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~thquang" target="_blank">Trần Huy Quang</a></td>
									<td>CV, ThS</td>
									<td>Nam</td>
									<td>KT, THCS</td>
									<td>thquang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>535</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tklinh" target="_blank">Trần Kh&aacute;nh Linh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>536</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tlbha@hcmus.edu.vn" target="_blank">Trần L&ecirc; Bảo H&agrave;</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tlbha(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>537</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tlhdu" target="_blank">Trần L&ecirc; Hồng Dũ</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>538</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tmkhoa" target="_blank">Trần Mạnh Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>539</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tminhkhoa" target="_blank">Trần Minh Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tranminhkhoa94(at)gmail.com</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>540</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tmquang" target="_blank">Trần Minh Quang</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>541</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tmtriet/" target="_blank">Trần Minh Triết</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tmtriet(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>542</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tndung" target="_blank">Trần Nam Dũng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>543</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tntrung" target="_blank">Trần Ngọc Trung</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>tntrung(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>544</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnbao" target="_blank">Trần Ngọc Bảo</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>baotn(at)hcmup.edu.vn</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>545</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tndthanh" target="_blank">Trần Ngọc Đạt Thành</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>546</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnhieu" target="_blank">Trần Ngọc Hiệu</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>tnhieu(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>547</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnle" target="_blank">Trần Ngọc Lệ</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>tnle(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>548</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tndhan" target="_blank">Trần Nguy&ecirc;n Đại H&atilde;n</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>549</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnmchau" target="_blank">Trần Nguyễn Minh Ch&acirc;u</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>550</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tncuong" target="_blank">Trần Như Cương</a></td>
									<td>GVC, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy trường kh&aacute;c</td>
								</tr>
								<tr>
									<td>551</td>
									<td>Trần Phước T&acirc;m</td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>552</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tpqhien" target="_blank">Trần Phước Quốc Hiền</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>553</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tphoang" target="_blank">Trần Phượng Ho&agrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>554</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqnhat" target="_blank">Trần Quang Nhật</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>555</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqduc" target="_blank">Trần Quang Đức</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tqduc(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>556</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqhien" target="_blank">Trần Quang Hiển</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>THCS</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>557</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqvinh" target="_blank">Trần Quang Vinh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>558</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttson" target="_blank">Trần Th&aacute;i Sơn</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>559</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttphong" target="_blank">Trần Thanh Phong</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>560</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tthuong" target="_blank">Trần Thế Hưởng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>561</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttbhanh" target="_blank">Trần Thị B&iacute;ch Hạnh</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>CNPM</td>
									<td>ttbhanh(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>562</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tttvan@hcmus.edu.vn" target="_blank">Trần Thị Thanh V&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>tttvan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>563</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttnhi" target="_blank">Trần Thị Thảo Nhi</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>564</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tttgiang" target="_blank">Trần Thị Thu Giang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>565</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttthanh@hcmus.edu.vn" target="_blank">Trần Thiện Thanh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ttthanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>566</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttthai" target="_blank">Trần Th&ocirc;ng Th&aacute;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>567</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttdung" target="_blank">Trần Trung Dũng</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>ttdung(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>568</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttrhien" target="_blank">Trần Trung Hiến</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>569</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~hieutt@hcmus.edu.vn" target="_blank">Trần Trung Hiếu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hieutt(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>570</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttkien" target="_blank">Trần Trung Ki&ecirc;n</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>571</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttthien" target="_blank">Trần Tử Thi&ecirc;n</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>572</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttanh" target="_blank">Trần Tuấn Anh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>AnhTT01(at)yahoo.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>573</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttkiet" target="_blank">Trần Tuấn Kiệt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>574</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tvquy" target="_blank">Trần Văn Qu&yacute;</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tvquy(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>575</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tvhuan" target="_blank">Trần Viết Hu&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>576</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tvson" target="_blank">Trần Viết Sơn</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>KT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>577</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tvxphuong" target="_blank">Trần Việt Xu&acirc;n Phương</a></td>
									<td>NCV</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>tvxphuong(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>578</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~txdung@hcmus.edu.vn" target="_blank">Trần Xu&acirc;n Dũng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>txdung(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>579</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~txhai" target="_blank">Trần Xu&acirc;n Hải</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>580</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~txhung" target="_blank">Trần Xu&acirc;n H&ugrave;ng</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>581</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~txtien" target="_blank">Trần Xu&acirc;n Tiến</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>582</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttkhon" target="_blank">Triệu Tr&aacute;ng Kh&ocirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>583</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnminh" target="_blank">Trịnh Ngọc Minh</a></td>
									<td>GV, TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>584</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnhvy@hcmus.edu.vn" target="_blank">Trịnh Nguyễn H&ugrave;ng Vỹ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tnhvy(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>585</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqloc" target="_blank">Trịnh Quang Lộc</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>586</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttdeo" target="_blank">Trịnh Thanh Đ&egrave;o</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>587</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tthien" target="_blank">Trịnh Thiện Hiền</a></td>
									<td>CV</td>
									<td>Nam</td>
									<td>KT</td>
									<td>hientt(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>588</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttdkhoa" target="_blank">Trịnh Trần Đăng Khoa</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>589</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttllctqg" target="_blank">Trung T&acirc;m L&yacute; Luận ch&iacute;nh trị QG</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>590</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tccuong@hcmus.edu.vn" target="_blank">Trương Ch&iacute; Cường</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tccuong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>591</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tkminh" target="_blank">Trương Khi&ecirc;m Minh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>592</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tmhoang@hcmus.edu.vn" target="_blank">Trương Minh Ho&agrave;ng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tmhoang(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>593</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tmdung" target="_blank">Trương Mỹ Dung</a></td>
									<td>PGS, TS</td>
									<td>Nữ</td>
									<td>THCS</td>
									<td>tmdung(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>594</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tphai" target="_blank">Trương Phước Hải</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>595</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tphung" target="_blank">Trương Phước Hưng</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>tphung(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>596</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tploc" target="_blank">Trương Phước Lộc</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tploc(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>597</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tqbinh" target="_blank">Trương Quốc B&igrave;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>598</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttdat" target="_blank">Trương Tấn Đạt</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>599</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttcanh@hcmus.edu.vn" target="_blank">Trương Thanh Cảnh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ttcanh(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>600</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttctrang@hcmus.edu.vn" target="_blank">Trương Thị Cẩm Trang</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>ttctrang(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>601</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tthloan@hcmus.edu.vn" target="_blank">Trương Thị Hồng Loan</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>tthloan(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>602</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttmtrang" target="_blank">Trương Thị Mỹ Trang</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>MMTVT</td>
									<td>ttmtrang(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>603</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttdinh" target="_blank">Trương Thi&ecirc;n Đỉnh</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>ttdinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>604</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttthinh" target="_blank">Trương To&agrave;n Thịnh</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>ttthinh(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>605</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~ttnho" target="_blank">Trương Tỷ Nhỏ</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>606</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~tnhduc" target="_blank">Tuấn Nguy&ecirc;n Ho&agrave;i Đức</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>607</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vcnam" target="_blank">Văn Ch&iacute; Nam</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>vcnam(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>608</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdphong" target="_blank">Văn Đức Phương Hồng</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>609</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vgan" target="_blank">Vi&ecirc;n Gia An</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>610</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdchuyen" target="_blank">V&otilde; Đại Chuy&ecirc;n</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>611</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdbay" target="_blank">V&otilde; Đ&igrave;nh Bảy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>612</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vodphong" target="_blank">V&otilde; Đ&igrave;nh Phong</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>vdphong(at)fit.hcmus.edu.vn</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>613</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdthang" target="_blank">V&otilde; Đỗ Thắng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vodothang(at)yahoo.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>614</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdhau" target="_blank">V&otilde; Đ&ocirc;ng Hầu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>615</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdkhanh" target="_blank">V&otilde; Đức Kh&aacute;nh</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>616</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vhviet" target="_blank">V&otilde; Ho&agrave;i Việt</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>617</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vhoangquan" target="_blank">V&otilde; Ho&agrave;ng Qu&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>618</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vhphuc" target="_blank">V&otilde; Hữu Ph&uacute;c</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>619</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vkhuy" target="_blank">V&otilde; Khắc Huy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>620</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vlhphuoc@hcmus.edu.vn" target="_blank">V&otilde; Lương Hồng Phước</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vlhphuoc(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>621</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vmduc" target="_blank">V&otilde; Minh Đức</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>TGMT</td>
									<td>vmduc(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>622</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vntdoan" target="_blank">V&otilde; Nam Thục Đoan</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>vntdoan(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>623</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vntan" target="_blank">V&otilde; Ngọc T&acirc;n</a></td>
									<td>TG</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>624</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vnnlieu@hcmus.edu.vn" target="_blank">V&otilde; Nguyễn Như Liễu</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vnnlieu(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>625</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqdha" target="_blank">V&otilde; Quang Diệu H&agrave;</a></td>
									<td>ThS</td>
									<td>Nữ</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>626</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqtrong" target="_blank">V&otilde; Quang Trọng</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>627</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqbao" target="_blank">V&otilde; Quốc Bảo</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>voquocbao0603(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>628</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtvan" target="_blank">V&otilde; T&acirc;m V&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>629</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtdan" target="_blank">V&otilde; Thế D&acirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>630</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtntrinh" target="_blank">V&otilde; Thị Ngọc Trinh</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>631</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtthuy" target="_blank">V&otilde; Thị Thanh Th&uacute;y</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>vttthuy(at)hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>632</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtthuyen" target="_blank">V&otilde; Thị Th&ugrave;y Huy&ecirc;n</a></td>
									<td>CV</td>
									<td>Nữ</td>
									<td>VPK</td>
									<td>vtthuyen(at)fit.hcmuns.edu.vn</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>633</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtynhi" target="_blank">V&otilde; Thị Yến Nhi</a></td>
									<td>&nbsp;</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>634</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vvkhang" target="_blank">V&otilde; Văn Khang</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vankhang71(at)yahoo.com</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>635</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vdhcuong" target="_blank">Vũ Đỗ Huy Cường</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vdhcuong(at)hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>636</td>
									<td><a href="http://www.fit.hcmuns.edu.vn/~vgnam" target="_blank">Vũ Giang Nam</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>HTTT</td>
									<td>vgnam2404(at)gmail.com</td>
									<td>Đ&atilde; nghỉ việc</td>
								</tr>
								<tr>
									<td>637</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vhquan" target="_blank">Vũ Hải Qu&acirc;n</a></td>
									<td>PGS, TS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>638</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vmtri" target="_blank">Vũ Minh Tr&iacute;</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>MMTVT</td>
									<td>vmtri(at)fit.hcmus.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>639</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vnsen" target="_blank">Vũ Ngọc Sen</a></td>
									<td>TG</td>
									<td>Nữ</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>640</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqtuyen@hcmus.edu.vn" target="_blank">Vũ Quang Tuy&ecirc;n</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vqtuyen(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>641</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqhoang" target="_blank">Vũ Quốc Ho&agrave;ng</a></td>
									<td>ThS</td>
									<td>Nam</td>
									<td>CNTT</td>
									<td>vqhoang(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>642</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vqphong@hcmus.edu.vn" target="_blank">Vũ Quốc Phong</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vqphong(at)hcmus.edu.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>643</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vthien" target="_blank">Vũ Thanh Hiền</a></td>
									<td>TS</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>hienvt(at)hcm.vnn.vn</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>644</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vthung" target="_blank">Vũ Thanh Hưng</a></td>
									<td>GV, ThS</td>
									<td>Nam</td>
									<td>KHMT</td>
									<td>vthung(at)fit.hcmuns.edu.vn</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>645</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtnam" target="_blank">Vũ Thế Nam</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>646</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtmhang" target="_blank">Vũ Thị Mỹ Hằng</a></td>
									<td>GV, ThS</td>
									<td>Nữ</td>
									<td>HTTT</td>
									<td>&nbsp;</td>
									<td>Dạy ở trường</td>
								</tr>
								<tr>
									<td>647</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vthuy" target="_blank">Vũ Thụy</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>648</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vuthung" target="_blank">Vũ Tuấn Hưng</a></td>
									<td>GV</td>
									<td>Nam</td>
									<td>CNPM</td>
									<td>tuanhungvu(at)gmail.com</td>
									<td>Đang đi du học</td>
								</tr>
								<tr>
									<td>649</td>
									<td><a href="http://www.fit.hcmus.edu.vn/~vtnkhoi" target="_blank">Vương Trần Nguy&ecirc;n Kh&ocirc;i</a></td>
									<td>&nbsp;</td>
									<td>Nam</td>
									<td>&nbsp;</td>
									<td>vuongtrannguyenkhoi(at)gmail.com</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

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