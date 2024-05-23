<?php
class Rectangle extends Shape{
    public function calculateArea()
    {
        echo "L'area del rectangle és " . ($this->height * $this->width);
    }
 }
 ?>