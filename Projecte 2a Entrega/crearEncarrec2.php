<?php
    session_start();
    include "includeClasses.inc.php";
    
    $error="";
    
    $data=$_REQUEST["data"];
    $distancia=$_REQUEST["distancia"];
    $nomClient=$_REQUEST["nomClient"];
    $volum=$_REQUEST["volum"];
    $descripcio=$_REQUEST["descripcio"];
    $desti=$_REQUEST["desti"];
    $despesa=$_REQUEST["despesa"];
    $codiTransportista=$_REQUEST["codiTransportista"];
    
    $transportista=$empresa->trobaTransportista($codiTransportista);
    
    try{
        $encarrec=new Encarrec($data, $distancia, $nomClient, $volum, $descripcio, $desti, $despesa);
        $assignarEncarrec=new AssignacioEncarrecTransportista($encarrec,$transportista);
    } catch (Exception $ex) {
        $error="S'ha produit un error al crear l'objecte encarrec";
    }
    try{
        $assignarEncarrec->Assignar();
    } catch (Exception $ex) {
        $error="Error al assignar l'encarrec al transportista";
    }
    if($error!=""){
        echo $error;
    }else{
        echo "S'ha creat correctament l'encarrec";
    }
    
?>