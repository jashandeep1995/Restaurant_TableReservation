function cats(ajxval,ajxpg,ajxid)
{
	//alert(str2);
		xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
  	{
  		alert ("Browser does not support HTTP Request");
  		return;
  	}
	var url="type_ajax.php";
	url=url+"?q="+ajxval;
	url=url+"&q1="+ajxpg;


	//alert(url);
	xmlhttp.onreadystatechange=function (){
		if (xmlhttp.readyState==4)
		{
			document.getElementById(ajxid).innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.open("GET",url,true);
	
	xmlhttp.send(null);	
	
}
/*function cats2(str4)
{
	//alert(str2);
		xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
  	{
  		alert ("Browser does not support HTTP Request");
  		return;
  	}
	var url="category3.php";
	url=url+"?q="+str4;



	//alert(url);
	xmlhttp.onreadystatechange=function (){
		if (xmlhttp.readyState==4)
		{
			document.getElementById("ecat").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.open("GET",url,true);
	
	xmlhttp.send(null);	
	
}*/
function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
  	{
  // code for IE7+, Firefox, Chrome, Opera, Safari
  		return new XMLHttpRequest();
  	}
	if (window.ActiveXObject)
 	{
  // code for IE6, IE5
  		return new ActiveXObject("Microsoft.XMLHTTP");
  	}
	return null;
}// JavaScript Document