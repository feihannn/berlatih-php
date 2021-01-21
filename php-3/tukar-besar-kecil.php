<?php
function tukar_besar_kecil($string){
    for ($i=0;$i<strlen($string);$i++){
        if (ctype_upper($string[$i])==true){
            $string[$i]=strtolower($string[$i]);
        }
        else if (ctype_lower($string[$i])==true){
            $string[$i]=strtoupper($string[$i]);
        }
    }
    return $string;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"\
echo "\n";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "\n";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "\n";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "\n";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
echo "\n";

?>