$(function(){
	$('#user_top_main_right li a').hover(function(){$(this).css('textDecoration','underline')},function(){$(this).css('textDecoration','')})
	$('.user_main_left dd a').hover(function(){$(this).css('textDecoration','underline')},function(){$(this).css('textDecoration','')})
	$('.list_dl dd a').hover(function(){$(this).css('textDecoration','')},function(){$(this).css('textDecoration','')})
	$('.user_main_left .list_dl_dd_a').hover(function(){$(this).css('textDecoration','underline')},function(){$(this).css('textDecoration','')})
	$('.list_dl dd').hover(function(){
		$(this).css('background','#F8F8F8');
		$(this).find('span').css('color','#000000');
	},function(){
		$(this).css('background','');
		$(this).find('span').css('color','');
	})

	$('.list_dl').each(function(){
		$(this).find('dd:last').css('border','none');
	})

	$('.user_main_right_vip').hover(function(){
		$(this).css('backgroundPosition','0 -135px')
	},function(){
		$(this).css('backgroundPosition','0 -90px')
	})

	$('.user_main_textarea_div img').click(function(event){
		$('.fabu_biaoqing').show();
		event.stopPropagation();
	})

	$('.fabu_biaoqing_main li').live('click',function(event){
		//
		$('.user_main_textarea').append('<img src="./sundry/static_file/img/img/'+$(this).attr('key')+'.gif">');
		$('.fabu_biaoqing').hide();
		event.stopPropagation();
	})


	$('.user_main_textarea_div_submit').click(function(){
		//alert($('.user_main_textarea').html());
		$('.weibo').val($('.user_main_textarea').html());
		$('.weibo_submit').submit();
	})
var sx=true;
var sz=true;
	$(document).click(function(){
		$('.fabu_biaoqing').hide();
	})

	$('.wypl input').hover(function(){
		if(sx)
		$(this).css('border-color','#adb6c9');
	},function(){if(sx)$(this).css('border-color','');})

	$('.wypl input').focus(function(){
		$(this).css('border-color','#adb6c9');
		sx=false;
		if($(this).val()=='我来说两句。。[100个字符以内]')
			$(this).val('');
		$(this).css('color','#369');
		$(this).parent().next().find('.xqpl_s').show();
	})
	$('.wypl input').blur(function(){
		$(this).css('border-color','');
		sx=true;
		if($(this).val()==''){
			$(this).val('我来说两句。。[100个字符以内]');
			$(this).css('color','');
			$(this).parent().next().find('.xqpl_s').hide();
		}
	})
//var str = "呵呵";
//alert(str.length)


	$('.ckhf_r_hf_text').hover(function(){
		if(sz)
		$(this).css('border-color','#adb6c9');
	},function(){if(sz)$(this).css('border-color','');})

	$('.ckhf_r_hf_text').focus(function(){
		$(this).css('border-color','#adb6c9');
		sz=false;
		if($(this).val()==$(this).parent().find('.ckhf_r_hf_h1').val())
			$(this).val('');
		$(this).css('color','#369');
	})
	$('.ckhf_r_hf_text').blur(function(){
		$(this).css('border-color','');
		sx=true;
		if($(this).val()==''){
			$(this).val($(this).parent().find('.ckhf_r_hf_h1').val());
			$(this).css('color','');
		}
	})

$('.ckhf_r_hf').click(function(){
	if($(this).text()=='回复'){
		$(this).parent().parent().find('.ckhf_r_hf_z').show();
		$(this).text('收起回复');
	}else{
		$(this).parent().parent().find('.ckhf_r_hf_z').hide();
		$(this).text('回复');
	}
})


$(window).scroll(function() {
		if($(window).scrollTop()>=120){
			var t = ($('.position_right_title li').index()+1)*100;
			$('.position_right_title').stop(true,true).slideDown(300);
			$('.position_right_title').animate({'top':'220px'},function(){
			});
			
		}else{
			var t = ($('.position_right_title li').index()+1)*100;
			if($('.position_right_title').css('display')=='block'){
				$('.position_right_title').stop(true).animate({'top':'100px'},function(){
					$('.position_right_title').stop().slideUp(300);
				});
			}
		}
		
})

$('.avatar_list li').click(function(){
	$('.avatar_list_hidden_b').hide();
	$('.avatar_list_hidden_r').hide();
	$(this).find('.avatar_list_hidden_b').show();
	$(this).find('.avatar_list_hidden_r').show();
	$('.pic').val($(this).find('img').attr('src'));
})

$('.avatar_list li').hover(function(){
	$(this).find('.avatar_list_hidden_text_2 a').show();
},function(){$(this).find('.avatar_list_hidden_text_2 a').hide();})

	 $('.delete_tishi').click(function(){
	 	if(!confirm("确定要删除吗？"))
	 		return false;
	 })

$('.page_1').parent().find('a').hover(
	function(){
		$(this).css('backgroundColor','#488FCF');
		$(this).css('color','#FFFFFF');
	},function(){
		$(this).css('backgroundColor','');
		$(this).css('color','');
})


$('.dj_main .td1:even').css('background','#EEEEEE');

$('.dj_main .td2:even').css('background','#FAE8DE');
$('.dj_main .td2:odd').css('background','#FFF6DF');

$('.dj_main .td3:even').css('background','#EEEEEE');

$('.dj_main_yhz').hover(function(){
	$(this).find('.dj_main_yhz_hide').show();
},function(){
	$(this).find('.dj_main_yhz_hide').hide();
})
$('.dj_main_yhz_hide a').hover(function(){$(this).css('color','#DE6014');},function(){$(this).css('color','');})


$('.quanxuan_table_a').click(function(){
	$(this).parent().parent().parent().find('.checkbox').prop("checked",true);
})
$('.qxquanxuan_table_a').click(function(){
	$(this).parent().parent().parent().find('.checkbox').prop("checked",false);
})

$('.scxzx_table_a').click(function(){
	if(confirm('确定删除选中项吗？')){
		$(this).parent().parent().parent().find('.go_type').val($(this).attr('key'))
		$(this).parent().parent().parent().parent().find('form').submit();
	}
})


$('.xc_main li').hover(function(){
	$(this).find('.xc_sc').show();
},function(){
	$(this).find('.xc_sc').hide();
})
$('.xc_sc').click(function(){
	if(!confirm('确定删除本相册 以及相册内的照片吗？'))
		return false;
})

$('.rizhi_zan').click(function(){
	var str = parseInt($(this).parent().parent().parent().find('.jdhz').find('i').text())+1;
	var sx = $(this).parent().parent().parent().find('.jdhz').find('i');
	var id= $(this).parent().parent().parent().find('input[name=id]').val();
	$.post('?h=hudong&c=rizhi_zan','id='+id,function(data){
		if(data=='1'){
			//成功
			alert('点赞成功！');
			sx.text(str);
		}else if(data=='2'){
			alert('不能给自己写的日志点赞！');
		}else if(data=='3'){
			alert('本篇文章你已经点过赞了哦！');
		}else if(data=='4'){
			alert('网络繁忙，请稍后再试');
		}
	})
})


$(window).resize(function(){
	rizhi_zan_go();
})


$('.zan_user ul li').live('mouseover',function(){
	$(this).css('background','#F6F6F6');
});
$('.zan_user ul li').live('mouseout',function(){
	$(this).css('background','#FFFFFF');
});


$(".zan_user .click_false").bind("mousedown",function(event){
	$('body').addClass('click_false');
	var _this = $(this)
	var offset_x = $(this).parent().css('left');
	var offset_y = $(this).parent().css('top');
	var mouse_x = event.pageX;
	var mouse_y = event.pageY;				
	$(document).bind("mousemove",function(ev){
		var _x = ev.pageX - mouse_x;
		var _y = ev.pageY - mouse_y;
		var now_x = (parseInt(offset_x) + _x ) + "px";
		var now_y = (parseInt(offset_y) + _y ) + "px";		
		_this.parent().css({
			top:now_y,
			left:now_x
		});
	});
});$(document).bind("mouseup",function(){
	$('body').removeClass('click_false');
			$(this).unbind("mousemove");
		});
$('.zan_user .click_false span').click(function(){
	$(this).parent().parent().hide();
})
$('.jdhz_a').click(function(){
	if(!$('.zan_user').find('ul').hasClass('o_'+$(this).attr('key'))){
		$('.zan_user').find('ul').empty();
		var str = '<li style=""><img style="width:220px;height:19px;margin:0 0 0 10px;" src="./sundry/static_file/img/uploading.gif" /></li>';
		$('.zan_user').find('ul').append(str);
		$('.zan_user').find('ul').attr('class','');
		// ajax 获取赞过的用户
		$.post('?h=hudong&c=get_zan_user','id='+$(this).attr('key'),function(data){
			$('.zan_user').find('ul').empty();
			if(data=='1'){
				$('.zan_user').find('ul').append('<li>请选择一篇文章</li>');
			}else if(data=='2'){
				$('.zan_user').find('ul').append('<li>没有用户点赞,或点赞的用户已被系统屏蔽</li>');
			}else{
				$('.zan_user').find('ul').append(data)
			}
		});
	}
	$('.zan_user').find('ul').addClass('o_'+$(this).attr('key'));

	$('.zan_user').show();
})


rizhi_zan_go();

})


function biaoqing_go(){
	$('.fabu_biaoqing_main').each(function(){
		for(var i = 1;i<=90;i++){
			$(this).find('ul').append('<li key="'+i+'"><img src="./sundry/static_file/img/img/'+i+'.gif"></li>');
		}
		$(this).find('li:eq(13)').css('borderRight','0')
		$(this).find('li:eq(27)').css('borderRight','0')
		$(this).find('li:eq(41)').css('borderRight','0')
		$(this).find('li:eq(55)').css('borderRight','0')
		$(this).find('li:eq(69)').css('borderRight','0')
		$(this).find('li:eq(83)').css('borderRight','0')
		$(this).find('li:eq(84)').css('borderBottom','0')
		$(this).find('li:eq(85)').css('borderBottom','0')
		$(this).find('li:eq(86)').css('borderBottom','0')
		$(this).find('li:eq(87)').css('borderBottom','0')
		$(this).find('li:eq(88)').css('borderBottom','0')
		$(this).find('li:eq(89)').css('borderBottom','0')
	})
}


function rizhi_zan_go(){
	var w = $(window).width();
	var h = $(window).height();
	w=(w-300)/2;w=w>0?w:0;
	h=(h-350)/2;h=h>0?h:0;
	$('.zan_user').css('left',w+'px');
	$('.zan_user').css('top',h+'px');
}





