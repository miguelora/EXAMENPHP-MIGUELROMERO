<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3.php</title>
</head>
<body>


    <?php

        if (isset($_POST["EntradaGeneral"])){
            
            $operador = $_POST["despliega"];

            $EntradaGeneral = $_POST["EntradaGeneral"];
                $entrada1 = $EntradaGeneral["entrada1"];
                $entrada2 = $EntradaGeneral["entrada2"];
                $entrada3 = $EntradaGeneral["entrada3"];
                $entrada4 = $EntradaGeneral["entrada4"];
                $entrada5 = $EntradaGeneral["entrada5"];

            function primer($EntradaGeneral){

                $res = array_shift($EntradaGeneral);
                print_r($EntradaGeneral);

            }
            function ultimo($EntradaGeneral){

                $res = array_pop($EntradaGeneral);
                print_r($EntradaGeneral);


            }
            function order($EntradaGeneral){

                $res = arsort($EntradaGeneral);
                print_r($EntradaGeneral);


            }
            function div($EntradaGeneral){

                print_r(array_chunk($EntradaGeneral,2, true));


            }

            switch ($operador) {
                case 'primer':
                   primer($EntradaGeneral);
                    break;
                
                case 'ultimo': 
                    ultimo($EntradaGeneral);
                    break;
                case 'order': 
                    order($EntradaGeneral);
                    break;
                case 'div':
                    div($EntradaGeneral);
                    break;
                
            }






        }else {
            echo "No funciona";
        }





















    ?>






    
</body>
</html>