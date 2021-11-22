<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2.php</title>
</head>
<body>
    
    <?php

        $recoge1 = $_POST["texto1"];
        $recoge2 = $_POST["texto2"];
        $operador = $_POST["despliega"];     


        function mayus($recoge1){

            $res = strtoupper($recoge1);
            print "El nuevo texto es: ".$res;



        }

        function desor($recoge1){

            $res = str_shuffle($recoge1);
            print "El nuevo texto es: ".$res;



        }

        function arra($recoge1){

            $res = str_split($recoge1);
            print_r($res);



        }

        function contar($recoge1){

            $res = str_word_count($recoge1);
            print "El nuevo texto es: ".$res;



        }

        function reem($recoge1,$recoge2){

            $res = str_replace($recoge1,"",$recoge2);
            print "El nuevo texto es: ".$res;



        }



        switch ($operador) {
            case 'mayus':
               mayus($recoge1);
                break;
            
            case 'desor': 
                desor($recoge1);
                break;
            case 'arra': 
                arra($recoge1);
                break;
            case 'cont':
                contar($recoge1);
                break;
            case 'change':
                reem($recoge1,$recoge2,$recoge2);
                break;
        }




    ?>









</body>
</html>