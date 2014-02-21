<?php
    session_start();
    include "includeClasses.inc.php";
    
    $error="";
    
    $codi=$_REQUEST["codi"];
    $capacitat=$_REQUEST["capacitat"];
    $model=$_REQUEST["model"];
    $color=$_REQUEST["color"];
    $matricula=$_REQUEST["matricula"];
        
    try{
        $vehicle=new Vehicle($codi, $capacitat, $model, $color, $matricula);
    } catch (Exception $ex) {
        $error="S'ha produit un error al crear l'objecte vehicle";
    }
    try{
        $empresa->afegirVehicle($vehicle);
    } catch (Exception $ex) {
        $error="Error al afegir vehicle";
    }
    if($error!=""){
        echo $error;
    }else{
		print_r($vehicle);
        echo "S'ha afegir correctament";
    }
    
?>
