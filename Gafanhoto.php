<?php



require_once './Pessoa.php';
class Gafanhoto extends Pessoa{
    
    private  $login;
    private $toassistindo;
    
    public function getLogin() {
        return $this->login;
    }

    public function getToassistindo() {
        return $this->toassistindo;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setToassistindo($toassistindo): void {
        $this->toassistindo = $toassistindo;
    }

        
    
   
    public function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->toassistindo = 0;
    
    }
    public function assistindoMaisum() {
        $this->toassistindo ++;
        
    }

}
