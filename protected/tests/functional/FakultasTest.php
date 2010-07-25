<?php

class FakultasTest extends WebTestCase
{
	public $fixtures=array(
		'fakultases'=>'Fakultas',
	);

	public function testShow()
	{
		$this->open('?r=fakultas/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=fakultas/create');
	}

	public function testUpdate()
	{
		$this->open('?r=fakultas/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=fakultas/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=fakultas/index');
	}

	public function testAdmin()
	{
		$this->open('?r=fakultas/admin');
	}
}
