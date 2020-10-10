<?php
	include("common.php");
	
    $loginstatus = checkLoginState();	
	echo $loginstatus;
	
	if ($loginstatus == "") 
	{
?>		
		header("location: http://localhost/dev-test/scripts/login"); 
		<script type="text/javascript">

window.open( "/dev-test/scripts/login.php" )
</script> 
<?php		
    }		
?>