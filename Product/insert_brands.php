<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
            <i class="fas fa-tachometer-alt"></i> Dashboard / Add Product Brand
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                <i class="fa fa-tags"></i> Add New Brand
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Brand Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="brand_name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Brand Description 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="brand_desc" id="" cols="30" rows="10" class="form-control"></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                        <?php 
                          
                          echo "<input name='submit' value='Add Brand' type='submit' onClick='return Confirmation();' class='btn btn-primary form-control'>"
                          ?> 
                           <script>
 
                             function Confirmation()
                             {
                                 var x= confirm("Do you want to ad this brand?");
                                 if(x==true)
                                 {
                                     return true;
                                 }
                                 else
                                 {
                                     return false;
                                 }
                             }
                           
                           </script>
                            
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              $brand_name = $_POST['brand_name'];
              
              $brand_desc = $_POST['brand_desc'];
              
              $insert_brand= "insert into brands (brand_name,brand_desc) values ('$brand_name','$brand_desc')";
              
              $run_brand = mysqli_query($con,$insert_brand);
              
              if($run_brand){
                  
                  echo "<script>alert('Your New Product Brand Has Been Added')</script>";
                  
                 // echo "<script>window.open('index.php?view_brands','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 