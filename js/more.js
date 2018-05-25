$(document).ready(function(){
    $('p.newslong').hide();
	
	
	$('.news .newsshort').click(function (){
		$(this).hide();
		$(this).next().show();
	});
	
	$('.news .newslong').click(function (){
		$(this).hide();
		$(this).prev().show();
	});
    
});
	