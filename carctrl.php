<!DOCTYPE html>
<html>
<body>

<h1>
<?php
if(isset($_GET['F'])){
        $msg = shell_exec("echo F >/tmp/carctrl");
        echo "Forward";
}
else if(isset($_GET['FF'])){
        $msg = shell_exec("echo FF >/tmp/carctrl");
        echo "Fast Forward";
}
else if(isset($_GET['S'])){
        $msg = shell_exec("echo S >/tmp/carctrl");
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


