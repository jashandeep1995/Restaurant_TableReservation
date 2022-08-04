<?php
include_once("database.php");
session_start();

$k=$_REQUEST['bill_id'];




$bill_idd=mysql_fetch_array(mysql_query("select * from tb_bill where bill_id='$k'"));
$fet_address=mysql_fetch_array(mysql_query("select * from tb_address where Email='$bill_idd[session]'"));



?>
<style>
.m
{
	float:right;
	font-size:20px;
}
.bb
{
	width:80px !important;
	Color:white;
	font-weight:200;
	background-color:#000 !important;
	color:#FFF !important;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
</style>

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
						
                        <p><b>Bill id:</b>&nbsp &nbsp<?php echo $k; ?></p>
                        <p><b>Address:</b>&nbsp &nbsp <?php echo $fet_address['Address']; ?></p><br>
                      <!--  <div class="controls">
								
							  </div>-->
                              <form action="updatecat.php" method="post">
                          <table class="table table-border checkout-table" border="2px">
                                        <tbody>
                                            <tr>
                                                <th class="hidden-xs">Item Name</th>
                                                <th>Description</th>
                                                  <th class="hidden-xs">Price</th>
                                                <th class="hidden-xs">Quantity</th>
                                               
                                               
                                                
                                            </tr>
                                             <?php
											
									   
									   $fet_bill=mysql_query("select * from tb_bill where bill_id='$k'");
									   
                                       while($x1=mysql_fetch_array($fet_bill))
									   {
										 
										   $get_item=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$x1[product_id]'"));
										   
										   $hh=NULL;
										   $fetch_price1=NULL;
										   $get_price11=NULL;
									      $qty_m=explode(",",$x1['quantity']);
										 $get_qty=explode(",",$x1['Total']);
										  foreach($qty_m as $qty_m1=>$de)
										  {
											
										   $get_qty_name=mysql_fetch_array(mysql_query("select * from tb_quant where s_no='$de'"));
											$get_price=mysql_fetch_array(mysql_query("select * from tb_price where Quantity='$de' and Item='$x1[product_id]'"));
											 
											 $hh.=$get_qty_name['quantity'].": &nbsp;&nbsp;".$get_price['Price']."<br/>";
											
											
							 
											$fetch_price1=$get_price['Price']*$get_qty[$qty_m1];
										$total_price=$total_price+$fetch_price1;
											$get_price11.=$fetch_price1."<br/>";
											
											  
										  }
										  $h11=rtrim($hh,",");
									       $get_price11=rtrim($get_price11,"<br/>");
										
										 
                                      ?> 
										 
										 
                                            <tr>
                                                <td class="hidden-xs">
                                                   <?php echo $get_item['subcat']; ?>
                                                </td>
                                                <td>
                                                    <h5 class="product-name"><?php echo substr($get_item['Description'],0,20); ?> </h5>
                                                </td>
                                                 <td class="hidden-xs">
                                                    <h5 class="order-money"><?php echo $h11;?></h5>
                                                </td>
                                                
                                                <td>
                                                    <h5 class="product-name"><?php foreach($qty_m as $qty_m1=>$de)
										  { echo $get_qty[$qty_m1]."<br/>";} ?>
										  </h5>
                                                </td>
                                               <!-- <td>
                                                    <h5 class="order-money"> </h5>
                                                </td>-->
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="h1" value="dlvry">
                                    <input type="hidden" name="h2" value="<?php echo $k; ?>">
                                    <input type="submit" value="Delievery" class="bb">
                                    <p class="m">Total:&nbsp<?php echo $to=$total_price+150+50;?></p>
                                    
                                    
                                    
                                    </form>
                        

					</div>
				</div><!--/span-->

			</div><!--/row-->

				
		<script src="js/jquery-1.9.1.min.js"></script>
     	<script src="js/jquery-migrate-1.0.0.min.js"></script>

