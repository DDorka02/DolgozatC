<?php
    class Adatbazis{
        private $host = "localhost";
        private $felhasznaloNev = "root";
        private $jelszo = "";
        private $adatbazis="DolgozatC";
        private $kapcsolat;
        public function __construct() {
            $this->kapcsolat= new mysqli(
                $this->host,
                $this->felhasznaloNev,
                $this->jelszo,
                $this->adatbazis
        );
    }
    

    }

?>
