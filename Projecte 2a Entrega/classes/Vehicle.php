<?php

class Vehicle {
    private $codi;
    private $capacitat;
    private $model;
    private $color;
    private $matricula;
    
    function __construct($codi, $capacitat, $model, $color, $matricula) {
        $this->codi = $codi;
        $this->capacitat = $capacitat;
        $this->model = $model;
        $this->color = $color;
        $this->matricula = $matricula;
    }

    public function getCodi() {
        return $this->codi;
    }

    public function getCapacitat() {
        return $this->capacitat;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setCodi($codi) {
        $this->codi = $codi;
    }

    public function setCapacitat($capacitat) {
        $this->capacitat = $capacitat;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    
}
