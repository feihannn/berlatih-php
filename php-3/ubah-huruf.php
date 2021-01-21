<?php
function ubah_huruf($string){
    for ($i=0;$i<strlen($string);$i++){
        $kata = $string[$i];
        $ubah = ord($kata);
        $ubah++;
        $string[$i] = chr($ubah);
    }
    return $string;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "\n";
echo ubah_huruf('developer'); // efwfmpqfs
echo "\n";
echo ubah_huruf('laravel'); // mbsbwfm
echo "\n";
echo ubah_huruf('keren'); // lfsfo
echo "\n";
echo ubah_huruf('semangat'); // tfnbohbu
echo "\n";

?>