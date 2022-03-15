<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Jajargenjang.php";

// Class untuk run Testing.
class JajargenjangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungkeliling(){
        $jajargenjang = new Jajargenjang();
        
        $a = 3;
        $b = 6;
        $result = $jajargenjang->hitungKeliling($a,$b);
        $expected = 18;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $jajargenjang = new Jajargenjang();
        
        $alas = 2; 
        $tinggi = 4;
        $result = $jajargenjang->hitungLuas($alas,$tinggi);
        $expected = 8;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungkelilingKosong(){
        $jajargenjang = new Jajargenjang();
        
        $a = '';
        $b = '';
        $result = $jajargenjang->hitungKeliling($a,$b);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $jajargenjang = new Jajargenjang();
        
        $alas = '';
        $tinggi = '';
        $result = $jajargenjang->hitungLuas($alas,$tinggi);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}