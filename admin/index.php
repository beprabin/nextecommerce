<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <!-- first child -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
                <img src="../images/nextecommerce.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- secold child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="../images/admin1.jpg" alt="admin" class="admin_image"></a>
                    <p class="text-light text-center">
                            admin name
                    </p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="nav-link text-light bg-success p-2">View Products</a></button>
                    <button><a href="insert_product.php" class="nav-link text-light bg-success p-2">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">View Categories</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-success p-2">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">View Brands</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-success p-2">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">List of users</a></button>
                    <button><a href="" class="nav-link text-light bg-success p-2">Logout</a></button>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- forth child -->
    <div class="container my-5">
        <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
        ?>
    </div>

<!-- last child -->
<div class="bg-success p-2 text-center text-light">
    <p>All right Reserved @Next ecommerce</p>
</div>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>