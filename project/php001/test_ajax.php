<script language="javascript">
var http_request = false;
function createRequest(url) {
	
	http_request = false;
	if (window.XMLHttpRequest) { 										
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { 								
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("cannot create");
		return false;
	}
	http_request.onreadystatechange = alertContents;   					
	
	http_request.open("GET", url, true);								
	
	http_request.send(null);
}
function alertContents() {   											
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			var error=document.getElementById("usernameerror");
			error.innerHTML=http_request.responseText;
		} else {
			alert('server error'+http_request.status);
		}
	}
}
</script>