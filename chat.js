function submitChat()
{
	if(form1.msg.value == '')
	{
		alert('Enter your message!!!');
		return;
	}
		
		$('#imageload').show();
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
					$('#imageload').hide();
				}
			}
			xmlhttp.open('GET', 'insert.php?&msg='+msg, true);
			xmlhttp.send();
}


			$(document).ready(function(e)
			{
				$.ajaxSetup({cache:false});
				setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);
			});
	
	
	
			