$(function(){

	var windowSize = $(window)[0].innerWidth;
	const aside = $('aside');
	const btnMenu = $('.btn-menu');
	const logo = $('.logo');
	const divMenu = $('.menu');
	const menuLink = $('.menu [data-id=link]');
	//const icoMenuLink = $('.menu [data-id=ico]');
	const content = $('.content');
	const styleSelectedMenu = $('.selected-profile-menu');

	var visible = true;

	if(windowSize <= 900){
		hideElements();
	}

	if(localStorage.getItem('menuStatus') == 'closed'){
		hideElements();
	}

	btnMenu.click(()=>{
		if(visible)
			hideElements();
		else
			showElements();
	})

	function hideElements(){
		btnMenu.css({
			'background':'#3949ab',
			'color':'#fff'
		});
		logo.hide();
		menuLink.hide();
		divMenu.css({
			'padding-top': '132px',
			'padding-left': '0'
		});
		
		if(windowSize <= 415){
			aside.animate({'width':'0'},1);
		}else{
			aside.animate({'width':'60px'},1);
		}

		content.animate({'width':'100%'},1);

		localStorage.setItem('menuStatus','closed');
		
		visible = false;
	}

	function showElements(){
		btnMenu.css({
			'background':'#fff',
			'color':'#04081f'
		});
		logo.show();
		menuLink.show();
		divMenu.css({
			'padding-top': '50px',
			'padding-left': '16px'
		});
		aside.animate({'width':'230px'},200);
		content.animate({'width':'calc(100% - 230px)'},200);

		localStorage.removeItem('menuStatus');
		
		visible = true;
	}

})

