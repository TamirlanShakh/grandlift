$(document).ready(function(){

	$('.services_block_button').click(function(){
		var t = $(this).attr('title'); 
		$(".service_hidden").val(t);
	});

	/*Модальное окно*/
	$('.header_call').click(function() {
			$('.modal').css({'display':'block'});
			$('.modal-content').animate({'top':'225px'},1500);
			
	});		
	$('.close').click(function(){
			$('.modal-content').animate({'top':'-225px'},1500);
			setTimeout(function(){
				$('.modal').css({'display':'none'});
			},1000)	
			
	});
})