$(document).ready(function(){
	var stt=0;
	startImg = $("img.slide:first").attr("stt");
	endImg = $("img.slide:last").attr("stt");
	$("img.slide").each(function(){
		stt = $(this).attr("stt");
	});
	//hàm xử lý nút next
	$("#next").click(function(){
		if(stt==endImg){
			stt=-1;
		}
		next = ++stt;
		$("img.slide").hide();
		$("img.slide").eq(next).show();
	});
	//hàm xử lý nút prev
	$("#prev").click(function(){
		if(stt==0){
			stt=endImg;
			prev= stt++;
		}
		prev = --stt;
		$("img.slide").hide();
		$("img.slide").eq(prev).show();
	});
	//xu ly tu dong chay time = 2s
	//su dung ham setInterval: lập lại vô hạn 1 sự kiện nào đó
	setInterval(function(){
		$("#next").click();
	},2000);
});








