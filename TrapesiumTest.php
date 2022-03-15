<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Trapesium.php";

// Class untuk run Testing.
class TrapesiumTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungkeliling(){
        $trapesium = new Trapesium();
        
        $sisi = 5;
        $result = $trapesium->hitungKeliling($sisi);
        $expected = 20;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $trapesium = new Trapesium();
        
        $alasa = 2; 
        $alasb = 3;
        $tinggi = 4; 
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungkelilingKosong(){
        $trapesium = new Trapesium();
        
        $sisi = '';
        $result = $trapesium->hitungKeliling($sisi);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $trapesium = new Trapesium();
        
        $alasa = ''; 
        $alasb = '';
        $tinggi = '';
        $result = $trapesium->hitungLuas($alasa,$alasb,$tinggi);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}