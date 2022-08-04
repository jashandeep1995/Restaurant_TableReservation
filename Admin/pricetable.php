<?php
include_once("database.php");
session_start();
$x=mysql_query("select * from tb_price");  

?>
            <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-user"></i><span class="break"></span>Price</h2>
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
								  <th>Type</th>
                                   <th>Item</th>
                                   <th>Quantity</th>
                                   <th>Price</th>
								  <th>Modified by</th>
								  <th>Created by</th>
								  
                                    <th>Created date</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                            <?php
     $xy=1;
     while($x1=mysql_fetch_array($x))
	 {
		 $cat=mysql_fetch_array(mysql_query("select * from tb_cat where s_no='$x1[Type]'"));
		 $sub=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$x1[Item]'"));
		  $quan=mysql_fetch_array(mysql_query("select * from tb_quant where s_no='$x1[Quantity]'"));
   ?>
							<tr>
								<td><?php echo $xy;?></td>
								
								<td class="center"><?php echo $cat['s_cat'];  ?></td>
                                <td class="center"><?php echo $sub['subcat']; ?></td>
                                <td class="center"><?php echo $quan['quantity']; ?></td>
                                <td class="center"><?php echo $x1['Price']; ?></td>
								<td class="center"><?php echo $x1['modified_by']; ?></td>
                                <td class="center"><?php echo $x1['created_by']; ?></td>
                               
                                <td class="center"><?php echo $x1['created_date']; ?></td>
                                <td class="center">
									<a class="btn btn-info" href="index.php?k1=price&k3=<?php echo $x1['s_no'];?>">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="deletecat.php?k2=<?php echo $x1['s_no']; ?>&h1=<?php echo "price";?>">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
                             <? $xy++;}?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

