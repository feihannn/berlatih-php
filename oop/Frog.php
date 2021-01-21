<?
    class Frog extends Animal{
        public function __construct($nama){
            $this->name=$nama;
            $this->legs=4;
            $this->cold_blooded=false;
        }
        public function jump(){
            echo "hop hop\n";
        }
    }
?>