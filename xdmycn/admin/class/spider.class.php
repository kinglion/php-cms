<?php
class spider extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'spider');
	}
}
//新秀
?>