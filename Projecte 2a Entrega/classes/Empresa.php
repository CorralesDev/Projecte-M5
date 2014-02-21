<?php

class Empresa {
    private $transportistes;
    private $clients;
    private $vehicles;
    private $encarrecs;
    
    function __construct() {
        $this->transportistes = [];
        $this->clients = [];
        $this->vehicles = [];
        $this->encarrecs = [];
    }
    public function getTransportistes() {
        return $this->transportistes;
    }

    public function getClients() {
        return $this->clients;
    }

    public function getVehicles() {
        return $this->vehicles;
    }

    public function getEncarrecs() {
        return $this->encarrecs;
    }

    public function setTransportistes($transportistes) {
        $this->transportistes = $transportistes;
    }

    public function setClients($clients) {
        $this->clients = $clients;
    }

    public function setVehicles($vehicles) {
        $this->vehicles = $vehicles;
    }

    public function setEncarrecs($encarrecs) {
        $this->encarrecs = $encarrecs;
    }

    public function afegirTranspotista($transportista){
        array_push($this->transportistes,$transportista);
    }
    public function afegirClient($client){
        array_push($this->clients,$client);
    }
    public function afegirVehicle($vehicle){
        array_push($this->vehicles,$vehicle);
    }
}
