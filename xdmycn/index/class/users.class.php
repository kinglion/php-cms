<?php
class users extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'users');
	}
}
//新秀
?>