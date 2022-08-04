<?php
include_once("database.php");
session_start();

?>			
            <div class="row-fluid sortable">
				<div class="box span12">
         
                
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Type</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <form action="index.php?k1=bill2" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>S.no</th>
								  <th>Bill ID</th>
								  <th>Total</th>
								  <th>Address</th>
								  <th>Date</th>
                                    <th>Status</th>
                                    <th>Condition</th>
                                     
							
							  </tr>
                             
                               <?php
     $xy=1;
	 $x=mysql_query("select DISTINCT bill_id,session,date,status from tb_bill where status='1'");
     while($x1=mysql_fetch_array($x))
	 {
		 
		  $fet_add=mysql_fetch_array(mysql_query("select * from tb_address where Email='$x1[session]'"));
		  $fet_bill=mysql_fetch_array(mysql_query("select * from tb_bill where session='$x1[session]'"));
		  $Address=$fet_add['Address'];

            $total=NULL;
		
            $get_detail=mysql_query("select * from tb_bill where bill_id='$x1[bill_id]'");
			while($get_detail1=mysql_fetch_array($get_detail))
			{
				
				$get_price11=NULL;
			  
			  
			  $qty_m=explode(",",$get_detail1['quantity']);
			  $get_qty=explode(",",$get_detail1['Total']);
			  foreach($qty_m as $qty_m1=>$de)
{$fetch_price1=NULL;
	
				$get_price=mysql_fetch_array(mysql_query("select * from tb_price where Quantity='$de' and Item='$get_detail1[product_id]'"));
			$hh.=$get_price['Price'].",";
			$fetch_price1=$get_price['Price']*$get_qty[$qty_m1];
			$total_price=$total_price+$fetch_price1;
			$get_price11.=$fetch_price1.",";
			
}
			$h11=rtrim($hh,",");
			$get_price11=rtrim($get_price11,",");
			}

?>		  
   
							<tr>
								<td><?php echo $xy;?></td>
								<td class="center"><?php echo $x1['bill_id']; ?></td>
								<td class="center"><?php  $to=$total_price+150+50; echo $to;?></td>
								<td class="center"><?php echo $Address; ?></td>
                                <td class="center"><?php echo $x1['date']; ?></td>
                                <td class="center"><?php echo $x1['status']; ?></td>
                               
                                <td class="center">
									
                                     <a href="index.php?bill_id=<?php echo $x1['bill_id'];?>&k1=bill2">
                                     <input type="button" value="show" />
                                     </a>
								</td>
                                
							</tr>
                            
                             <? $xy++;}?>
                              </thead>
                              </table> 
                              </form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

				
		<script src="js/jquery-1.9.1.min.js"></script>
     	<script src="js/jquery-migrate-1.0.0.min.js"></script>

