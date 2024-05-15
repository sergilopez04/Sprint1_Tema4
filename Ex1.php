<?php
class Employee {
    private string $name;
    private int $salary;

    //constructor
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function greetings($name, $salary){
        if ($salary < 6000) {
            echo "Hola $name, no has de pagar impostos.";
        }
        else{
            echo "Hola $name, has de pagar impostos.";
        }
    }

}

?>