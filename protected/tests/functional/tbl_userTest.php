<?php

class tbl_userTest extends WebTestCase
{
	public $fixtures=array(
		'tbl_users'=>'tbl_user',
	);

	public function testShow()
	{
		$this->open('?r=tbl_user/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tbl_user/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tbl_user/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tbl_user/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tbl_user/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tbl_user/admin');
	}
}
