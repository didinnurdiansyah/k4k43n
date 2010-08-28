<?php

class MahasiswaTest extends CDbTestCase
{
    public $fixtures=array(
        'mahasiswas'=>'Mahasiswa',
    );

    
    public function testCreate()
    {
        foreach($this->mahasiswas as $m){
            $mahasiswa = new Mahasiswa();
            $mahasiswa->attributes = $m;
            $mahasiswa->password = 'test';
            $mahasiswa->email = 'ada@mail.com';
            $mahasiswa->save(false);
        }
    }
    
}
