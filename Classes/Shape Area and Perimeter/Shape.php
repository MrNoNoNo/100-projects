<?php

/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 25-Jun-17
 * Time: 8:30 PM
 */
abstract class Shape
{

    abstract public function area();

    abstract public function perimeter();
}

class Rectangle extends Shape
{

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {

        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}

class Circle extends Shape {

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return M_PI * $this->radius * $this->radius;
    }

    public function perimeter()
    {
        return 2 * M_PI * $this->radius;
    }
}

class Triangle extends Shape {

    public function __construct($sideA, $sideB, $sideC) {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function area() {
        $s = ($this->sideA + $this->sideB + $this->sideC) / 2;
        return sqrt($s * ($s - $this->sideA) * ($s - $this->sideB) * ($s - $this->sideC));
    }

    public function perimeter() {
        return $this->sideA + $this->sideB + $this->sideC;
    }
}

$trian = new Triangle('10', '15', '22');

echo sprintf("%.2F", $trian->area());
