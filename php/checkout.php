<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css">
    <title>AZ_Magasin</title>
</head>

<body>
    <h2>Shipping Information</h2>
    <form method="post" action="process_form.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="form_first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="form_last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="form_email" name="email" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="form_address" name="address" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="form_city" name="city" required><br><br>

        <label for="zip_code">Zip Code:</label>
        <input type="number" id="form_zip_code" name="zip_code" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="form_country" required>


        </select><br><br>

        <button type="submit" id="checkout-btn">Checkout</button>

    </form>
</body>

</html>

<?php
$shopping_cart = "";

if (isset($_POST['submit'])) {
    $firstName = isset($_POST['first_name']);
    $lastName = isset($_POST['last_name']);
    $email = isset($_POST['email']);
    $address = isset($_POST['address']);
    $city = isset($_POST['city']);
    $zipCode = isset($_POST['zip_code']);
    $country = isset($_POST['country']);


    echo "Thank you for your order!";

    file_put_contents("shopping-cart.json", json_encode([]));
}
?>