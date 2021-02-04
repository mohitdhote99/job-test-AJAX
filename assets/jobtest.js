$(document).ready(function(){

	function JT_toaster(message){
		$('#success_okay').css({'display':'block'});
		$('.overlay_background').css({'transform':'scale(1)!important'});
		$('.message>h1').html(message+' successfully')
		$('.overlay_background').addClass('active');
		$('.error').html('');
		$('.color_set').html('');
	}

	$(document).on('click','.pageNo_send',function(e){
		e.preventDefault();
		var pno = $(this).data('pageno');
		$.ajax({
			method:'post',
			data:{pageNo:pno},
			url:'action/action.php',
			dataType:'json',
			success:function(response){
				console.log(response);
				$('#JT_List tbody').html(response.table);
				if (response.pagi !== false) {
					$('#JT_List ~ #paginat_margin').html(response.pagi);
				}else{
					$('#JT_List ~ #paginat_margin').html(response);
				}
			},
			error(xhr){
				console.log(xhr.responseText);
			}
		});
	});

	$('#jobTestReg').on('submit', function(e){
		e.preventDefault();
		var g_data = $('#jobTestReg').serialize();
		console.log(g_data);
		$.ajax({
			method:'post',
			dataType:'json',
			url:'action/action.php',
			data:g_data,
			success:function(response){
				console.log(response);
				if(response.error_field) {
					$.each(response.error_field,(er_k,er_val)=>
						{
						if (er_k !== '') {
							$('#jobTestReg .error.'+er_k+'').html('<p>'+er_val+'</p>');
						}
					});
				}
				if(response.success) {
					$('input').val('');
					JT_toaster('Inserted');
				}
				if(response.err_db) {
					console.log('error database');
				}
			},
			error:function(xhr){
				console.log(xhr.responseText);
			}
		});

	});


	$(document).on('click','.updateAnc',function(e){
		e.preventDefault();
		$('#JT_modal').addClass('active');
		$('#JT_modal').css({'transform':'scale(1)'});
		var upid = $(this).data('upid');
		$.ajax({
			method:'post',
			data:{update_id:upid},
			dataType:'json',
			url:'action/action.php',
			success:function(response){
				console.log(response);
				if (response !=='') {
					$.each(response,(up_k,up_val)=>{
						if (up_k !== '') {
							if(up_k !== "gender" && up_k !== "tenth" && up_k !== "twelfth"){
									$('input[name='+up_k+']').val(up_val);
								}else if(up_k == "gender" || up_k == "tenth" ||up_k == "twelfth" ){
									// console.log("check tenth->",$('input[name='+up_k+']input[value='+up_val+']'));
									$('input[name='+up_k+']input[value='+up_val+']').prop('checked',true);
									// if($('input').prop('checked')===true){}
									// $('input:checked')

								}
						}
					});
				}
			},
			error:function(xhr){
				console.log(xhr.responseText);
			}
		});	
	});

	$(document).on('click','.jtupdate',function(e){
		e.preventDefault();
		let g_data = $('#jobTestupdate').serialize();
		$.ajax({
			method:'post',
			url:'action/action.php',
			dataType:'json',
			data:g_data,
			success:function(response){
				console.log(response);
				if(response.error_field) {
					$.each(response.error_field,(er_k,er_val)=>
						{
						if (er_k !== '') {
							$('#jobTestupdate .error.'+er_k+'').html('<p>'+er_val+'</p>');
						}
					});
				}
				if(response.success) {
					$('#JT_modal').removeClass('active');
					$('#JT_modal').css({'transform':'scale(0)'});
					$('input').val('');
					JT_toaster('updated');
				}
				if(response.err_db) {
					console.log('error database');
				}
			},
			error:function(xhr){
				console.log(xhr.responseText);
			}
		});
	});

	$(document).on('click','.deleteAnc',function(){
		let id = $(this).data('delete');
		let get_tr = $(this).parent().parent().parent().parent();
		$.ajax({
			method:'post',
			data:{delid:id},
			url:'action/action.php',
			success:function(response){
				console.log(response);
				if (response) {
					get_tr.fadeOut();
				}
			},
			error(xhr){
				console.log(xhr.responseText);
			}
		});
	});



});
									// let check = true ;
									// let hello = check == "1"?"hello":check == "2"?"two time hello":"not hello";
									// console.log("hello check",hello);
									// [1,2,3].forEach(function(key,value){
									// 	console.log("key",key);
									// 	console.log("key",key);
									// });