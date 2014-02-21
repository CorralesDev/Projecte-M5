<?php

class Encarrec {
    private $data;
    private $distancia;
    private $nomClient;
    private $volum;
    private $descripcio;
    private $desti;
    private $despesa;
    
    function __construct($data, $distancia, $nomClient, $volum, $descripcio, $desti, $despesa) {
        $this->data = $data;
        $this->distancia = $distancia;
        $this->nomClient = $nomClient;
        $this->volum = $volum;
        $this->descripcio = $descripcio;
        $this->desti = $desti;
        $this->despesa = $despesa;
    }

    public function getData() {
        return $this->data;
    }

    public function getDistancia() {
        return $this->distancia;
    }

    public function getNomClient() {
        return $this->nomClient;
    }

    public function getVolum() {
        return $this->volum;
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function getDesti() {
        return $this->desti;
    }

    public function getDespesa() {
        return $this->despesa;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
    }

    public function setVolum($volum) {
        $this->volum = $volum;
    }

    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    public function setDesti($desti) {
        $this->desti = $desti;
    }

    public function setDespesa($despesa) {
        $this->despesa = $despesa;
    }


}

?>