<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_cat"); 
$z=mysql_query("select * from tb_subcat");
$y=mysql_query("select * from tb_quant");
$k3=$_REQUEST['k3'];
if($k3)
{
	$sub=mysql_fetch_array(mysql_query("select * from tb_price where s_no='$k3'"));
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
							<strong><?php echo $_SESSION['name'];
							  unset($_SESSION['name']);?>
						</div>
							
							 
							 <?php } ?></strong>
                
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Price</h2>
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
                               <select name="type" onChange="cats(this.value,'ajx_item','display_item')" required="required">
                               <option value="" disabled="disabled" selected="selected">Choose Type</option>
                               <?php
								while($x2=mysql_fetch_array($x))
								{
									echo "<option value='$x2[s_no]'";
									if($x2['s_no']==$sub['Type'])
									echo "selected='selected'";
									echo ">$x2[s_cat]</option>";
								
								 }?>
                            </select> <br><br>
             </div>
             </div>
             <div class="control-group" id="display_item">
							  <label class="control-label" for="typeahead">Item </label>
							  <div class="controls">
                               <select name="Item" required="required">
                               <option value="" disabled="disabled" selected="selected">Choose Item</option>
                              <?php
								while($x3=mysql_fetch_array($z))
								{
									echo "<option value='$x3[s_no]'";
									if($x3['s_no']==$sub['Item'])
									echo "selected='selected'";
									echo ">$x3[subcat]</option>";
								
								 }?>
								
                            </select> <br><br>
             </div>
             </div>
         <div class="control-group">
							  <label class="control-label" for="typeahead">Quantity </label>
							  <div class="controls">
                               <select name="quantity" required="required">
                               <option value="" disabled="disabled" selected="selected">Choose Quantity</option>
                              <?php
								while($x4=mysql_fetch_array($y))
								{
									echo "<option value='$x4[s_no]'";
									if($x4['s_no']==$sub['Quantity'])
									echo "selected='selected'";
									echo ">$x4[quantity]</option>";
								
								 }?>
     
                            </select> <br><br>
             </div>
             </div>
              <div class="control-group">
							  <label class="control-label" for="typeahead">Price </label>
							  <div class="controls">
                                <input type="text" name="price" value="<?php echo $sub['Price'];?> " required="required">
             </div>
             </div>
             

                           
						


                                <input type="hidden" name="h" value="<?php echo $k3;?>" />
                                <input type="hidden" name="h1" value="price" />
								
							        
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
		

