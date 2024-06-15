<?php
class Rectangle extends Shape{
    public function calculateArea(): void{
        echo "L'area del rectangle és " . ($this->height * $this->width);
    }
 }
 ?>