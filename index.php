<?php

class Car
{

    public function __construct()
    {
        echo "This is construct function <br>";

    }
    public function color()
    {
        echo 'Red <br>';
    }

    public function engine()
    {
        echo '4000cc <br>';
    }

    public function model()
    {
        echo 'BHY2026 <br>';
    }

    public function breakingSystem()
    {
        echo 'Hydrolic <br>';
    }

    public function callFunction()
    {
        $this->engine();
    }

    public function __destruct()
    {
        echo 'This is Destruct Funtion <br>';
    }

}

class Calculator
{
    public function __sum($num1, $num2)
    {
        $result = $num1 + $num2;
        return $result;
    }

    public function subtraction($num1, $num2)
    {
        $result = $num1 - $num2;
        return $result;
    }

    public function multipication($num1, $num2)
    {
        $result = $num1 * $num2;
        return $result;
    }

    public function division($num1, $num2)
    {
        $result = $num1 / $num2;
        return $result;

    }

}


$objectCar = new car();

$objectCar->color();
$objectCar->callFunction();
$objectCar->breakingSystem();



// $objectCalculator = new Calculator();
// echo $objectCalculator->multipication(num1:11, num2: 5);
// echo '<br>';
// echo $objectCalculator->division(num1:10, num2:5);

?>