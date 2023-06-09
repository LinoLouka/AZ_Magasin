<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>AZ_Magasin</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <div class="shopping-cart-container">
    <table>
        <thead>
            <tr>
                <th> Product </th>
                <th> Price </th>
                <th> Quantity </th>
  			    <th> Subtotal </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>kk</td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="total-container">
    <table>
        <thead>
            <th>Cart Totals</th>
        </thead>
        <tbody>
            <th>Total</th>
        </tbody>
    </table>
    <a href="checkout.php">Proceed to checkout</a>
    </div>
    <?php
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    
    if (isset($_POST['add_panier'])) {
        $product_id = $_POST['product_id'];
        $_SESSION['panier'][$product_id] = 1;

        // header('Location: index.php');
        // exit();
    }

    if (isset($_GET['delete'])) {
        $product_id = $_GET['delete'];
        unset($_SESSION['panier'][$product_id]);
    }
    ?>

</body>
</html>