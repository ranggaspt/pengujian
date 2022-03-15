<<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "LayangLayang.php";

// Class untuk run Testing.
class LayangLayangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungkeliling(){
        $layanglayang = new Layanglayang();
        
        $a = 3;
        $b = 2;
        $result = $layanglayang->hitungKeliling($a,$b);
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $layanglayang = new Layanglayang();
        
        $d1 = 4; 
        $d2 = 4;
        $result = $layanglayang->hitungLuas($d1,$d2);
        $expected = 8;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungkelilingKosong(){
        $layanglayang = new Layanglayang();
        
        $a = ''; 
        $b = '';
        $result = $layanglayang->hitungKeliling($a,$b);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $layanglayang = new Layanglayang();
        
        $d1 = '';
        $d2 = '';
        $result = $layanglayang->hitungLuas($d1,$d2);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}