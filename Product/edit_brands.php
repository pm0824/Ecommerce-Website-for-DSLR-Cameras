<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_brands'])){
        
        $edit_brand_id = $_GET['edit_brands'];
        
        $edit_p_brand_query = "select * from brands where brand_id='$edit_brand_id'";
        
        $run_edit = mysqli_query($con,$edit_p_brand_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $brand_id = $row_edit['brand_id'];
        
        $brand_name = $row_edit['brand_name'];
        
        $brand_desc = $row_edit['brand_desc'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Brand
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Brand
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Brand Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $brand_name; ?> " name="brand_name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Description 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="brand_desc" class="form-control"><?php echo $brand_desc; ?></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                        <?php 
                          
                          echo "<input name='update' value='Update' type='submit' onClick='return Confirmation();' class='btn btn-primary form-control'>"
                          ?> 
                           <script>
 
                             function Confirmation()
                             {
                                 var x= confirm("Do you want to continue ??");
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

          if(isset($_POST['update'])){
              
              $brand_name = $_POST['brand_name'];
              
              $brand_desc = $_POST['brand_desc'];
              
              $update_p_brand = "update brands set brand_name='$brand_name',brand_desc='$brand_desc' where brand_id='$brand_id'";
              
              $run_p_brand = mysqli_query($con,$update_p_brand);
              
              if($run_p_brand){
                  
                  echo "<script>alert('Your Product Brand Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_brands','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 