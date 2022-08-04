<?php
include_once("database.php");
$aj_pg=$_REQUEST['q1'];


if($aj_pg=="ajx_item")
{
	$s_cat1=$_REQUEST['q'];
	
	
	?>

       <label class="control-label" for="typeahead">Item</label>
          <div class="controls">
           <select name="Item">
           <option value="" disabled="disabled" selected="selected">Choose Item</option>
          <?php
		  $z=mysql_query("select * from tb_subcat where cat_id='$s_cat1'");
            while($x3=mysql_fetch_array($z))
            {
                echo "<option value='$x3[s_no]'";
                if($x3['s_no']==$sub['Item'])
                echo "selected='selected'";
                echo ">$x3[subcat]</option>";
            
             }?>
								
             </select> <br><br>
   
    <?php
}

?>

<?php

if($aj_pg=="ajx_state")
{
	$s_cat1=$_REQUEST['q'];
	
	
	?>

 <label class="control-label" for="typeahead">Stateee </label>
							  <div class="controls">
                               <select name="s2">
                               <option value="" disabled="disabled" selected="selected">Choose State</option>
                               <?php
							   $z=mysql_query("select * from tb_state where country_id='$s_cat1'");
                            while($x3=mysql_fetch_array($z))
							{
								echo "<option value='$x3[s_no]'";
								if($x3['s_no']==$sub['state_id'])
								echo "selected='selected'";
								echo ">$x3[state]</option>";
							}
							 ?>
                            </select> 
             </div>
             
             <?php } ?>
   <?php

if($aj_pg=="ajx_booking")
{
	$s_cat1=$_REQUEST['q'];
	
	
	?>
    
     
								
								<?php
								 $z=mysql_query("select * from tb_tableno");
								
                                 while($x2=mysql_fetch_array($z))
								 {
									 $chk=mysql_query("select * from tb_allocate where table_no='$x2[s_no]'");
									 if(mysql_num_rows($chk)<=0)
									 {
									 ?>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="<?php echo $x2['table_no'];?>" name="tablenumber[]"><?php echo $x2['table_no'];?>
								  </label> 
								     <?php  
									 }
								 }
									 ?>
								
								
     <?php } ?>
    
