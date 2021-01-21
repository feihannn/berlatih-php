<?php
function tentukan_nilai($number)
{
    if($number<=100&&$number>=85){
        return "Sangat Baik";
    }
    else if($number<=85&&$number>=70){
        return "Baik";
    }
    else if($number<=70&&$number>=60){
        return "Cukup";
    }
    else{
        return "Kurang";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo "\n";
echo tentukan_nilai(76); //Baik
echo "\n";
echo tentukan_nilai(67); //Cukup
echo "\n";
echo tentukan_nilai(43); //Kurang
echo "\n";
?>