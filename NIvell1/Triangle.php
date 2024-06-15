<?php
class Triangle extends Shape{
    public function calculateArea(): void{
        echo "L'area del triangle és " . ($this->height * $this->width)/2;
    }
 }
 ?>