function desktopTime() 
{
	var vdate = new Date();

	setTimeout("desktopTime()",1000);
	document.getElementById("lable_time").innerHTML = vdate.getHours()+":" +  vdate.getMinutes()+":" +  vdate.getSeconds();
}