<?php 


require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/FoodProduct.php';
require_once __DIR__ . '/Model/KennelProduct.php';
require_once __DIR__ . '/data/products.php';





?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>php-oop-2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-warning-subtle text-secondary">

<h1 class=" text-center mt-3 mb-5 text-warning">PHP-OOP-2</h1>

<div class="container">
  <div class="row row-cols-2">


    <?php foreach($products as $product) : ?>

      <div class="col d-flex  justify-content-center ">

        <div class="card mb-5 w-50 bg-warning text-white ">

          <img class="p-2" src="<?php echo $product->poster; ?>" class="card-img-top" alt="Category Logo">

          <div class="card-body text-center ">

            <h2 class="mb-4"><?php echo $product->name; ?></h2>

            <p>Price: <?php echo $product->price; ?></p>
            
            <?php if ($product instanceof FoodProduct) : ?>

              <p>Ingredients: <?php echo implode(', ', $product->ingredients); ?></p>

              <p class="mb-4">Weight: <?php echo $product->weight; ?> kg</p>

            <?php elseif ($product instanceof KennelProduct) : ?>

              <p class="mb-4">Dimensions: <?php echo implode(' x ', $product->dimensions); ?></p>

            <?php endif; ?>

            <div class="d-flex flex-column align-items-center ">

            <p class="me-1">Category:</p>

            <img class="d-block logoBox" src="<?php echo $product->category_logo; ?>" alt="<?php echo $product->category; ?>">

            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

  
</body>
</html>