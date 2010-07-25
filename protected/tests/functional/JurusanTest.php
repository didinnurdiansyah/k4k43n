<?php

class JurusanTest extends WebTestCase
{
	public $fixtures=array(
		'jurusans'=>'Jurusan',
	);

	public function testShow()
	{
		$this->open('?r=jurusan/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=jurusan/create');
	}

	public function testUpdate()
	{
		$this->open('?r=jurusan/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=jurusan/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=jurusan/index');
	}

	public function testAdmin()
	{
		$this->open('?r=jurusan/admin');
	}
}
