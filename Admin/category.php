<?php
include_once("database.php");
session_start();
$k3=$_REQUEST['k2'];
if($k3)
{
	$cat=mysql_fetch_array(mysql_query("select * from tb_cat where s_no='$k3'"));
	
}

?>			
            <div class="row-fluid sortable">
				<div class="box span12">
                 <?php 
							  if($_SESSION['name']){?>
							  
								    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong><?php echo $_SESSION['name'];
							  unset($_SESSION['name']);?>
						</div>
							
							 </strong>
							 <?php } ?>
                
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Type</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php if($k3){ echo 'updatecat.php';}else{echo 'insertcat.php';}?>" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Type </label>
							  <div class="controls">
								<input type="text" name="category" value="<?php echo $cat['s_cat']; ?>" required="required">
                                <input type="hidden" name="h" value="<?php echo $k3;?>" />
                                <input type="hidden" name="h1" value="catgry" />
								
							  </div>
							</div>         
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Submit</button>
                             
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

				
		<script src="js/jquery-1.9.1.min.js"></script>
     	<script src="js/jquery-migrate-1.0.0.min.js"></script>

