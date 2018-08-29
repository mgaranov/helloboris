$(document).ready(function(){
	$('div').delegate('.button','click',function() {
		username=$(this).parent().children('.first').children('.login').val();
		password=$(this).parent().children('.second').children('.password').val();
		show_otz(username,password)
	});
});


function show_otz(username,password) {

	$.ajax({
		type: 'POST',
		url: 'check_pass.php',
		//data: 'film_name='+$('#'+this_id).attr('film_name'),
		data: {
                        username: username,
                        password: password
            },



				success: function(html){


			$('.return').html(html);

			otzyv_json=$('.return').html();
			$('.return').html(html).html('');

			//alert(username);
			//alert(password);
			if (otzyv_json=='true'){
				alert('correct!');
				window.location = 'https://ru.wikipedia.org/wiki/Моисеев,_Борис_Михайлович';



			} else alert('bad');




		}
	});

	return false;
};