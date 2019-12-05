	fetch_custumer_data();

	function fetch_custumer_data(query = '') {
		$.ajax({
			url:'/datos/show',
			method:'GET',
			data:{query:query},
			dataType:'json',
			success:function(data)
			{
				$('tbody').html(data.table_data);
				$('#total_articulos').text(data.total_data);
			}
		})
	}
	$(document).on('keyup', '#search', function(){
		var query = $(this).val();
		fetch_custumer_data(query);
	});

