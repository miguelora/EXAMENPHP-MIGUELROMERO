<?php

    $saldo = $_POST["saldo"];
    $operador = $_POST["enviar"];




    function calsal($saldo){

      if ($saldo < 10000) {
          print "Su tipo impositivo es 5%"."<br>";
          $res = $saldo*0.05;
          print "Tienes que pagar : ".$res;
      }elseif ($saldo <= 2000) {
          print "Su tipo impositivo es 15%"."<br>";
          $res = $saldo*0.15;
          print "Tiene que pagar : ".$res;
      }elseif ($saldo <= 35000 ) {
        print "Su tipo impositivo es 20%"."<br>";
        $res = $saldo*0.20;
        print "Tiene que pagar : ".$res;
      }elseif ($saldo <= 60000) {
        print "Su tipo impositivo es 30%"."<br>";
        $res = $saldo*0.30;
        print "Tiene que pagar : ".$res;
      }else {
        print "Su tipo impositivo es 45%"."<br>";
        $res = $saldo*0.45;
        print "Tiene que pagar : ".$res;
      }
    
      
    
    
    
    
    }

    
    
    
    
    
    




































?>