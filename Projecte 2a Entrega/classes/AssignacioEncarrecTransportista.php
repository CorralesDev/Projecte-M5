<?php

class AssignacioEncarrecTransportista {
    private $encarrec;
    private $transportista;
    
    function __construct($encarrec, $transportista) {
        $this->encarrec = $encarrec;
        $this->transportista = $transportista;
    }
    
    public function getEncarrec() {
        return $this->encarrec;
    }

    public function getTransportista() {
        return $this->transportista;
    }

    public function setEncarrec($encarrec) {
        $this->encarrec = $encarrec;
    }

    public function setTransportista($transportista) {
        $this->transportista = $transportista;
    }
    
    public function Assignar(){
        array_push($this->transportista->encarrecs,$this->encarrec);
        return $this->transportista;
    }
}

?>