$(function(){
	now();
	show();
	$('.admin_left_main_dl dt').click(function(){
		var time;
		if($(this).parent().find('dd').length=='1')
			time = 150;
		else if($(this).parent().find('dd').length>'1' && $(this).parent().find('dd').length<'3')
			time = 100;
		else if($(this).parent().find('dd').length>='3' && $(this).parent().find('dd').length<'5')
			time = 50;
		else
			time = 30;
		time = $(this).parent().find('dd').length * time;
		$(this).parent().find('dd').stop().slideToggle(time,function(){
			show();
		});
	})
	$(window).resize(function(){
		now()
		show();
		op_up_re();
	})
	$('.admin_left_main_fy_bottom').hover(function(){
		$(this).css('backgroundPosition','right bottom')
	},function(){
		$(this).css('backgroundPosition','')
	})
	$('.admin_left_main_fy_top').hover(function(){
		$(this).css('backgroundPosition','left bottom')
	},function(){
		$(this).css('backgroundPosition','')
	})
	$('.admin_left_main_fy_top').click(function(){
		var str = $('#admin_left_bo_main').css('top');
		var otop = parseInt(str,10);
		if(isNaN(otop)){
			otop = 0;
		}
		if(Math.abs(otop)+300<$('#admin_left_bo_main').height()){
			otop -= 200;
			$('#admin_left_bo_main').animate({'top':otop+'px'})
		}
	})
	$('.admin_left_main_fy_bottom').click(function(){
		var str = $('#admin_left_bo_main').css('top');
		var otop = parseInt(str,10);
		if(isNaN(otop)){
			otop = 0;
		}
		if(otop<-20){
			otop += 200;
			$('#admin_left_bo_main').animate({'top':otop+'px'})
		}else{
			$('#admin_left_bo_main').css('top','0px');
		}
	})
	$('.admin_con_main_con_main_div_3_div').hover(function(){
		$(this).find('.admin_con_main_con_main_div_3_div_bianji').show();
	},function(){
		$(this).find('.admin_con_main_con_main_div_3_div_bianji').hide();
	})
	$('.admin_nav_layout_table tr').hover(function(){
		$(this).find('.nav_erji').show();
	},function(){
		$(this).find('.nav_erji').hide();
	})
	$('.city_table tr').hover(function(){
		$(this).find('.city_erji').css('visibility','visible');
	},function(){
		$(this).find('.city_erji').css('visibility','');
	})

	/**
	 *	设置页面 当选择文件后
	 */
	 $('.file_get_2_file').change(function(){
	 	var path = ('\\'+$(this).val()).split('\\')[(('\\'+$(this).val()).split('\\').length)-1];
	 	$(this).parent().parent().find('.file_get_name').val(path);
	 })

	 nav_type();

	 $('input[name=nav_type]').change(function(){
	 	nav_type();
	 })

	 $('input[type=text]').focus(function(){
	 	$(this).css('background','#FAFFBD');
	 })
	 $('input[type=text]').blur(function(){
	 	$(this).css('background','#FFFFFF');
	 })
	 $('.bgie6').blur(function(){
	 	$(this).css('background','#EEEEEE');
	 })
	 $('.input_text_no').focus(function(){
	 	$(this).css('background',$(this).attr('key'));
	 })
	 $('.input_text_no').blur(function(){
	 	$(this).css('background',$(this).attr('key'));
	 })

	 $('.delete_tishi').click(function(){
	 	if(!confirm("确定要删除吗？"))
	 		return false;
	 })

	 /**
	  *	form1提交
	  */
		$('.nav_update_a').click(function(){
			$('input[name=delete]').val('0');
			$('.form1').submit();
		})
		$('.nav_delete_a').click(function(){
			if(confirm('确定删除选中项吗？')){
				$('input[name=delete]').val('1');
				$('.form1').submit();
			}
		})

		$('.quanxuan_s').click(function(){
			$('.input_checkbox_s').prop("checked",true);
			});  
		$('.quanxuan_z').click(function(){
			$('.input_checkbox_s').prop("checked",false);
			});  

	 /**
	  *	注册管理部分
	  */
	 goumai_yzm();
	 goumai_yzm_type();
	 zhuce();
	 $('.goumai_yzm').change(function(){
	 	goumai_yzm();
	 })
	 $('.goumai_yzm_type_input').change(function(){
		 goumai_yzm_type();
	 })
	 $('.zhuce').change(function(){
	 	zhuce();
	 })

	 /**
	  *	城市部分
	  */
	  $('select[name=city_select]').change(function(){
	  	location.href="?h=set_up&c=city&k="+$(this).val();
	  
	  })

	  /**
	   *	字段创建页面
	   */
	   zd_create_show();
	   $('.ziduan_create_leixing').change(function(){
	   	zd_create_show();
	   })
	   ziduan_guanlian_lanmu();
	   $('.ziduan_guanlian_lanmu').change(function(){
	   	ziduan_guanlian_lanmu();
	   })

	   $('input[type="submit"]').each(function(){
	   	if($(this).css('backgroundColor')=='rgb(255, 255, 255)'){
	   		$(this).css('background','none');
	   	}
	   })








})

function now(){
	$('.main').hide();
		var dwidth = $(document).width();
		dwidth=dwidth>1000?dwidth:1000;
		$('.main').css('width',dwidth-220+'px');
		$('.main').show();
}

function show(){
	if($('#admin_left_bo_main').height()>$('#admin_left').height()-30){
		stop = $('#admin_left_bo_main').css('top');
		$('.admin_left_main_fy').show();
	}else{
		stop = $('#admin_left_bo_main').css('top');
		if(parseInt(stop,10)>=0)
			$('.admin_left_main_fy').hide();
	}
}

function nav_type(){
	if($('input[name=nav_type]:checked').val()=='1'){
		$('.nav_type_moxing').show();
		$('.nav_type_link').hide();
	}else if($('input[name=nav_type]:checked').val()=='0'){
		$('.nav_type_moxing').hide();
		$('.nav_type_link').show();
	}
}

function goumai_yzm(){
	if($('.goumai_yzm:checked').val()=='1'){
		//允许购买验证码
		$('.yqm_show').show();
	}else{
		$('.yqm_show').hide();
	}
}

function goumai_yzm_type(){
	if($('.goumai_yzm_type_input:checked').val()=='1'){
		//允许购买验证码
		$('.goumai_yzm_type').show();
	}else{
		$('.goumai_yzm_type').hide();
	}
}

function zhuce(){
	if($('.zhuce:checked').val()=='0'){
		//不开启注册
		$('.close_zhuce_tishi').show();
	}else{
		$('.close_zhuce_tishi').hide();
	}
}

//字段创建页面 radio change
function zd_create_show(){
	var val = $('.ziduan_create_leixing:checked').attr('key');
	switch(val){
		case '8':
			$('.html_gongneng').show();
			$('.kexuan_zhi').hide();
			$('.lei_bieming').hide();
			$('.yiju_ziduan').hide();
		break;
		case '9':
		case '10':
		case '11':
			$('.html_gongneng').hide();
			$('.kexuan_zhi').show();
			$('.lei_bieming').hide();
			$('.yiju_ziduan').hide();
		break;
		case '16':
			$('.html_gongneng').hide();
			$('.kexuan_zhi').hide();
			$('.lei_bieming').show();
			$('.yiju_ziduan').hide();
		break;
		case '17':
			$('.html_gongneng').hide();
			$('.kexuan_zhi').hide();
			$('.lei_bieming').hide();
			$('.yiju_ziduan').show();
		break;
		default:
			$('.html_gongneng').hide();
			$('.kexuan_zhi').hide();
			$('.lei_bieming').hide();
			$('.yiju_ziduan').hide();
		break;
	}
}

function ziduan_guanlian_lanmu(){
	var val = $('.ziduan_guanlian_lanmu:checked').val();
	if(val == '1')
		$('.zhiding_lanmu').show();
	else
		$('.zhiding_lanmu').hide();
}

function op_up_re(){
	var w = $(window).width();
	var h = $(window).height();
	$('.op_up_zhegai').css('width',w+'px');
	$('.op_up_zhegai').css('height',h+'px');
	w=(w-600)/2;w=w>0?w:0;
	h=(h-400)/2;h=h>0?h:0;
	$('.op_up_1').css('left',w+'px');
	$('.op_up_1').css('top',h+'px');
}
