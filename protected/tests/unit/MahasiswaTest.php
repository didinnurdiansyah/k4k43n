<?php

class MahasiswaTest extends CDbTestCase
{
    public $fixtures=array(
        'mahasiswas'=>'Mahasiswa',
    );
    
    public function setUp()
    {
        
    }
    

    
    public function testCreate()
    {
        
    }
    
    
    public function testSave()
    {
        foreach(Mahasiswa::model()->findAll() as $i => $mahasiswa) {
            $mahasiswa->jenisKelamin = $i % 3 == 0?1:0;
            $mahasiswa->jenjang = 1;
            $mahasiswa->registered = 1;
            $mahasiswa->email = 'test@mail.com';
            $mahasiswa->password = 'rahasia';
            $mahasiswa->save(false);
        }
    }
    
    public function testPilihKelompok()
    {
        
    }
    
}
