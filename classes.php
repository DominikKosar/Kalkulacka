<?php
    class Kalkulacka{
        public $firstNumber;
        public $secondNumber;

        public function scitani($firstNumber, $secondNumber){
            echo "Součet: ".($firstNumber + $secondNumber);
            echo "<br>";
        }

        public function odcitani($firstNumber, $secondNumber){
            echo "Rozdíl: ".($firstNumber - $secondNumber);
            echo "<br>";
        }

        public function nasobeni($firstNumber, $secondNumber){
            echo "Násobek: ".($firstNumber * $secondNumber);
            echo "<br>";
        }

        public function deleni($firstNumber, $secondNumber){
            if($secondNumber != 0){
                echo "Podíl: ".($firstNumber / $secondNumber);
                echo "<br>";
            } else{
                echo "POZOR, snažíte se dělit nulou";
            }

        }
    }
?>