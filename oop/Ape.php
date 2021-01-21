<?
    class Ape extends Animal{
        public function __construct($nama){
            $this->name=$nama;
            $this->legs=2;
            $this->cold_blooded=false;
        }
        public function yell(){
            echo "Auooo\n";
        }
    }
?>