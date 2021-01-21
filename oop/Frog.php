<?
    class Frog extends Animal{
        public function __construct($namabinatang){
            $this->name=$namabinatang;
            $this->legs=4;
            $this->cold_blooded=false;
        }
        public function jump(){
            echo "hop hop\n";
        }
    }
?>