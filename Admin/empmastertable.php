<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_employee");
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
					<div class="box-header" data-original-title>
						<h2><i class="icon-user"></i><span class="break"></span>Members</h2>
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
								  <th>Name</th>
								  <th>Phn no.</th>
								  <th>Detail</th>
								  <th>Image</th>
                                  <th>Created by.</th>
								  <th>Modified by</th>
								  <th>Created date</th>
                                  <th>Modified date</th>
                                  <th>Action</th>
                                  
                                   
							  </tr>
						  </thead>   
						  <tbody>
                           <?php
     $xy=1;
     while($x1=mysql_fetch_array($x)){
		  $img2="pro/".$x1['Image'];
   ?>
							<tr>
								<td><?php echo $xy;?></td>
								<td class="center"><?php echo $x1['Name']; ?></td>
								<td class="center"><?php echo $x1['Phn_no']; ?></td>
								<td class="center"><?php echo substr($x1['Detail'],0,20); ?></td>
                                <td class="center"><div class="a"><img src="<?php echo $img2?>" style="height:45px; width:50px;"> </div></td>
                                <td class="center"><?php echo $x1['created_by']; ?></td>
                                <td class="center"><?php echo $x1['modified_by']; ?></td>
                                <td class="center"><?php echo $x1['created_date']; ?></td>
                                <td class="center"><?php echo $x1['modified_date']; ?></td>
                           
                                <td class="center">
									<a class="btn btn-info" href="index.php?k1=emp&k2=<?php echo $x1['s_no'];?>">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="deletecat.php?k2=<?php echo $x1['s_no']; ?>&h1=<?php echo "employ";?>">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
                             <? $xy++;}?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

