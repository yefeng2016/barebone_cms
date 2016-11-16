var login = {
	check : function(){
	var username = $('input[name="username"]').val();
	var password = $('input[name="password"]').val();
	//	判断是否为空，若是弹出错误消息
		if(!username){
			dialog.error('请输入用户名');
		}
		if(!password){
			dialog.error('请输入密码');
		}
		//定义提交的地址，check方法
		var url = "/index.php?m=admin&c=login&a=check";
		//定义json格式的数据，注意不需要双印号
		var data = {'username':username,'password':password};
		//异步提交数据
		$.post(url,data,function(result){
			if(result.status == 0)
			{
			return dialog.error(result.message);
			}
			if(result.status == 1){
				window.location.href="/index.php?m=admin&c=index";
			}

		},'JSON');



	}
	
}