<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_cat"); 
$k3=$_REQUEST['k3'];
if($k3)
{
	$sub=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$k3'"));
    $img2="pro/".$sub['Image'];	
}

?>			
<body>
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
						<h2><i class="icon-edit"></i><span class="break"></span>Items</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal"  action="<?php if($k3){ echo 'updatecat.php';}else{echo 'insertcat.php';}?>" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Type </label>
							  <div class="controls">
                               <select name="s1" required="required">
                               <option value="" disabled="disabled" selected="selected">Choose type</option>
                               <?php
                            while($x1=mysql_fetch_array($x))
							{
								echo "<option value='$x1[s_no]'";
								if($sub['cat_id']==$x1['s_no'])
								echo "selected='selected'";
								echo ">$x1[s_cat]</option>";
							}
							 ?>
                            </select> 
             </div>
             </div>
             <div class="control-group">
<label class="control-label">Add item </label> 
<div class="controls">                     
<input type="text" name="sub" value="<?php echo $sub['subcat']; ?>" required="required"/></div></div>
<div class="control-group">
<label class="control-label">Description </label> <div class="controls">
<textarea rows="10" cols="10" name="desc" required="required"><?php echo $sub['Description']; ?></textarea></div></div>
                             <div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" type="file" name="image" required="required"><?php if($k3){?><div class="a"><img src="<?php echo $img2?>"  height="80px" width="50px"> </div><?php }?>
							  </div></div>
						


                                <input type="hidden" name="h" value="<?php echo $k3;?>" />
                                <input type="hidden" name="h1" value="subcate" />
								
							        
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
				
		

