<?php
//   include('includes/connect.php');
//   include('function/common_function.php');
//   include('signinform.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up as User</title>
    <link rel="icon" type="image/x-icon" href="./images/nextecommerce.png">
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

        .modal-header {
            background-color: #258a54;
            color: white;
            border-bottom: 2px solid #258a54;
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
    <!-- Modal for registration -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-image: url(images/background.png); background-size:cover">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Register Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <label for="userName" class="text-white">Username:</label>
                        <input type="text" id="user_name" name="user_name" required /><br>

                        <label for="email" class="text-white">Email:</label>
                        <input type="email" id="user_email" name="user_email" required /><br>

                        <label for="password" class="text-white">Password:</label>
                        <input type="password" id="user_password" name="user_password" required /><br>

                        <label for="user_image" class="text-white">User Image:</label>
                        <input type="file" id="user_image" name="user_image" required /><br>

                        <!-- <label for="userIPaddress" class="text-white">Username:</label>
                        <input type="text" id="user_ip" name="user_ip" required /><br> -->

                        <label for="address" class="text-white">Address:</label>
                        <input type="text" id="user_address" name="user_address" required /><br>

                        <label for="phoneNumber" class="text-white">Phone Number:</label>
                        <input type="text" id="user_phone" name="user_phone" required /><br>



                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>