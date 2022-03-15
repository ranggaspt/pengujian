<?php

class Persegi{
    function hitungKeliling($sisi){
        if ($sisi == ''){
            return "Tidak Boleh Kosong!";
        }else{
            return $sisi * 4;
        }
    }

    function hitungLuas($sisi){
        if ($sisi == ''){
            return "Tidak Boleh Kosong!";
        }else{
            return $sisi * $sisi;
        }
    }
}

?>