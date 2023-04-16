$(document).ready(function(){
	var trigger = $('ul#side-menu li a'),
		container = $('#content');
		
	trigger.on('click', function(){
		var $this = $(this),
			target = $this.data('target');
			
			console.log(target);
			
			container.load(target + '.php');
			
			return false;
	});
	
});