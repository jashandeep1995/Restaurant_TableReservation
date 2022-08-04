<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_tabletype"); 
$fet_tableno=mysql_query("select * from tb_tableno");

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
						<form class="form-horizontal"  action="insertcat.php" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Table Type </label>
							  <div class="controls">
                               <select name="s1" onChange="cats(this.value,'ajx_booking','display_booking')" required="required">
                               <option value="" disabled="disabled" selected="selected">Choose type</option>
                               <?php
                            while($x1=mysql_fetch_array($x))
							{
								echo "<option value='$x1[s_no]'";
								if($sub['table_type']==$x1['s_no'])
								echo "selected='selected'";
								echo ">$x1[table_type]</option>";
							}
							 ?>
                            </select> <br><br>
             </div>
             </div>
             <div class="control-group">
								<label class="control-label">Table no:</label>
								<div class="controls" >
								<?php
                                  $z=mysql_query("select * from tb_tableno");
								
                                 while($x2=mysql_fetch_array($z))
								 {
									 $chk=mysql_query("select * from tb_allocate where table_no='$x2[table_no]'");
									 if(mysql_num_rows($chk)<=0)
									 {
									 ?>
									
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="<?php echo $x2['table_no'];?>" name="tablenumber[]" required="required"><?php echo $x2['table_no'];?>
								  </label> <?php  }}?>
								
								
								</div>
                               
							  </div>
                              
             

                           
						


                                <input type="hidden" name="h" value="<?php echo $k3;?>" />
                                <input type="hidden" name="h1" value="booking" />
								
							        
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" align="left">Submit</button>
                             
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
          
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.0.0.min.js"></script>
				
		

