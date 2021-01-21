<?
    class Ape extends Animal{
        public function __construct($namabinatang){
            $this->name=$namabinatang;
            $this->legs=2;
            $this->cold_blooded=false;
        }
        public function yell(){
            echo "Auooo\n";
        }
    }
?>