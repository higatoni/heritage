<?php
    class ghost {
         // Attributs
         private $_nom;

         // getters $ setters
         public function getNom(){
            return $this->_nom;
         }
         public function setNom($Nom){
            $this->_nom=$Nom;
                return $this;
         }
         //methods
        public function parle(){
            return $this->getNom()." fait : Bouhouhouhou <br>";
        }
        public function ditbonjour() {
            return "Bonjour ".$this->getNom()."<br>";
        }
    }
        
    class poltergeist extends ghost{
        //methods
        public function colere(){
            return $this->getNom()." : lancement d'assiettes <br>";
        }
        public function ditbonjour() {
            return $this->getNom()." Rugit <br>";
        }
        public function parlerPlusFort(){
            echo parent::parle();
            return "<h1>".$this->getNom()." CRIE</h1>";
        }
    }

    $ghost1=new ghost();
    $ghost1->setNom("casper");
    echo $ghost1-> ditbonjour();
    $pol=new poltergeist();
    $pol->setNom("Dracolosse");
    echo $pol->ditbonjour();
    echo $pol->colere();
    echo $pol->parlerPlusFort();
?>