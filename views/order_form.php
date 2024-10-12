<!DOCTYPE html>
<html>
<head>
    <title>Order Pizza</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h1>Order Pizza</h1>
    <form action="../orderPizza.php" method="post">
        <label for="pizza_type">Pizza Type:</label>
        <select name="pizza_type" id="pizza_type">
            <option value="Margherita">Margherita</option>
            <option value="Pepperoni">Pepperoni</option>
            <option value="Hawaiian">Hawaiian</option>
        </select>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>
        <br>
        <button type="submit">Order</button>
    </form>
</body>
</html>