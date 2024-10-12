<?php

    require_once '../models/Pizza.php';
    require_once '../models/Order.php';
    session_start();
    // Retrieve the pizza object from the session
    $pizza = isset($_SESSION['pizza']) ? unserialize($_SESSION['pizza']) : null;
    $order = isset($_SESSION['order']) ? unserialize($_SESSION['order']) : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Order Successful!</h1>
    <p>Your pizza order has been placed successfully.</p>

    <h2> Order Details </h2>
    <p>
        Pizza Type: <?php echo htmlspecialchars($pizza->gettype()); ?><br>
    </p>
    <p>
        Quantity: <?php echo htmlspecialchars($order->getQuantity()); ?><br>
    </p>
</body>
</html>