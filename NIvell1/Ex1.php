<?php
class Employee {
    private string $name;
    private int $salary;

    // Constructor
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    // Método para imprimir saludo y mensaje sobre impuestos
    public function greetings(){
        if ($this->salary <= 6000) {
            echo "Hola $this->name, no has de pagar impostos.\n";
        } else {
            echo "Hola $this->name, has de pagar impostos.\n";
        }
    }
}

// Crear una instancia de la clase Employee
$employee1 = new Employee("Sergi", 2000);
$employee2 = new Employee("Alex", 6001);
// Llamar al método greetings
$employee1->greetings().PHP_EOL;
$employee2->greetings().PHP_EOL;

?>
