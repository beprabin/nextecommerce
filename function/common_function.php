<?php
//including connect file
include('./includes/connect.php');

// get products
function getproducts()
{
    global $con;

    // condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_products = "Select * from products order by rand() LIMIT 0,6";
            $result_query = mysqli_query($con, $select_products);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['categories_id'];
                $brands_id = $row['brands_id'];
                echo "<div class='col-md-4 mb-2' >
                    <div class='card' >
                    <h5 class='card-title p-3'>$product_title</h5>
                    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body' style='background-color:aliceblue'>
                    
                    <p class='card-text'>Rs. $product_price </p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-outline-dark'>View Details</a>
                </div>
                </div>
            </div>";
            }
        }
    }
}

// getting unique categories
function getuniqueproducts()
{
    global $con;
    // condition to check isset or not
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $select_products = "Select * from products where categories_id=$category_id";
        $result_query = mysqli_query($con, $select_products);
        $num_of_rows = mysqli_num_rows($result_query);
        if (!$num_of_rows) {
            echo "<h2 class='text-center text-danger'> No products to display</h2>";
        } else {
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['categories_id'];
                $brands_id = $row['brands_id'];
                echo "<div class='col-md-4 mb-2'>
                            <div class='card' >
                            <h5 class='card-title p-3'>$product_title</h5>
                            <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body' style='background-color:aliceblue'>
                            
                            <p class='card-text'>Rs. $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-dark'>View Details</a>
                        </div>
                        </div>
                    </div>";
            }
        }
    }
}

// get all products
function getallproducts()
{
    global $con;

    // condition to check isset or not
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_products = "Select * from products order by rand()";
            $result_query = mysqli_query($con, $select_products);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['categories_id'];
                $brands_id = $row['brands_id'];
                echo "<div class='col-md-4 mb-2'>
                    <div class='card' >
                    <h5 class='card-title p-3'>$product_title</h5>
                    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body' style='background-color:aliceblue'>
                    
                    <p class='card-text'>Rs. $product_price</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-outline-dark'>View Details</a>
                </div>
                </div>
            </div>";
            }
        }
    }
}

// getting unique categories
function getuniquebrands()
{
    global $con;
    // condition to check isset or not
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $select_products = "Select * from products where brands_id=$brand_id";
        $result_query = mysqli_query($con, $select_products);
        $num_of_rows = mysqli_num_rows($result_query);
        if (!$num_of_rows) {
            echo "<h2 class='text-center text-danger'> No Product availabe of this paticular Brand.</h2>";
        } else {
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $category_id = $row['categories_id'];
                $brands_id = $row['brands_id'];
                echo "<div class='col-md-4 mb-2'>
                            <div class='card' >
                            <h5 class='card-title p-3'>$product_title</h5>
                            <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body' style='background-color:aliceblue'>
                            
                            <p class='card-text'>Rs. $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-dark'>View Details</a>
                        </div>
                        </div>
                    </div>";
            }
        }
    }
}


// displaying categories
function getcategories()
{
    global $con;
    $select_categories = "select * from categories";
    $result_categories = mysqli_query($con, $select_categories);
    // $row_data=mysqli_fetch_assoc($result_categories);
    // echo $row_data['categories_title'];
    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['categories_title'];
        $category_id = $row_data['categories_id'];
        echo "<li class='nav-item'>
                    <a href='index.php?category=$category_id' class='nav-link text-center'>$category_title</a>
                </li>";
    }
}

// displaying brands
function getbrands()
{
    global $con;
    $select_brands = "select * from brands";
    $result_brands = mysqli_query($con, $select_brands);
    // $row_data=mysqli_fetch_assoc($result_categories);
    // echo $row_data['categories_title'];
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        $brand_title = $row_data['brands_title'];
        $brand_id = $row_data['brands_id'];
        echo "<li class='nav-item'>
                    <a href='index.php?brand=$brand_id' class='nav-link text-center'>$brand_title</a>
                </li>";
    }
}

// searching products
function searchproducts()
{
    global $con;

    // condition to check isset or not
    if (isset($_GET['search_data_product'])) {
        $searched_data_value = $_GET['search_data'];
    }
    $search_products = "Select * from products where product_keywords like '%$searched_data_value%'";
    $result_query = mysqli_query($con, $search_products);
    $num_of_rows = mysqli_num_rows($result_query);
    if (!$num_of_rows) {
        echo "<h2 class='text-center text-danger'> No Product Found..</h2>";
    }
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['categories_id'];
        $brands_id = $row['brands_id'];
        echo "<div class='col-md-4 mb-2'>
                    <div class='card' >
                    <h5 class='card-title p-3'>$product_title</h5>
                    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body' style='background-color:aliceblue'>
                    
                    <p class='card-text'>Rs. $product_price</p>
                <a href='#' class='btn btn-success'>Add to Cart</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-outline-dark'>View Details</a>
                </div>
                </div>
            </div>";
    }
}

// check details
function view_details()
{
    global $con;

    // condition to check isset or not
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {
                $product_id = ($_GET['product_id']);
                $select_products = "Select * from products where product_id=$product_id";
                $result_query = mysqli_query($con, $select_products);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_image3 = $row['product_image3'];
                    $product_price = $row['product_price'];
                    $category_id = $row['categories_id'];
                    $brands_id = $row['brands_id'];
                    echo "
                    <div class='row'>
                <div class='col-md-4 mb-2 '>
                    
                    <div class='card' style='box-shadow: -5px -5px 10px gray, 5px  5px 10px green'>
                    <h5 class='card-title p-3'>$product_title</h5>
                    <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                       
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
                </div>
                </div>
                </div>
                <div class='col-md-8'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h4 class='text-center' text-info mb-5'>Images of Product</h4>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin/product_images/$product_image2' class='card-img-top' alt='...'>
                        </div>
                        <div class='col-md-6'>
                            <img src='./admin/product_images/$product_image3' class='card-img-top' alt='...'>
                        </div>
                        <p class='card-text text-b p-3'>Rs.$product_price</p>
                        <p class='card-text'>$product_description</p>
                    </div>
                </div>
            </div>";
                }
            }
        }
    }
}

// get ip address
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


// cart function

function cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_address = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already addded to cart')</script>";
            echo "<script>window.open(index.php,'_self')</script>";
        } else {
            $insert_query = "insert into cart_details (product_id,ip_address,quantity) values ('$get_product_id','$get_ip_address',0)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('Item addded to cart')</script>";
            echo "<script>window.open(index.php,'_self')</script>";
        }
    }
}

// function to get cart item number
function cart_item_number()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_address = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address='$get_ip_address'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    } else {
        global $con;
        $get_ip_address = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address='$get_ip_address'";
        $result_query = mysqli_query($con, $select_query);
        $count_cart_items = mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
}

// total price function
function total_cart_price()
{
    global $con;
    $get_ip_add = getIPAddress();
    $total_price = 0;
    $cart_query = "select * from cart_details where ip_address='$get_ip_add'";
    // $result=mysqli_fetch_array();
}

// function to diplaye cart items
function cart_display()
{
    global $con;
    $get_ip_address = getIPAddress();
    $get_product_id = $_GET['add_to_cart'];
    $select_query = "select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
    $result_query = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $select_product = "select * from products where product_id=$product_id";
        $result_product = mysqli_query($con, $select_product);
        while ($row_product_list = mysqli_fetch_array($result_product)) {
            $product_title = array($row_product_list['product_title']);
            $product_price = array($row_product_list['product_price']);
            $product_image1 = array($row_product_list['product_image1']);
            $product_values = array_sum($product_price);
            // $total_price+=product_values;
            echo "<tr>
            <td>Apple</td>
            <td><img src='./images/background.png' alt='' class='card-img'></td>
            <td>9</td>
            <td>900</td>
            <td><input type='checkbox'></td>
            <td>
                <p>update</p>
                <p>delete</p>
            </td>
        </tr>";
        }
    }
}
