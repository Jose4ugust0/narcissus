$(function(){
	$('.btn-menu').click(function(){
		$('.menu-mobile .menuItems').slideToggle()
		$('.btn-menu i').toggleClass('fa-times');
		$('.btn-menu').toggleClass('rotate');
		
	})
})