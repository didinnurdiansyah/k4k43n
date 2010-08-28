<?php

class MahasiswaTest extends CDbTestCase
{
    /*
    public $fixtures=array(
        'mahasiswas'=>'Mahasiswa',
    );

    public function testCreate()
    {
        
    }
    */
    
    public function testRegisterAll()
    {
        $mahasiswa = Mahasiswa::model()->findAll();
        foreach ($mahasiswa as $m) {
            $m->password = 'test';
            $m->registered = 1;
            $m->email = 'test@email.com';
            $m->jenisKelamin = rand(0,1);
            $m->jurusan = rand(2,84);
            $m->save(false);
        }
        $this->assertTrue(true,true);
    }
    
    
}
