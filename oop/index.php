<?
    include 'animal.php';
    include 'Ape.php';
    include 'Frog.php';
    echo "----RELEASE 0----\n";
    $sheep = new Animal("shaun");
    echo $sheep->name; // "shaun"
    echo "\n";
    echo $sheep->legs; // 2
    echo "\n";
    var_dump ($sheep->cold_blooded); // false

    echo "----RELEASE 1----\n";
    $sungokong = new Ape("kera sakti");
    echo $sungokong->name;
    echo "\n";
    echo $sungokong->legs;
    echo "\n";
    var_dump($sungokong->cold_blooded) ;
    $sungokong->yell(); // "Auooo"
    echo "\n";
    
    $kodok = new Frog("buduk");
    echo $kodok->name;
    echo "\n";
    echo $kodok->legs;
    echo "\n";
    var_dump($kodok->cold_blooded) ;
    $kodok->jump() ; // "hop hop"
?>