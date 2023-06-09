<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AZ_Magasin</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include './assets/views/partials/header.php'; ?>

<body>
  <main>
    <div id="top">
      <h1>SHOE THE RIGHT ONE.</h1>
      <img src="./assets/img/shoe_one.png" alt="chaussure nike1">
      <input type="submit" id="shoestop" value="See our store">
    </div>
    <section id="display_last-products">
      <h2>Our last products</h2>
      <?php


      $shoes = [
        [
          'id' => 1,
          'product' => 'Nike Air Max 270',
          'price' => 160,
          'image_url' => './assets/img/shoe_one.png'
        ],
        [
          'id' => 2,
          'product' => 'Nike Air Max 270',
          'price' => 160,
          'image_url' => './assets/img/shoe_two.png'
        ]
      ];

      function repeatShoes($shoes, $repetitions)
      {
        $result = [];

        foreach ($shoes as $shoe) {
          if ($shoe['id'] === 1) {
            for ($i = 0; $i < $repetitions; $i++) {
              $result[] = $shoe;
            }
          } else {
            $result[] = $shoe;
          }
        }

        return $result;
      }

      $repeatedShoes = repeatShoes($shoes, 4);

      // Afficher les chaussures
      foreach ($repeatedShoes as $shoe) {
        if ($shoe['id'] === 1) {
          echo '<div class="items">';
          echo '<img src="' . $shoe['image_url'] . '" alt="' . $shoe['product'] . '"><br>';
          echo '<p>Product: ' . $shoe['product'] . ', Price: ' . $shoe['price'], '</p>';
          echo '<input type="submit" class="shoes" value="Add to cart">';
          echo '</div>';
        }
      }


      ?>
    </section>
    <div id="bottom">
      <img src="./assets/img/shoe_two.png" alt="chaussure nike2">
      <h2>WE PROVIDE YOU THE BEST QUALITY.</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quisquam molestiae temporibus, voluptas commodi iste exercitationem nisi eveniet maxime, porro doloribus dolor voluptates, fuga quibusdam est? Fugit unde impedit asperiores.</p>
    </div>
    <section id="user-reviews">
      <div id="emily">
        <img src="./assets/img/image-emily.jpg" alt="photo d'Emily">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam provident, tenetur culpa earum maiores adipisci nobis asperiores impedit? Distinctio, repudiandae veniam. Dolorem laborum, quia doloremque animi asperiores temporibus modi necessitatibus!</p>
      </div>
      <div id="thomas">
        <img src="./assets/img/image-thomas.jpg" alt="photo de Thomas">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, provident aspernatur? Perspiciatis ab dolor adipisci tempore itaque cum, aliquid voluptate magni, sequi debitis nostrum necessitatibus qui ipsa similique nihil rerum.</p>
      </div>
      <div id="jennie">
        <img src="./assets/img/image-jennie.jpg" alt="photo de Jennie">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit suscipit numquam cum officiis eveniet, mollitia voluptas? Quia totam perferendis, eius facere ipsam ducimus autem similique hic, vitae dignissimos inventore distinctio.</p>
      </div>
    </section>
  </main>
</body>
<?php include './assets/views/partials/footer.php'; ?>

</html>