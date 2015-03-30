/**
 *	后台登陆页面
 */
 $(function(){
 	for(var i=0;i<$('.admin_login_font_default input').length;i++){
 		if($('.admin_login_font_default input:eq('+i+')').val()=='')
 			$('.admin_login_font_default span:eq('+i+')').show();
 	}
 	
 	$('#admin_login_frame input').focus(function(){
 			$(this).next().hide();
 	})
 	$('#admin_login_frame input').blur(function(){
 		if($(this).val()==''){
	 		if($(this).attr('type')=='text')
	 			$(this).next().show();
	 		else if($(this).attr('type')=='password')
	 			$(this).next().show();
 		}
 	})

 	//记住密码部分
 	$('#admin_login_rem_pwd').click(function(){
 		if($('#rem_pwd').val()=="0"){
 			$(this).find('.input_bg').css('backgroundPosition','-28px 0');
 			$('#rem_pwd').val('1')
 		}else if($('#rem_pwd').val()=="1"){
 			$(this).find('.input_bg').css('backgroundPosition','0 0')
 			$('#rem_pwd').val('0')
 		}
 	})

 	$('.admin_login_form').submit(function(){
 		$('.admin_login_notice').text('正在验证信息..');
 		$('.admin_login_notice').show();
 		var name=$('input[name="name"]').val();
 		var pwd=$('input[name="pwd"]').val();
 		var rem_pwd=$('input[name="rem_pwd"]').val();
 		$.post('?h=get&c=login_check','name='+name+'&pwd='+pwd+'&rem_pwd='+rem_pwd,function(data){
 			var json_data=eval(data);
 			if(json_data['0']=='0')
 				$('.admin_login_notice').text(json_data['1']);
 			else if(json_data['0']=='1')
 				window.location.href=json_data['1'];
 		});
 		return false;
 	})

 })


 