<?php
include('includes/connect.php');
include('function/common_function.php');
include('signinform.php');
include('signupform.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Next E-commerce</title>
  <link rel="icon" type="image/x-icon" href="./images/nextecommerce.png">
  <!-- Bootstrap css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link -->
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url(images/background.png); background-size:cover">

  <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <img src="./images/nextecommerce.png" alt="logo" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="display_all_products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping text-light"></i><sup class="text-light"><?php cart_item_number(); ?></sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#register" type="Sign up" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#signin" type="Sign in" href="#!">Sign In</a>
            </li>

          </ul>

          <form class="d-flex" role="search" action="search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
            <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>

    <!-- calling cart function -->
    <?php
    cart();
    ?>

    <!-- second child -->
    <!-- <nav class="navbar navbar-expand-ig navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log in</a>
        </li>
    </ul>
</nav> -->
    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Next Ecommerce</h3>
      <p class="text-center">
        Get your product @Nextecommerce
      </p>
    </div>

    <!-- fourth child -->
    <div class="row" style="width: 100vw;">
      <div class="col-md-2 p-0" style="box-shadow: 2px 2px 4px gray; background-color:white ">
        <!-- side nav -->
        <ul class="navbar-nav me-auto">
          <li class="nav-item bg-success">
            <a href="#" class="nav-link text-light text-center">
              <h4>Categories</h4>
            </a>
          </li>
          <?php
          // calling functionm
          getcategories();
          ?>

        </ul>
        <ul class="navbar-nav me-auto">
          <li class="nav-item bg-success">
            <a href="#" class="nav-link text-light text-center">
              <h4>Brands</h4>
            </a>
          </li>
          <?php
          getbrands();
          ?>
        </ul>
      </div>
      <div class="col-md-10 m-0">
        <!-- products -->
        <div class="row">
          <!-- fetching products -->
          <?php
          // calling funciton
          getproducts();
          getuniqueproducts();
          getuniquebrands();
          // $ip = getIPAddress();
          // echo 'User Real IP address - '.$ip;
          ?>
        </div>
      </div>

      <!-- last child -->
      <?php
      include("./includes/footer.php");
      ?>
    </div>
  </div>

  <!-- Bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>