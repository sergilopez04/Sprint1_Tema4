<?php
 class Shape{
    protected $height;
    protected $width;

    public function __construct(float $height, float $width){
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea(){}
 }

 class Triangle extends Shape{
    public function calculateArea(): void{
        echo "L'area del triangle és " . ($this->height * $this->width)/2;
    }
 }

 class Rentangle extends Shape{
    public function calculateArea()
    {
        echo "L'area del rectangle és " . ($this->height * $this->width);
    }
 }

 //creació objectes 
$rectangle = new Rentangle(57.8, 34.3);
$triangle = new Triangle(23.5, 47.8);

//accés a funcions
echo $rectangle ->calculateArea().PHP_EOL;
echo $triangle ->calculateArea().PHP_EOL;

?>