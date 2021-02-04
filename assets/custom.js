$(document).ready(function(){
	
	$.ajax({
		method:'post',
		data:{pageNo:1},
		url:'action/action.php',
		dataType:'json',
		success:function(response){
			// console.log(response);
			$('.JT_thead').css({'display':'none'});
			$('#JT_List').siblings().html(response);
			if (response.table) {
				$('.JT_thead').css({'display':'table-header-group'});
				$('#JT_List tbody').html(response.table);
			}
		},
		error(xhr){
			console.log(xhr.responseText);
		}
	});


 //  //// radio button functioning
	// $('.my_radio.gender').click(function(){
	// 	$('.my_radio.gender').removeClass('active');
	// 	$(this).addClass('active');
	// });
	// $('.my_radio.tenTH').click(function(){
	// 	$('.my_radio.tenTH').removeClass('active');
	// 	$(this).addClass('active');
	// });	
	// $('.my_radio.tweTH').click(function(){
	// 	$('.my_radio.tweTH').removeClass('active');
	// 	$(this).addClass('active');
	// });
// reset input
	$('.RESet_').click(function(e){
		e.preventDefault();
		let input = $('input');
		$('#for_reset input').val(''); 
	});
	$('#success_okay').click(function(){
		$(this).css({'display':'none'});
		$('.overlay_background').removeClass('active');
		location.reload();
	});
// selection of color
	$('#color_check').click(function(){
		text = 'This is your fav color ! great choice';
		var color_val= $('input[type="color"]').val();
		$('.color_set').css({'color':color_val});
		$('.color_set').html(text);
	});

// password  type
	$('.pass_icon').click(function(){
		var input_type = $(this).parent().children().attr('type');
		if (input_type == 'password') {
			$(this).parent().children('input[name="password"]').attr('type','text');
		}
		if(input_type == 'text'){
			$(this).parent().children('input[name="password"]').attr('type','password');
		}
	});


});









$(document).ready(function(){
	$('input[type="submit"]').on('click',function(e){
		e.preventDefault();
	});
});