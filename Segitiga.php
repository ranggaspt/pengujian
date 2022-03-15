<?php

class Segitiga{
    function hitungkeliling($a,$b,$c){
        if ($a == '' && $b == '' && $c == '') {
            return "Tidak boleh kosong!";
        }else{
            return $a+$b+$c;
        }
    }

    function hitungLuas($alas,$tinggi){
        if($alas == '' && $tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return 0.5*$alas*$tinggi;
        }
    }
}

?>