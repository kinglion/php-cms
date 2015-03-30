<?php

	function check(){
		if(is_file('../install.hhc')){
			die('<div style="font-size:15px;margin:10px 0 0 20px;">您的系统已安装 如果需要重新安装 请删除 /sundry/static_file/install.hhc</div>');
		}
	}