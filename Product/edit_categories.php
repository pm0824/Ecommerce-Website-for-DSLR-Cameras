<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_categories'])){
        
        $edit_cat_id = $_GET['edit_categories'];
        
        $edit_p_cat_query = "select * from categories where cat_id='$edit_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_p_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $cat_id = $row_edit['cat_id'];
        
        $cat_name = $row_edit['cat_name'];
        
       
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Category Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $cat_name; ?> " name="cat_name" type="text" class="form-control">
                        
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
                                 var x= confirm("Are you ready to update?");
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
              
              $cat_name = $_POST['cat_name'];
              
             
              
              $update_p_cat = "update categories set cat_name='$cat_name' where cat_id='$cat_id'";
              
              $run_p_cat = mysqli_query($con,$update_p_cat);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Your Product Category Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_categories','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 