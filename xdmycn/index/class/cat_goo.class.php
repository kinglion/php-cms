<?php
class cat_goo extends category
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'cat_goo');
	}
}
//新秀
?>