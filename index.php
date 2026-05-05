<?php

// class Car
// {

//     public function __construct()
//     {
//         echo "This is constructor function <br>";

//     }
//     public function color()
//     {
//         echo 'Red <br>';
//     }

//     public function engine()
//     {
//         echo '4000cc <br>';
//     }

//     public function model()
//     {
//         echo 'BHY2026 <br>';
//     }

//     public function breakingSystem()
//     {
//         echo 'Hydrolic <br>';
//     }

//     public function callFunction()
//     {
//         $this->engine();
//     }

//     public function __destruct()
//     {
//         echo 'This is destructor funtion <br>';
//     }

// }

// class Calculator
// {
//     public function __sum($num1, $num2)
//     {
//         $result = $num1 + $num2;
//         return $result;
//     }

//     public function subtraction($num1, $num2)
//     {
//         $result = $num1 - $num2;
//         return $result;
//     }

//     public function multipication($num1, $num2)
//     {
//         $result = $num1 * $num2;
//         return $result;
//     }

//     public function division($num1, $num2)
//     {
//         $result = $num1 / $num2;
//         return $result;

//     }

// }





// $objectCar = new car();

// $objectCar->color();
// $objectCar->callFunction();
// $objectCar->breakingSystem();

// $objectCalculator = new Calculator();
// echo $objectCalculator->multipication(num1:11, num2: 5);
// echo '<br>';
// echo $objectCalculator->division(num1:10, num2:5);

class Parents
{
    public function flat()
    {
        echo "18Hk Flat <br>";
    }

    public function car()
    {
        echo "BMW Car <br>";
    }

    protected function bankAccount()
    {
        echo "Account Details : JUIUYNBFXKJL <br>";
    }

    private function diary()
    {
        echo "Personal Diary <br>";
    }
    public function useProperty()
    {
        $this->car();
        $this->bankAccount();
    }


}

class Child extends Parents
{
    public function useParentProperty()
    {

        $this->car();
        $this->bankAccount();
        //$this->diary(); no permission for use
    }
    public function bike()
    {
        echo "Royal Enfild <br>";
    }

}


// $objectParent = new Parents();
// $objectParent->useProperty();
// $objectParent->diary();
// $objectParent->bankAccount();

$objectChild = new Child();
$objectChild->bike();
$objectChild->flat();
$objectChild->useParentProperty();

//$objectChild->bankAccount(); no permission for use


?>