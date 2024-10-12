<?php

session_start();

require_once 'models/Pizza.php';
require_once 'models/Order.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pizzaType = $_POST['pizza_type'];
    $quantity = $_POST['quantity'];

    $pizza = new Pizza($pizzaType);
    $order = new Order($pizza, $quantity);

    // Process the order (e.g., save to database, send email, etc.)
    $_SESSION['pizza'] = serialize($pizza);
    $_SESSION['order'] = serialize($order);
    header('Location: views/order_success.php');
    exit();
}
?>