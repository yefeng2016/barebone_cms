
$('#button-add').click(function(){
	var url = SCOPE.add_url;
	window.location.href = url;
}) 

$('#singcms-button-submit').click(function(){
	var url = SCOPE.save_url ;
	var data = $('#singcms-form').serialize();
	$.post(url,data,function(result){
		if(result.status == 1){
			return dialog.success(result.message,SCOPE.jump_url);
		}else{
			return dialog.error(result.message);
		}
	},"JSON")
})