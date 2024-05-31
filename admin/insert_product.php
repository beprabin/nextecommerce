<?php 
  include('../includes/connect.php');
  if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keyword=$_POST['product_keywords'];
    $product_category=$_POST['product_categories'];
    $product_brand=$_POST['product_brands'];
    $product_p=$_POST['product_price'];
    $product_status="true";
    // accessing images
    $prod_image1=$_FILES['product_image1']['name'];
    $prod_image2=$_FILES['product_image2']['name'];
    $prod_image3=$_FILES['product_image3']['name'];

    // accessing image temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    // checking empty condition
    if($product_title=='' or $product_description='' or $product_keywords=''or $product_categories='' or $product_brands='' or $product_price='' or  $product_image1=''or  $product_image2='' or $product_image3=''){
        echo "<script>
            alert('Please insert all the filled')
        </script>";
        exit();
    }else{
        move_uploaded_file($temp_image2,"./product_images/$prod_image2");
        move_uploaded_file($temp_image1,"./product_images/$prod_image1");
        move_uploaded_file($temp_image3,"./product_images/$prod_image3");
    
        // insert query
        $insert_products="insert into products (product_title,product_description,product_keywords,
        categories_id,brands_id,product_image1,product_image2,product_image3,product_price,date,status)
         values ('$product_title','$description','$product_keyword','$product_category',
         '$product_brand','$prod_image1','$prod_image2','$prod_image3','$product_p',
         NOW(),'$product_status')";    
        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('Successfully inserted')</script>";
        } 
    }   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Insert Product</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Name" autocomplete="off" required="required">

            </div>
             <!-- Description -->
             <div class="form-outline mb-3 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
             </div>
            <!-- product_keywords -->
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Keywords" autocomplete="off" required="required">
            </div>
            <!-- Categories -->
            <div class="form-outline mb-2 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a categories</option>
                    <?php
                        $select_query="select * from categories";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['categories_title'];
                            $category_id=$row['categories_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                    
                </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-3 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a brands</option>
                    <?php
                        $select_query="select * from brands";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title=$row['brands_title'];
                            $brand_id=$row['brands_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- product_image -->
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Images 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Images 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Images 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <!-- product_price -->
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>

            <!-- Submit -->
            <div class="form-outline mb-3 w-50 m-auto">
                <input type="submit" name="insert_product" id="product_price" class="btn btn-success md-3 px-3" value="Insert Products">
            </div>
        </form>
    </div>


 <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>