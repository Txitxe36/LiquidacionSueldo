<?php
    function calcularAtiguedad($fechaIng, $fechaAct){

        $datetime1=date_create($fechaIng);
        $datetime2=date_create($fechaAct);
        $interval=date_diff($datetime1,$datetime2);

        $tiempo=array();

        foreach($interval as $valor){
            $tiempo[]=$valor;
        }

        return $tiempo;

    }
?>