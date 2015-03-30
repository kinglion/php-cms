<?php
function do_create_static()
{
	$obj = new spider();
	$obj->set_where("spi_flag = 0");
	$one = $obj->get_one();
	if(count($one))
	{
		$id = $one['spi_id'];
		$html_text = get_page_html($one['spi_url']);
		
		$obj->set_where('');
		$obj->set_where("spi_id = $id");
		$obj->set_value('spi_flag',1);
		$obj->edit();
		
		if($html_text)
		{
			$arr = get_link($html_text);
			for($i = 0; $i < count($arr); $i ++)
			{
				$url = $arr[$i];
				$obj = new spider();
				$obj->set_where("spi_url = '$url'");
				$one = $obj->get_one();
				if(!count($one))
				{
					$obj->set_value('spi_url',$url);
					$obj->set_value('spi_add_time',time());
					$obj->add();
				}
			}
		}
		
	}else{
		$obj = new spider();
		$one = $obj->get_one();
		if(!count($one))
		{
			$url = 'http://' . get_domain() . S_ROOT;
			$obj->set_value('spi_url',$url);
			$obj->set_value('spi_add_time',time());
			$obj->add();
		}
	}
	
	$obj = new spider();
	$count_sum = $obj->get_count();
	$obj->set_where("spi_flag = 1");
	$count_created = $obj->get_count();
	
	echo $count_sum . '|' . $count_created;
}

function get_page_html($url)
{
	return file_get_contents($url);
}

function get_link($text)
{
	$str = '';
	
	$text = strtolower($text);
	$text = str_replace(' ','',$text);
	$text = str_replace("'",'"',$text);
	$text = str_replace('#','',$text);
	
	$a = 'href="';
	$b = '"';
	
	for(;true;)
	{
		$p = stripos($text,$a);
		if($p !== false)
		{
			$text = substr($text,$p + strlen($a));
			$p = stripos($text,$b);
			if($p !== false)
			{
				$url = substr($text,0,$p);
				if($url != '' && stripos($str,$url) === false)
				{
					if(substr($url,0,strlen(S_ROOT)) == S_ROOT && substr($url,-4) != '.rar')
					{
						$url = 'http://' . get_domain() . str_replace(S_ROOT.'html/',S_ROOT.'?/',$url);
						if($str != '')
						{
							$str = $str . '#' . $url;
						}else{
							$str = $url;
						}
					}
					
				}
				$text = substr($text,$p + strlen($b));
			}else{
				break;
			}
		}else{
			break;
		}
		
	}
	if($str != '')
	{
		$arr = explode('#',$str);
	}else{
		$arr = array();
	}
	return $arr;
}

//新秀
?>