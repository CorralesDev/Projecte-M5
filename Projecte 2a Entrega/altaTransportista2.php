<?php
    session_start();
    include "includeClasses.inc.php";
    
    $error="";
    
    $codi=$_REQUEST["codi"];
    $dni=$_REQUEST["dni"];
    $nom=$_REQUEST["nom"];
    $cognoms=$_REQUEST["cognoms"];
    $telefon=$_REQUEST["telefon"];
    $adreca=$_REQUEST["adreca"];
    $poblacio=$_REQUEST["poblacio"];
    $provincia=$_REQUEST["provincia"];
    $codiPostal=$_REQUEST["codiPostal"];
    $encarrecs=$_REQUEST["encarrecs"];
        
    try{
        $transportista=new Transportista($codi, $dni, $nom, $cognoms, $telefon, $adreca, $poblacio, $provincia, $codiPostal, $encarrecs);
    } catch (Exception $ex) {
        $error="S'ha produit un error al crear l'objecte transportista";
    }
    try{
        $empresa->afegirTransportista($transportista);
    } catch (Exception $ex) {
        $error="Error al afegir transportista";
    }
    if($error!=""){
        echo $error;
    }else{
        echo "S'ha afegir correctament";
    }
    
?>