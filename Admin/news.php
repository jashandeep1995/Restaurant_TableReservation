<?php
include_once("database.php");
session_start();
$k3=$_REQUEST['k2'];

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
						<h2><i class="icon-edit"></i><span class="break"></span>Email</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>S.no</th>
								  <th>Email</th>
								  <th>Modified by</th>
								  <th>Created by</th>
								  <th>Modified date</th>
                                    <th>Created date</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                           <?php
     $xy=1;
	 $x=mysql_query("select * from tb_email");
     while($x1=mysql_fetch_array($x)){
   ?>
							<tr>
								<td><?php echo $xy;?></td>
								<td class="center"><?php echo $x1['email']; ?></td>
								<td class="center"><?php echo $x1['modified_by']; ?></td>
								<td class="center"><?php echo $x1['created_by']; ?></td>
                                <td class="center"><?php echo $x1['modified_date']; ?></td>
                                <td class="center"><?php echo $x1['created_date']; ?></td>
                                <td class="center">
									
									<a class="btn btn-danger" href="deletecat.php?k2=<?php echo $x1['s_no']; ?>&h1=<?php echo "letter";?>">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
                             <? $xy++;}?>
					  </table>            
							</div>
						  </fieldset>
						

					</div>
				</div><!--/span-->

			</div><!--/row-->

				
		<script src="js/jquery-1.9.1.min.js"></script>
     	<script src="js/jquery-migrate-1.0.0.min.js"></script>

