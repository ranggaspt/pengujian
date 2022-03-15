<?php

class PersegiPanjang{
    function hitungkeliling($panjang,$lebar){
        if ($panjang == '' && $lebar == '') {
            return "Tidak boleh kosong!";
        }else{
            return 2*($panjang + $lebar);
        }
    }

    function hitungLuas($panjang,$lebar){
        if($panjang == '' && $lebar == ''){
            return "Tidak boleh kosong!";
        }else{
            return $panjang * $lebar;
        }
    }
}

?>