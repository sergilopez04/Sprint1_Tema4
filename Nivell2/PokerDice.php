<?php
class pokerDice{
    public static $faces = ["As", "K", "Q", "J", "7", "8"];
    public static $totalThrows = 0;
    public $currentFace;
    public $throws;


    public function __construct(){
        $this->currentFace = null;
        $this->throws = 0;
    } 

    public function throw(){
        $this->currentFace = self::$faces[array_rand(self::$faces)];
        self::$totalThrows++;
    }
}

?>