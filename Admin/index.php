<?php 

    session_start();
    include("db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
       // $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
       // $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
      //  $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
</head>


<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }
                if(isset($_GET['insert_product'])){
                        
                    include("insert_product.php");
                }
                if(isset($_GET['view_products'])){
                        
                    include("view_products.php");
                    
                 }
                 if(isset($_GET['insert_brands'])){
                        
                      include("insert_brands.php");
                
                 }
                  if(isset($_GET['view_brands'])){
                        
                     include("view_brands.php");
            
                 } if(isset($_GET['insert_categories'])){
                        
                     include("insert_categories.php");
        
                }
                if(isset($_GET['view_categories'])){
                
                     include("view_categories.php");
    
                }
            if(isset($_GET['delete_product'])){
                        
                     include("delete_product.php");
    
                }
                if(isset($_GET['edit_products'])){
                        
                    include("edit_products.php");
                    
            }
            
           if(isset($_GET['edit_categories'])){
                   
               include("edit_categories.php");
               
         }
             if(isset($_GET['delete_categories'])){
                        
                 include("delete_categories.php");

         }
             if(isset($_GET['edit_brands'])){
           
                 include("edit_brands.php");
       
        }
        if(isset($_GET['delete_brand'])){
                        
            include("delete_brand.php");

       }

                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>