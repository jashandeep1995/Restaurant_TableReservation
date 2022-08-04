<?php
include_once("database.php");
session_start();
$k3=$_REQUEST['k2'];
if($k3)
{
	
	$cat=mysql_fetch_array(mysql_query("select * from tb_employee where s_no='$k3'"));
	$img2="pro/".$cat['Image'];
}
?>

<style type="text/css">
.a
{
	
	height:40px;
	width:50px;
}
</style>

			<div class="row-fluid sortable">
				<div class="box span12">
                 <?php 
							  if($_SESSION['name']){?>
							  
								    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<?php echo $_SESSION['name'];
							  unset($_SESSION['name']);?>
						</div>
							
							 
							 <?php } ?>
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php if($k3){ echo 'updatecat.php';}else{echo 'insertcat.php';}?>"  method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Name: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="name" data-provide="typeahead" data-items="4" value="<?php echo $cat['Name']; ?>" required="required">
                                
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">phn no.</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="phn" value="<?php echo $cat['Phn_no']; ?>" required="required">
							  </div>
							</div>        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Detail</label>
							  <div class="controls">
								<textarea  rows="3" cols="3" name="detail" required="required"><?php echo $cat['Detail']; ?></textarea>
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" type="file" name="image" required="required"><?php if($k3){?><div class="a"><img src="<?php echo $img2?>"  height="80px" width="50px"> </div><?php }?>
                                <input type="hidden" name="h1" value="employ">
                                 <input type="hidden" name="h" value="<?php echo $k3;?>" />
                                 <button type="submit" class="btn btn-primary">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							  </div>
							</div>  
							<!--<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>-->
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

		
				
		
		<script src="js/jquery-1.9.1.min.js"></script>
     	<script src="js/jquery-migrate-1.0.0.min.js"></script>	
		

		
	
</body>
</html>
