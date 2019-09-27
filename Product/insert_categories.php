<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
            <i class="fas fa-tachometer-alt"></i> Dashboard / Add Product Category
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                <i class="fa fa-tags"></i> Add New Category
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Category Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="cat_name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                  
                    
                        
                            
                            <?php 
                          
                         echo "<input name='submit' value='Add Category' type='submit' style='width:150px; margin-left: 600px;' onClick='return Confirmation();' class='btn btn-primary form-control'>"
                         ?> 
                          <script>

                            function Confirmation()
                            {
                                var x= confirm("Do you want to add this category?");
                                if(x==true)
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              $cat_name = $_POST['cat_name'];
              
           
              
              $insert_category= "insert into categories (cat_name) values ('$cat_name')";
              
              $run_category = mysqli_query($con,$insert_category);
              
              if($run_category){
                  
                  echo "<script>alert('Your New Product Category Has Been Added')</script>";
                  
                  echo "<script>window.open('index.php?view_categories','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 