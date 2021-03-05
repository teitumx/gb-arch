<?php

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;

        return $area;
    }
}

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;

        return $area;
    }
}

interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}

//

interface areaAdapter {
    public function getArea(int $area);
}

class CircleAdapter implements areaAdapter, ICircle {

    private $circle;

    public function __construct($circle)
    {
        $this->circle = $circle;
    }

    public function getArea($area)
    {
        $this->circle->getCircleArea($area);
    }

    public function circleArea(int $circumference)
    {
        $area = pow($circumference, 2) / (4 * M_PI) ;

        return $area;
    }

}

class SquareAdapter implements areaAdapter, ISquare {

    private $square;

    public function __construct($square)
    {
        $this->square = $square;
    }

    public function getArea(int $area)
    {
        $this->square->getSquareArea($area);
    }

    public function squareArea(int $sideSquare)
    {
        $area = pow($sideSquare, 2);

        return $area;
    }
}

$circle = new CircleAdapter(new CircleAreaLib);
echo $circle->getArea(7), PHP_EOL;
echo $circle->circleArea(1);


