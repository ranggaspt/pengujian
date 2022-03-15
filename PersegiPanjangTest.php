<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once 'PersegiPanjang.php';

// Class untuk run Testing.
class PersegiPanjangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebelum pengjujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        $persegipanjang = new PersegiPanjang();
        
        $panjang = 3;
        $lebar = 2;
        $result = $persegipanjang->hitungKeliling($panjang,$lebar);
        $expected = 10;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        $persegipanjang = new PersegiPanjang();
        
        $panjang = 3;
        $lebar = 2;
        $result = $persegipanjang->hitungLuas($panjang,$lebar);
        $expected = 6;

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        $persegipanjang = new PersegiPanjang();
        
        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungKeliling($panjang,$lebar);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        $persegipanjang = new PersegiPanjang();
        
        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungLuas($panjang,$lebar);
        $expected = "Tidak boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengjujian \n";
    }
}