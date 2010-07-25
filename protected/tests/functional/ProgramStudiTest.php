<?php

class ProgramStudiTest extends WebTestCase
{
	public $fixtures=array(
		'programStudis'=>'ProgramStudi',
	);

	public function testShow()
	{
		$this->open('?r=programStudi/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=programStudi/create');
	}

	public function testUpdate()
	{
		$this->open('?r=programStudi/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=programStudi/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=programStudi/index');
	}

	public function testAdmin()
	{
		$this->open('?r=programStudi/admin');
	}
}
