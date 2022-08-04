<?php
include_once("Admin/database.php");
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

 
							  <div class="controls">
                               <select name="state" onchange="cats(this.value,'ajx_city','display_city')">
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
             
             if($aj_pg=="ajx_city")
{
	$s_cat1=$_REQUEST['q'];
	
	
	?>
 <div class="controls">
  <select id="numperson" class="form-control" name="city">
                                                          <option disabled="disabled" selected="selected">Choose</option>
                                                               <?php
							                                     $z=mysql_query("select * from tb_city where state_id='$s_cat1'");
                                                               while($x1=mysql_fetch_array($z))
							                                     {
								                                   echo "<option value='$x1[s_no]'";
								                                  if($fet_add['City']==$x1['s_no'])
								                                 echo "selected='selected'";
								                                 echo ">$x1[city]</option>";
							                                    }
							                                   ?>
                                                        </select>
                                                        </div>
             
             <?php } ?>

