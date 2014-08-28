<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        function factorial($numero) { 
            $result=1;
            for ($x=$numero; $x>0; $x--){
                $result*= $x;
                
            }
            return $result;
        }
        
        echo 'El resultado de 4! es: '.  factorial(4);
        
        ?>
    </body>
</html>
