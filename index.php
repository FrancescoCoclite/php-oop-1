<?php
class Movie {
 
   public $titolo;
   public $regista;
   public $durata;
   public $lingua = 'ita';
   
   function __construct($_titolo,$_durata){
       
       $this->titolo = $_titolo;
       $this->durata = $_durata;
       
    }
    function setSubs($subTitle){
        
        if($subTitle !== 'ita'){
            
            $this->lingua = 'italiano non disponibile, selezionare sottotitoli';
            
        }
    }
    function getLenguage(){
        return $this->lingua;
    }
}

$titanic = new Movie('Titanic','2:10');
$titanic -> setSubs('eng');
var_dump($titanic);

$inception = new Movie('Inception','2:10');
$inception -> setSubs('ita');
var_dump($inception);

