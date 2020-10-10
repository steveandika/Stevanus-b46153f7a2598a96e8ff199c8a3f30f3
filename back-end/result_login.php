<?php
	include("common.php");
	
    $loginstatus = checkLoginState();	
	echo $loginstatus;
	
	if ($loginstatus == "") 
	{
?>		
		<script type="text/javascript">
			window.open( "/dev-test/scripts/login.php","_self");
		</script> 
<?php		
    }		
?>
