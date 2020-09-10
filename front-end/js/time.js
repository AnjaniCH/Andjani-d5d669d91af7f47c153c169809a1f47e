window.setTimeout("waktu()", 1000);
 
function waktu() {
	var waktu = new Date();
	setTimeout("waktu()", 1000);
	
	var minutes = (waktu.getMinutes() <10 ?'0':'') + waktu.getMinutes();
	var seconds = (waktu.getSeconds() <10 ?'0':'') + waktu.getSeconds();	
	var hours 	= (waktu.getHours() <10 ?'0':'') + waktu.getHours();
	var jamMenitDetik = hours+':'+minutes+':'+seconds;
	$('#time').html('<h4>'+jamMenitDetik+'<h4>');
}

localStorage.username = '';