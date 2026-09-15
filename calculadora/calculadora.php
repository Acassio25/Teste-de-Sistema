<?php 
class calculadora {
    private $valorA;
    private $valorB;

    public function __construct() {
        $this->valorA = 0;
        $this->valorB = 0;
    }

    public function somar($a, $b) {
        $this->valorA = $a;
        $this->valorB = $b;
        return $this->valorA + $this->valorB;
    }

    public function subtrair($a, $b) {
        $this->valorA = $a;
        $this->valorB = $b;
        return $this->valorA - $this->valorB;
        
    }

    public function multiplicar($a, $b) {
        $this->valorA = $a;
        $this->valorB = $b;
        return $this->valorA * $this->valorB;
       
    }

    public function dividir($a, $b) {
        $this->valorA = $a;
        $this->valorB = $b;
        if ($this->valorB == 0) {
            throw new Exception("Divisão por zero não é permitida.");
        }
        return $this->valorA / $this->valorB;
    }
}

?>