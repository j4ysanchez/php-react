<?php
class Order {
    private $pizza;
    private $quantity;

    public function __construct($pizza, $quantity) {
        $this->pizza = $pizza;
        $this->quantity = $quantity;
    }

    public function getPizza() {
        return $this->pizza;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}
?>