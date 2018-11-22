<?php 
 $mailto="keyur.gandhi12@gmail.com";
 $file="contact.html";
 $pcount=0;
 $gcount=0;
 $subject = "Mail from Contact Form (Astrovaastuconsultant Website)";
 $from="info@astrovaastuconsultant.in";
 while (list($key,$val)=each($_POST)) { 
 $pstr = $pstr."$key : $val \n\n "; 
 ++$pcount; 
 } 
 while (list($key,$val)=each($_GET)) {
	 $gstr = $gstr."$key : $val \n\n ";
	 ++$gcount;
	 }
	 if ($pcount > $gcount) { 
	 $message_body=$pstr;
	 mail($mailto,$subject,$message_body,"From:".$from); 
	 include("$file");
	 }
	 else {
	 $message_body=$gstr;
	 mail($mailto,$subject,$message_body,"From:".$from);
	 } 
	 echo "YOUR MESSAGE HAS BEEN SENT";
	 
	 ?>