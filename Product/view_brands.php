<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
            <i class="fas fa-tachometer-alt"></i> Dashboard / View Product Brands
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags"></i> View Product Brands
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Brand ID </th>
                                <th> Brand Name </th>
                                <th> Description </th>
                                <th> Edit Product Brand </th>
                                <th> Delete Product Brand</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_brands = "select * from brands";
          
                                $run_brands = mysqli_query($con,$get_brands);
          
                                while($row_brands=mysqli_fetch_array($run_brands)){
                                    
                                    $brand_id = $row_brands['brand_id'];
                                    
                                    $brand_name = $row_brands['brand_name'];
                                    
                                    $brand_desc = $row_brands['brand_desc'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $brand_name; ?> </td>
                                <td width="300"> <?php echo $brand_desc; ?> </td>
                                <td> 
                                    <a href="index.php?edit_brands= <?php echo $brand_id; ?> ">
                                    <i class="fas fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_brand= <?php echo $brand_id; ?> " class="delete_link">
                                    <script src = "script.js"></script>
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>