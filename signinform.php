<?php
//   include('includes/connect.php');
//   include('function/common_function.php');
//   include('signupform.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextecommerce</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom styles for the Sign In modal */
        .modal-content {
            border-radius: 10px;
        }

        .modal-con>.modal-header {
            background-color: #258a54;
            color: white;
            /* border-bottom: 2px solid #28a745; */
        }

        .modal-title {
            font-size: 1.5rem;
        }

        .modal-body {
            padding: 20px;
        }

        form label {
            font-weight: bold;
        }

        form input {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }

        .modal-footer .btn-primary {
            background-color: #258a54;
            color: white;
            border: none;
        }

        .modal-footer .btn-primary:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <!-- Modal for Sign In -->
    <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="display:flex; flex-flow:row nowrap; background-image: url(images/background.png); background-size:cover">
                <div class="img-con">
                    <img src="./images/nextecommerce.png" alt="" style="width: 200px; height:310px" class="p-3">
                </div>
                <div class="modal-con" style="display:flex;flex-flow:column nowrap">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="exampleModalLabel">Sign In</h1>
                        <button type="button" class="btn-close white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="authenticate.php" method="POST">
                            <label for="username" class="text-white">Email:</label>
                            <input type="text" id="email" name="email" required><br>

                            <label for="password" class="text-white">Password:</label>
                            <input type="password" id="password" name="password" required><br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary text-white">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>