<?php

require_once './Video.php';
require_once './Gafanhoto.php';
class Visualizacao {
    //put your code here
    private $espectador;
    private $filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setToassistindo($this->espectador->getToassistindo()+1);
      
    }
    
    public function avaliar() {
        $this->filme->setAvaliação(5);
        
    }
     public function avaliarNota($nota) {
           $this->filme->setAvaliação($nota);
        
    }
     public function avaliarPorc($porc) {
         $nova = 0;
         if ($porc <= 20) {
             $nova = 3;
         }elseif ($porc<=50) {
            $nova = 5;
        }elseif ($porc <=90) {
            $nova - 8;
        } else {
            $nova = 10;
        } 
        
         $this->filme->setAvaliação($nova);
        
    }
    
   
    
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }



    
    
}
