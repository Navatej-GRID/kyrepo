<?php
/* <?php
 $i;
 for($i=0;$i<25;$i++){
 echo "<option>".$i." years"."</option>";
 }
 ?> */
<div class="form-group">
<label for="technology" class="cols-sm-2 control-label"style="float: left; margin-left:420px;">Technology</label>
<div class="cols-sm-10">
<div class="input-group" style="margin-left:50px;">
<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
<select name="technology" class="form-control" style=" width: 350px; ">
<?php
include("configuration.php");

//$tech=$_POST["technology"];
$sql="select technology from technologytable order by  1";
$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
while($row=mysqli_fetch_row($result))
{
	echo "<option>".$row[0]."</option>";
}
?>
								</select>
							</div>
						</div>
					</div>