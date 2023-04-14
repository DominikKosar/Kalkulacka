<?php
    class Kalkulacka{
        public $firstNumber;
        public $secondNumber;

        public function scitani($firstNumber, $secondNumber){
            echo $firstNumber + $secondNumber;
            echo "<br>";
        }

        public function odcitani($firstNumber, $secondNumber){
            echo $firstNumber - $secondNumber;
            echo "<br>";
        }

        public function nasobeni($firstNumber, $secondNumber){
            echo $firstNumber * $secondNumber;
            echo "<br>";
        }

        public function deleni($firstNumber, $secondNumber){
            echo $firstNumber / $secondNumber;
            echo "<br>";
        }
    }
?>