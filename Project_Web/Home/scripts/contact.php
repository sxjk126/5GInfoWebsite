<?php
// Change the 4 variables below
$yourName = 'Rav Kang';
$yourEmail = 'email - here';
$yourSubject = 'REQUEST Ravs web page - Telephone:';
$referringPage = 'http://ned.highline.edu/~rkang/EMAIL-LIST/TY.html';
// No need to edit below unless you really want to. It's using a simple php mail() function. Use your own if you want

function cleanPosUrl ($str) {
return stripslashes($str);
}
	if ( isset($_POST['sendContactEmail']) )
	{
	$to = $yourEmail;
	$subject = $yourSubject.': '.$_POST['posRegard'];
	$message = cleanPosUrl($_POST['posText']);
	$headers = "From: ".cleanPosUrl($_POST['posName'])." <".$_POST['posEmail'].">\r\n";
	$headers .= 'To: '.$yourName.' <'.$yourEmail.'>'."\r\n";
	$mailit = mail($to,$subject,$message,$headers);
		if ( @$mailit ) {
		header('Location: '.$referringPage.'?success=true');
		}
		else {
		header('Location: '.$referringPage.'?error=true');
		}
	}
?>