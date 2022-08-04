<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_state");   

?>
<body>
<style type="text/css">
.a
{
	
	height:50px;
	width:50px;
}
</style>
            <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-user"></i><span class="break"></span>Items</h2>
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
								  <th>Countryid</th>
                                   <th>State</th>
								  <th>Modified by</th>
								  <th>Created by</th>
								  <th>Modified date</th>
                                  
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                           <?php                              
     $xy=1;
     while($x1=mysql_fetch_array($x))
	 {
		
		 $cat=mysql_fetch_array(mysql_query("select * from tb_country where s_no='$x1[country_id]'"));
   ?>
							<tr>
								<td><?php echo $xy;?></td>
								<td class="center"><?php echo $cat['Country']; ?></td>
								<td class="center"><?php echo $x1['state']; ?></td>
                               
                              
								<td class="center"><?php echo $x1['modified_by']; ?></td>
                                <td class="center"><?php echo $x1['created_by']; ?></td>
                                <td class="center"><?php echo $x1['modified_date']; ?></td>
                              
                                <td class="center">
									<a class="btn btn-info" href="index.php?k1=state&k3=<?php echo $x1['s_no'];?>">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="deletecat.php?k2=<?php echo $x1['s_no']; ?>&h1=<?php echo "state";?>">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
                             <? $xy++;}?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

