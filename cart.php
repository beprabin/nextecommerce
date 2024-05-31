<?php
include('includes/connect.php');
include('function/common_function.php');
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
  <style>
    .card-img {
      width: 290px;
      height: 150px;
      object-fit: contain;
    }
  </style>
  <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
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
          </ul>
        </div>
      </div>
    </nav>

    <!-- calling cart function -->


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

    <!-- Cart table -->
    <div class="container">
      <div class="row">
        <table class="table tabl-bordered text-center">
          <thead>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove</th>
            <th>Operation</th>
          </thead>
          <tbody>
            <tr>
              <td>Iphone 15</td>
              <td><img src="./images/iphone15.jpg" alt="" class="card-img"></td>
              <td>1</td>
              <td>190000</td>
              <td><input type="checkbox"></td>
              <td>
                <p>update</p>
                <p>delete</p>
              </td>
            </tr>
            <tr>
              <td>Iphone SE</td>
              <td><img src="./images/iphonese.jpg" alt="" class="card-img"></td>
              <td>1</td>
              <td>75000</td>
              <td><input type="checkbox"></td>
              <td>
                <p>update</p>
                <p>delete</p>
              </td>
            </tr>
            <tr>
              <td>Mouse</td>
              <td><img src="./images/mouse1.jpg" alt="" class="card-img"></td>
              <td>3</td>
              <td>10000</td>
              <td><input type="checkbox"></td>
              <td>
                <p>update</p>
                <p>delete</p>
              </td>
            </tr>

          </tbody>
        </table>
        <!-- sub total -->
        <div class="d-flex">
          <h4 class="px-3 text-white"> Sub-Total: <strong class="text-white">5000</strong></h4>
          <a href="index.php" class="pb-3 px-2"><button class="btn btn-success px-3 text-white border-0">Continue Shopping</button></a>
          <button class="btn btn-outline-dark px-2 text-white border-white" id="payment-button">Payment with Khalti</button>
        </div>
      </div>
    </div>
    <script>
      var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "paymentPreference": [
          "KHALTI",
        ],
        "eventHandler": {
          onSuccess(payload) {
            // hit merchant api for initiating verfication
            console.log(payload);
          },
          onError(error) {
            console.log(error);
          },
          onClose() {
            console.log('widget is closing');
          }
        }
      };

      var checkout = new KhaltiCheckout(config);
      var btn = document.getElementById("payment-button");
      btn.onclick = function() {
        // minimum transaction amount must be 10, i.e 1000 in paisa.
        checkout.show({
          amount: 1000
        });
      }
    </script>


    <!-- last child -->
    <?php
    include("./includes/footer.php");
    ?>
  </div>
  </div>

  <!-- Bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">


  </script>
</body>

</html>