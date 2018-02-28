$(document).ready(function(){
	$('.check').change(function(){
		var input = $(this).find('input[type=checkbox]');
		// debugger;
		if (input.val() == '0') {
			input.val('1');
		}else{
			input.val('0');
		}
		$(this).closest('form').submit();
	});
	$('span.top').dblclick(function(){
		$(this).addClass('hidden');
		$(this).next().removeClass('hidden');
		// var inp = $(".hidden");
		// inp.removeClass("hidden");
		// sp.addClass("hidden");
	});
	$('.delete-task-js').click(function(e){
		e.preventDefault();
		var click = $(this)
		var task_id = $(this).prev().val();
		console.log(task_id);
		$.ajax({
			method: 'POST',
			url: 'http://todolist.com/engines/task/delete.php',
			data:{
				id: task_id
			},
			success: function(response){
				var parsed_response = JSON.parse(response);
				if (parsed_response.error){
					$('.flash-js').text(parsed_response.error);
				}else{
					$('.flash-js').text(parsed_response.success);
					click.parents('.save-task-list').remove();

				}
			}
		});
	})
})