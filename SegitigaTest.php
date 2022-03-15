<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Segitiga.php";

// Class untuk run Testing.
class SegitigaTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    public function testHitungkeliling(){
        $segitiga = new Segitiga();
        
        $a = 2; 
        $b = 4;
        $c = 10;
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = 16;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){
        $segitiga = new Segitiga();
        
        $a = '';
        $b = '';
        $c = '';
        $result = $segitiga->hitungKeliling($a,$b,$c);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){
        $segitiga = new Segitiga();
        
        $alas = 10; 
        $tinggi = 2;
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $segitiga = new Segitiga();
        
        $alas = '';
        $tinggi = '';
        $result = $segitiga->hitungLuas($alas,$tinggi);
        $expected = "Tidak boleh kosong!";

        // Kita assert equal
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}