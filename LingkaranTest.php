<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Lingkaran.php";

// Class untuk run Testing.
class LingkaranTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $lingkaran = new Lingkaran();
        
        $r = 2;
        $result = $lingkaran->hitungKeliling($r);
        $expected = 12.56;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $lingkaran = new Lingkaran();
        
        $r = 3;
        $result = $lingkaran->hitungLuas($r);
        $expected = 28.26;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        $lingkaran = new Lingkaran();
        
        $r = '';
        $result = $lingkaran->hitungKeliling($r);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $lingkaran = new Lingkaran();
        
        $r = ''; 
        $result = $lingkaran->hitungLuas($r);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}