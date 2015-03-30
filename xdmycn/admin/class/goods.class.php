<?php
class goods extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'goods');
		$this->set_where("goo_lang = '".S_LANG."'");
		$this->set_order('goo_top');
		$this->set_order('goo_index');
		$this->set_order('goo_id');
	}
}
//新秀
?>