<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ_Magasin</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div id="checkout_form">
        <h2 id="form_title">Shipping Informations</h2>
        <form method="post" action="checkout.php">


            <div class="form_data"><label for="first_name">First Name:</label>
                <input type="text" class="" name="first_name" required><br><br>
            </div>

            <div class="form_data"><label for="last_name">Last Name:</label>
                <input type="text" class="form_input" name="last_name" required><br><br>
            </div>

            <div class="form_data"><label for="email">Email:</label>
                <input type="email" class="form_input" name="email" required><br><br>
            </div>

            <div class="form_data"><label for="address">Address:</label>
                <input type="text" class="form_input" name="address" required><br><br>
            </div>

            <div class="form_data"><label for="city">City:</label>
                <input type="text" class="form_input" name="city" required><br><br>
            </div>

            <div class="form_data"><label for="zip_code">Zip Code:</label>
                <input type="number" class="form_input" name="zip_code" required><br><br>
            </div>

            <div class="form_data"><label for="country">Country:</label>
                <input type="text" class="form_input" required>
            </div>


            </select><br><br>

            <div id="checkout-btn-container">
                <button type="submit" id="checkout-btn" name="submit">Checkout</button>
            </div>

        </form>
    </div>
</body>

</html>

<?php
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
$shopping_cart = "";

if (isset($_POST['submit'])) {
    $firstName = sanitizeInput($_POST['first_name']);
    $lastName = sanitizeInput($_POST['last_name']);
    $email = sanitizeInput($_POST['email']);
    $address = sanitizeInput($_POST['address']);
    $city = sanitizeInput($_POST['city']);
    $zipCode = sanitizeInput($_POST['zip_code']);
    $country = sanitizeInput($_POST['country']);


    $data = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'address' => $address,
        'city' => $city,
        'zip_code' => $zipCode,
        'country' => $country
    ];

    $jsonData = json_encode($data);
    file_put_contents("shopping-cart.json", $jsonData);


    echo "Thank you for your order!";

    file_put_contents("shopping-cart.json", json_encode([]));
}
?>