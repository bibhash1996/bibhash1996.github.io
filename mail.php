<?php 

error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $to=$_POST['to'];
    $sub=$_POST['subject'];
    $message=$_POST['message'];
	$msg = $name . '(' . $to . ')' . $message;
	$headers = "From: saecomment@saeindiauvce.com" . "\r\n" ;
	$sent=mail('bibhash1996@gmail.com',$sub,$msg,$headers);
	
	if($sent)
	{
		echo "<script>
		alert('Your message has been sent....');
		</script>";
    //sleep(5);
	//	header('Location:index.html',true,303);
	header( "Refresh:0; url=index.html", true, 303);
	}
	else
		echo "<script>
		alert('sry');
		</script>";
		header( "Refresh:0; url=index.html", true, 303);
}

?>




