<?php

class Jajargenjang{
    function hitungkeliling($a,$b){
        if ($a == '' && $b == '' ) {
            return "Tidak boleh kosong!";
        }else{
            return (2*$a)+(2*$b);
        }
    }

    function hitungLuas($alas,$tinggi){
        if($alas == '' && $tinggi == ''){
            return "Tidak boleh kosong!";
        }else{
            return $alas*$tinggi;
        }
    }
}

?>