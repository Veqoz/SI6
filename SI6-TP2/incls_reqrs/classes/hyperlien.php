<?php
class HyperLien {
    private $url;
    private $id;
    private $libelle;
    private $classe;
 
    function __construct($pUrl, $pId, $pTexte, $pClasse){
        $this->url = $pUrl;
        $this->id = $pId;
        $this->libelle = $pTexte;
        $this->classe = $pClasse;
   }
 
    function ancre(){
        return '<a href="' .  $this->url  . '" id="' . $this->id . '" class="' . $this->classe . '">' . $this->libelle .  '</a>';
    }
 
}
?>