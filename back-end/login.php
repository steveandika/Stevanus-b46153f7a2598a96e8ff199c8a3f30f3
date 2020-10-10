<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="../ui/libs/mkm.css" />
  <script src="../ui/js/js_mkm.js"></script> 
  <script src="../ui/js/jquery.min.2.1.1.js"></script>
  <title>MKM Test 2020 | Andika </title>
</head>

<body onload="desktopTime()">
    <div class="wrapper padding-left-10 padding-right-10">	     
		<div class="height-10"></div>		
		
		<div id="lable_time" class="border-radius-3" style="margin:auto;width:300px;font-size:24px;font-weight:600;text-align:center;padding:5px 5px;border:1px solid #ddd"></div>   
		<div class="height-10"></div>
		<div style="margin:auto;width:300px;font-weight:600;text-align:center">			
			<form id="validateSignIn" method="post">
			    Input your credential ID here:
				
			    <input type="text" placeholder="Username" name="username"  style="width:100%;padding:6px" />
				<div class="height-5"></div>
				<input type="text" placeholder="Password" name="password" style="width:100%;padding:6px" />
				<div class="height-10"></div>
				
				<button type="submit" style="padding:6px 6px">Sign-In</button>
			</form>	
			
		</div>   
		<div id="resultstream" style="width:600px;margin:0 auto;font-weight:normal;text-align:center"></div>
    </div>
</body>
</html>

<script type="text/javascript">
	window.setTimeout("desktopTime()",1000);

    $(document).ready(function(){  
        $("#validateuser").submit(function(event){
          event.preventDefault();
		  
	      $("#resultstream").hide(); 		
          var formValues = $(this).serialize();
          $.post("result_login.php", formValues, function(data){ 
	        $("#resultstream").html(data);
            $("#resultstream").show(); 		 		
	      });
        });
    }); 
</script>