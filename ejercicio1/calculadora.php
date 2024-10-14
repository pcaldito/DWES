<?php
    class calcular{
        public function suma($a,$b){
            return $a + $b;
        }

        public function resta($a,$b){
            return $a - $b;
        }

        public function multiplicar($a,$b){
            return $a * $b;
        }

        public function dividir($a,$b){
            return $a / $b;
        }
        
    }

    $resultado=null;
     
    //cogemos los numeros y el operador del formulario
    if (isset($_GET['numero1'], $_GET['numero2'], $_GET['operador'])) {
        $numero1= $_GET['numero1'];
        $numero2= $_GET['numero2'];
        $operador= $_GET['operador'];

        //comprobamos el mayor y el menor
        $mayor=max($numero1,$numero2);
        $menor=min($numero1,$numero2);

        $objCalculadora=new calcular();

        switch($operador){
            case '+':
                $resultado= $objCalculadora->sumar($mayor, $menor);
                break;
            case '-':
                $resultado= $objCalculadora->restar($mayor, $menor);
                break;
            case '*':
                $resultado= $objCalculadora->multiplicar($mayor, $menor);
                break;
            case '/':
                $resultado= $objCalculadora->dividir($mayor, $menor);
                break;
        }
     }

     echo 'El resultado de  $numero1 $operador $numero2 es '.$resultado;
?>