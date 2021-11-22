<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConversorBB.php</title>
</head>
<body>
    <?php

        $recogeNUM = $_POST["numero1"];
        $operador = $_POST["despliega"];
        $aleatorio = $_POST["alea"];
        





        function de_bin($recogeNUM){

            $res = decbin($recogeNUM);
            print "La conversión es :".$res;
            

        }


        function de_oct ($recogeNUM){

            $res = decoct($recogeNUM);
            print "La conversion es :".$res;

        }

        function de_hex($recogeNUM){

            $res = dechex($recogeNUM);
            print "La conversion es :".$res;



        }

        function bin_dec($recogeNUM){

            $res = bindec($recogeNUM);
            print "La conversion es : ".$res;

        }

        function oct_dec($recogeNUM){

            $res = octdec($recogeNUM);
            print "La conversion es : ".$res;

        }

        function hex_dec($recogeNUM){

            $res = hexdec($recogeNUM);
            print "La conversion es : ".$res;

        }







        if ($aleatorio = 'SI') {
            rand(0, 2048)
        }







        switch ($operador) {
            case 'de_bin':
               de_bin($recogeNUM);
                break;
            
            case 'de_oct': 
                de_oct($recogeNUM);
                break;
            case 'de_hex': 
                de_hex($recogeNUM);
                break;
            case 'bin_de':
                bin_dec($recogeNUM);
                break;
            case 'oct_de':
                oct_dec($recogeNUM);
                break;
            case 'hex_de':
                hex_dec($recogeNUM);
                break;
        }



    
    
    
    
    
    
    
    
    
    
    
    ?>












</body>
</html>