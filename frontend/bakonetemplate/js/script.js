$('.portfolio button').click(function (e) { 
	
	$('button.active').removeClass('active');
	$(this).addClass('active');

	const dataValue = $(this).attr('data');
	const allDivs = $(`.portfolio .row > div`); //lấy hết div
	if(dataValue == 'all'){
		allDivs.show();
		return;
	}
	const showDivs = $(`.portfolio .row > div[data=${dataValue}]`); // show những div tương ứng
	const hiddenDivs = allDivs.not(showDivs);


	showDivs.show();
	hiddenDivs.hide();
});


//cuộn chuột
$(window).scroll(function (event) { 
	//top của cửa số trình duyệt
	//console.log($(window).scrollTop());

	//Top của thẻ section có id là portfolio
	//console.log($('#portfolio').offset().top);

	if($(window).scrollTop() >= $('#portfolio').offset().top){
		$('.navbar').addClass('fixed-top');
		$('header').addClass('dummy-padding-top');
	}
	else{
		$('.navbar').removeClass('fixed-top');
		$('header').removeClass('dummy-padding-top');
	}
});