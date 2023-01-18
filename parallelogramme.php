<?php
    class parallelogramme{
        // Attributs
        private $_longueur;
        private $_largeur;

        // getters $ setters
        public function __construct($_longueur, $_largeur) {
            $this->setLongueur($_longueur); 
            $this->setLargeur($_largeur); 
        }
        public function getLongueur(){
            return $this->_longueur;
        }
        public function setLongueur($Longueur){
            $this->_longueur=$Longueur;
        }
        public function getLargeur(){
            return $this->_largeur;
        }
        public function setLargeur($Largeur){
            $this->_largeur=$Largeur;
        }
        //methods
        public function getPerimetre(){
            $per=($this->getLongueur() + $this->getLargeur())*2;
            return $per."<br>";
        }
        public function getAire(){
            $aire=$this->getLongueur() * $this->getLargeur();
            return $aire."<br>";
        }
       
    }
    
?>