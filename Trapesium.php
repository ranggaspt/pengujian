<?php

class Trapesium{
    function hitungkeliling($sisi){
        if ($sisi == '' ) {
            return "Tidak boleh kosong!";
        }else{
            return $sisi+$sisi+$sisi+$sisi;
        }
    }

    function hitungLuas($alasa,$alasb,$tinggi){
        if($alasa == '' && $alasb == '' && $tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return 0.5*($alasa+$alasb)*$tinggi;
        }
    }
}

?>