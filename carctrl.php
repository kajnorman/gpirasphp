<!DOCTYPE html>
<html>
<body>

<h1>
<?php
$setmode17 = shell_exec("sudo /usr/bin/raspi-gpio set 17 op");
if(isset($_GET['F'])){
//        $gpio_on = shell_exec("sudo /usr/bin/raspi-gpio set 17 dh");
        echo "Forward";
}
else if(isset($_GET['FF'])){
//        $gpio_off = shell_exec("sudo /usr/bin/raspi-gpio set 17 dl");
        echo "Fast Forward";
}
else if(isset($_GET['S'])){
//        $gpio_off = shell_exec("sudo /usr/bin/raspi-gpio set 17 dl");
        echo "Stop";
}
?>

</h1>




<h2>Basic HTML Table</h2>

<form action="/carctrl.php" method="get" >
	<table  border=3 >
	  <tr>
	    	<td>
		<input type="submit" value="But1">
		</td>
	    	<td>
		<input type="submit" value="Fast_Forward" name="FF">
		</td>
	    	<td>
		<input type="submit" value="But1">
		</td>
	  </tr>
	  <tr>
	    	<td>
		<input type="submit" value="But1">
		</td>
	    	<td>
		<input type="submit" value="Forward" name="F">
		</td>
	    	<td>
		<input type="submit" value="But1">
		</td>
	  </tr>
	  <tr>
	    	<td>
		<input type="submit" value="But1">
		</td>
	    	<td>
		<input type="submit" value="Stop" name ="S">
		</td>
	    	<td>
		<input type="submit" value="But1">
		</td>
	  </tr>
	</table>
</form> 


</body>
</html>


