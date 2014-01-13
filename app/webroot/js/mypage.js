$(function(){
	$('#editButton').click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on');
		} else {
			$(this).addClass('on');
		}
		$("#editForm").toggle();
	});
	$("#hospital_id").autocomplete({
		source: function(req, resp){
			$.ajax({
				url: "./searchHospital",
				type: "POST",
				cache: false,
				dataType: "json",
				data: {
					word: req.term
				},
				success: function(o){
					resp(o);
				},
				error: function(xhr, ts, err){
					resp(['']);
				}
			});
		}
	});
});