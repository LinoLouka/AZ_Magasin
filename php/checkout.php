<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <input type="text" id="form_zip_code" name="zip_code" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="form_country" required>


        </select><br><br>

        <input type="submit" value="Submit">

    </form>
</body>

</html>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipCode = $_POST['zip_code'];
    $country = $_POST['country'];

    echo "Thank you for your order!";
}
?>