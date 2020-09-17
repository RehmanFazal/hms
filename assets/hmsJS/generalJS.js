function deleteItem($item, event) {
	if (!confirm("Are you sure want to delete " + $item + "?"))
	{
		event.preventDefault();
		return false;
	}
}

$("#user_name").on('change', function(event) {
	//alert($(this).val());return false;
	let userName = $(this).val();
	$.ajax({
  		url  : 'check_dupilcate_user_name',
  		method: "post",
  		data: { userName : userName },
  		dataType: "text"
	}).done(function( data ) {
		if(data > 0)
		{
			event.preventDefault();
			$("#user_name").val('');
			alert("username already exists. Kindly try another one");
			return false;
		}
  	}).fail(function() {
    	alert( "error" );
  	});
});



