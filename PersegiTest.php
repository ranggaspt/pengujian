<?php

// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once 'Persegi.php';

// Class untuk run Testing.
class PersegiTest extends TestCase{

    static $persegi;
    public static function setUpBeforeClass(): void{
        echo "Eksekusi Sebelum Pengujian \n";
    }

    //TestCase hitungKeliling
    public function testHitungKeliling(){
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        $sisi = 2;
        $result = $persegi->hitungKeliling($sisi);
        $expected = 8;

        // Kita assert equal
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuas
    public function testHitungLuas(){
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        $sisi = 2;
        $result = $persegi->hitungLuas($sisi);
        $expected = 4;

        // Kita assert equal
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungKelilingKosong
    public function testHitungKelilingKosong(){
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        $sisi = '';
        $result = $persegi->hitungKeliling($sisi);
        $expected = "Tidak Boleh Kosong!";

        // Kita assert equal
        $this->assertEquals($expected, $result); 
    }

    //TestCase hitungLuasKosong
    public function testHitungLuasKosong(){
        // Kita pakai class yang mau kita test.
        $persegi = new Persegi();

        $sisi = '';
        $result = $persegi->hitungLuas($sisi);
        $expected = "Tidak Boleh Kosong!";

        // Kita assert equal
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }
}