<? 
$adminemail="a.nazarev@cdbs.ru";
if((isset($_POST['date'])||(isset($_POST['date1']))){
$date=$_POST['date'];  
$date=$_POST['date1']; 
$msg="<p>Дата: $date, $date1</p>"; 
$a = mail("$adminemail", "$msg"); 
	};
?>