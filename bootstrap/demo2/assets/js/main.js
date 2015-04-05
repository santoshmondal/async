$(function(){

	$('#slide-submenu').on('click',function() {			        
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.mini-submenu').fadeIn();	
        });
        
      });

	$('.mini-submenu').on('click',function(){		
        $(this).next('.list-group').toggle('slide');
        $('.mini-submenu').hide();
	})
})


// document -- once page load
$(function(){
	$("#btn-create-user").click(function(){
		console.log("Create user log...");		
		var formdata = $("#frm-create-user").serialize();
		console.log(formdata);
	});
});
