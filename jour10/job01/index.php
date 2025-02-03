<?php

class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 5, $nombre2 = 10) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

$operation = new Operation();

echo "nombre1: " . $operation->nombre1 . "<br>";
echo "nombre2: " . $operation->nombre2 . "<br>";

?>
