<?php
   abstract class humain{
         // Attributs
        protected $_name;

        // getters $ setters
        public function getName(){
            return $this->_name;
        }
        public function setName($Name){
            $this->_name=$Name;
        }
        //methode
        public function bonjour(){
            return "Bonjour mon nom est ".$this->getName()." et ";
        }
    }

    class homme extends humain{
        public $_sexe;

        public function getSexe(){
            return $this->_sexe;
        }
        public function setSexe($Sexe){
            $this->_sexe=$Sexe;
        }
        public function sexe(){
            return "je suis un ".$this->getSexe()."<br>";
        }
    }

    class femme extends humain{
        public $_sexe;

        public function getSexe(){
            return $this->_sexe;
        }
        public function setSexe($Sexe){
            $this->_sexe=$Sexe;
        }

        public function sexe(){
            return "je suis un ".$this->getSexe()."<br>";
        }
    }

    $john = new homme();
    $john->setName("john");
    $john->setSexe("homme");
    echo $john->bonjour();
    echo $john->sexe();
?>