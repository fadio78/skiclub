<?php
/* 
 * classe utilisateur: elle representre un utilisateur 
 * constructeur et accesseurs
 */

class Utilisateur {
    
    private $pseudo;
    private $nom;
    private $prenom;
    
    public function __construct($ps,$name,$pre) {
        
        $pseudo = $ps;
        $nom = $name;
        $prenom = $pre;
            
    }
    
    public function getPseudo() {
        return $this->pseudo;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->Prenom;
    }
       
}


?>

