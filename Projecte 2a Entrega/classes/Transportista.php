<?php

class Transportista {
    private $codi;
    private $dni;
    private $nom;
    private $cognoms;
    private $telefon;
    private $adreca;
    private $poblacio;
    private $provincia;
    private $codiPostal;
    private $encarrecs;
    
    function __construct($codi, $dni, $nom, $cognoms, $telefon, $adreca, $poblacio, $provincia, $codiPostal,$encarrecs) {
        $this->codi = $codi;
        $this->dni = $dni;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->telefon = $telefon;
        $this->adreca = $adreca;
        $this->poblacio = $poblacio;
        $this->provincia = $provincia;
        $this->codiPostal = $codiPostal;
        $this->encarrecs = $encarrecs;
    }

    public function getCodi() {
        return $this->codi;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCognoms() {
        return $this->cognoms;
    }

    public function getTelefon() {
        return $this->telefon;
    }

    public function getAdreca() {
        return $this->adreca;
    }

    public function getPoblacio() {
        return $this->poblacio;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getCodiPostal() {
        return $this->codiPostal;
    }

    public function setCodi($codi) {
        $this->codi = $codi;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognoms($cognoms) {
        $this->cognoms = $cognoms;
    }

    public function setTelefon($telefon) {
        $this->telefon = $telefon;
    }

    public function setAdreca($adreca) {
        $this->adreca = $adreca;
    }

    public function setPoblacio($poblacio) {
        $this->poblacio = $poblacio;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setCodiPostal($codiPostal) {
        $this->codiPostal = $codiPostal;
    }   
    
    public function calcularKm($data){
        $total=0;
        for($i=0;$i<sizeof($this->encarrecs);$i++){
            if($this->encarrecs[$i]->data==$data){
                $total=$total+$this->encarrecs[$i]->distancia;
            }
        }
        return $total;
    }
}

?>
