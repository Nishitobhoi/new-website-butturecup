<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
////////////////////////////////////////////////////////////////////////////
// dB Masters' PHP FormMailer 3.5.1, Copyright (c) 2004 dB Masters Multimedia
// FormMailer comes with ABSOLUTELY NO WARRANTY
// Licensed under the AGPL
// See license.txt and readme.txt for details
////////////////////////////////////////////////////////////////////////////
// General Variables

// echo "<pre>";
// print_r($_REQUEST);
// exit;
	$check_referrer="no";
	// $referring_domains="http://.com/,http://www..com/";

// Default Error and Success Page Variables
	$error_page_title="Error - Missed Fields";
	$error_page_text="Please use your browser's back button to return to the form and complete the required fields.";
	$thanks_page_title="Message Sent";
	$thanks_page_text="Thank you for your inquiry";

// options to use if hidden field "config" has a value of 0
	$tomail[0]="info@buttercup.in,avani@shoutnhike.com,branding@buttercup.in";
	$cc_tomail[0]="";
	$bcc_tomail[0]="";
	$subject[0]="Buttercup Inquiry" ;
	$reply_to_field[0]="email";
	$required_fields[0]="";
	$required_email_fields[0]="";
	$attachment_fields[0]="";
	$error_page[0]="";
	$thanks_page[0]="thanks.php";
	$send_copy[0]="";
	$send_copy_fields[0]="Name,Comments";
	$copy_subject[0]="Subject of Copy Email";
	$copy_from[0]="";
	$copy_tomail_field[0]="email";
	$mail_type[0]="vert_table";
	$mail_priority[0]="1";
	$return_ip[0]="yes";
	$header[0]="";
	$footer[0]="";

// options to use if hidden field "config" has a value of 1
	$tomail[1]="";
	$cc_tomail[1]="";
	$bcc_tomail[1]="";
	$subject[1]="";
	$reply_to_field[1]="";
	$required_fields[1]="";
	$required_email_fields[1]="";
	$attachment_fields[1]="";
	$error_page[1]="";
	$thanks_page[1]="";
	$send_copy[1]="";
	$send_copy_fields[1]="";
	$copy_subject[1]="";
	$copy_from[1]="";
	$copy_tomail_field[1]="";
	$mail_type[1]="";
	$mail_priority[1]="";
	$return_ip[1]="";
	$header[1]="";
	$footer[1]="";

// options to use if hidden field "config" has a value of 2
	$tomail[2]="";
	$cc_tomail[2]="";
	$bcc_tomail[2]="";
	$subject[2]="";
	$reply_to_field[2]="";
	$required_fields[2]="";
	$required_email_fields[2]="";
	$attachment_fields[2]="";
	$error_page[2]="";
	$thanks_page[2]="";
	$send_copy[2]="";
	$send_copy_fields[2]="";
	$copy_subject[2]="";
	$copy_from[2]="";
	$copy_tomail_field[2]="";
	$mail_type[2]="";
	$mail_priority[2]="";
	$return_ip[2]="";
	$header[2]="";
	$footer[2]="";

/////////////////////////////////////////////////////////////////////////
// Don't muck around past this line unless you know what you are doing //
/////////////////////////////////////////////////////////////////////////
ob_start();
$config=$_POST["config"];
$tomail=$tomail[$config];
$cc_tomail=$cc_tomail[$config];
$bcc_tomail=$bcc_tomail[$config];
$copy_from=$copy_from[$config];
$subject=$subject[$config];
$reply_to_field=$reply_to_field[$config];
$required_fields=$required_fields[$config];
$required_email_fields=$required_email_fields[$config];
$attachment_fields=$attachment_fields[$config];
$error_page=$error_page[$config];
$thanks_page=$thanks_page[$config];
$send_copy=$send_copy[$config];
$send_copy_fields=$send_copy_fields[$config];
$copy_subject=$copy_subject[$config];
$copy_tomail_field=$copy_tomail_field[$config];
$mail_type=$mail_type[$config];
$mail_priority=$mail_priority[$config];
$return_ip=$return_ip[$config];
$header=$header[$config];
$footer=$footer[$config];
if($header!="")
{
	include($header);
}
if($_POST["submit"] || $_POST["Submit"] || $_POST["submit_x"] || $_POST["Submit_x"])
{
	Function hiddenFields($fieldName)
	{
		$hidden[]="submit";
		$hidden[]="submit_x";
		$hidden[]="submit_y";
		$hidden[]="Submit";
		$hidden[]="Submit_x";
		$hidden[]="Submit_y";
		$hidden[]="config";
		$hidden[]="g-recaptcha-response";
		
		$hidden_run=sizeof($hidden);
		$show_field="yes";
		for($i=0;$i<$hidden_run;$i++)
		{
			if($fieldName==$hidden[$i])
			{
				$show_field="no";
			}
		}
		return $show_field;
	}
	Function parseArray($key)
	{
		$array_value=$_POST[$key];
		$count=1;
		extract($array_value);
		foreach($array_value as $part_value)
		{
			if($count > 1){$value.=", ";}
			$value.=$part_value;
			$count=$count+1;
		}
		return $value;
	}
	Function htmlHeader()
	{
		$htmlHeader="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\">\n<html>\n<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n<style>.tbl{font: 8pt tahoma;border: 1px solid #ccc;border-collapse:collapse;width: 500px;background: #f8f8f8;}.tbl td{color:#000;padding: 5px;}</style>\n</head>\n<body>\n<table cellpadding=\"2\" cellspacing=\"1\" class=\"tbl\" border=\"1\">\n";
		return $htmlHeader;
	}
	Function htmlFooter()
	{
		$htmlFooter="</table>\n</body>\n</html>\n";
		return $htmlFooter;
	}
	if($check_referrer=="yes")
	{
		$ref_check=preg_split('/,/',$referring_domains);
		$ref_run=sizeof($ref_check);
		$referer=$_SERVER['HTTP_REFERER'];
		$domain_chk="no";
		for($i=0;$i<$ref_run;$i++)
		{
			$cur_domain=$ref_check[$i];
			if(stristr($referer,$cur_domain)){$domain_chk="yes";}
		}
	}
	else
	{
		$domain_chk="yes";
	}
	if($domain_chk=="yes")
	{
		$mail="yes";
		if($required_fields != "")
		{
			$req_check=preg_split('/,/',$required_fields);
			$req_run=sizeof($req_check);
			$error_message="";
			for($i=0;$i<$req_run;$i++)
			{
				$cur_field_name=$req_check[$i];
				$cur_field=$_POST[$cur_field_name];
				if($cur_field=="")
				{
					$error_message=$error_message."You are missing the ".$req_check[$i]." field<br />";
					$mail="no";
				}
			}
		}
		if($required_email_fields != "")
		{
			$email_check=preg_split('/,/',$required_email_fields);
			$email_run=sizeof($email_check);
			for($i=0;$i<$email_run;$i++)
			{
				$cur_email_name=$email_check[$i];
				$cur_email=$_POST[$cur_email_name];
				if($cur_email=="" || !eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$",$cur_email))
				{
					$error_message=$error_message."You are missing the ".$email_check[$i]." field or the email is not a valid email address.<br />";
					$mail="no";
				}
			}
		}
		if($mail=="yes")
		{
			if($_SERVER['HTTP_X_FORWARDED_FOR'])
			{$user_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}
			else
			{$user_ip=$_SERVER["REMOTE_ADDR"];}
			if($mail_type=="vert_table")
			{
				$message=htmlHeader();
				foreach($_POST as $key=>$value)
				{
					if(is_array($value))
					{
						$value=parseArray($key);
					}
					$value=stripslashes($value);
					$value=preg_replace("/(http:\/\/+.[^\s]+)/i",'<a href="\\1">\\1</a>', $value);
					$value=nl2br($value);
					if(hiddenFields($key)=="yes")
					{
						$message.="<tr>\n<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\"><b>".$key."</b></td>\n<td align=\"left\" valign=\"top\" width=\"100%\">".$value."</td></tr>";
					}
				}
				if($return_ip=="yes")
				{
					$message.="<tr>\n<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\"><b>Sender IP</b></td>\n<td align=\"left\" valign=\"top\" width=\"100%\">".$user_ip."</td></tr>";
				}
				$message.=htmlFooter();
			}
			else if($mail_type=="horz_table")
			{
				$message=htmlHeader();
				$message.="<tr>\n";
				foreach($_POST as $key=>$value)
				{
					if(hiddenFields($key)=="yes")
					{
						$message.="\n<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\"><b>".$key."</b></td>";
					}
				}
				if($return_ip=="yes")
				{
					$message.="<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\"><b>Sender IP</b></td>";
				}
				$message=$message."</tr>\n<tr>\n";
				foreach($_POST as $key=>$value)
				{
					if(is_array($value))
					{
						$value=parseArray($key);
					}
					$value=stripslashes($value);
					$value=preg_replace("/(http:\/\/+.[^\s]+)/i",'<a href="\\1">\\1</a>', $value);
					$value=nl2br($value);
					if(hiddenFields($key)=="yes")
					{
						$message.="\n<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\">".$value."</td>";
					}
				}
				if($return_ip=="yes")
				{
					$message.="<td align=\"right\" valign=\"top\" style=\"white-space:nowrap;\">".$user_ip."</td>";
				}
				$message.="</tr>\n";
				$message.=htmlFooter();
			}
			else
			{
				$message="";
				foreach($_POST as $key=>$value)
				{
					if(is_array($value))
					{
						$value=parseArray($key);
					}
					$value=stripslashes($value);
					if(hiddenFields($key)=="yes")
					{
						$message.=$key.": ".$value."\n\n";
					}
				}
				if($return_ip=="yes")
				{
					$message.="Sender IP: ".$user_ip;
				}
			}
			$extra="";
			$extra.="X-Priority: $mail_priority\n";
			if($cc_tomail!="")
			{
				$extra.="Cc: $cc_tomail\n";
			}
			if($bcc_tomail!="")
			{
				$extra.="Bcc: $bcc_tomail\n";
			}
			if($mail_type=="horz_table" || $mail_type=="vert_table")
			{
				$content_type="MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\n";
			}
			else
			{
				$content_type="Content-type: text/html; charset=iso-8859-1\n";
			}
			if($attachment_fields!="")
			{
 				$semi_rand = md5(time());
				$border="==Multipart_Boundary_x{$semi_rand}x";
				$extra.="Content-Type: multipart/mixed; boundary=\"{$border}\"\n";
				$message="This is a multi-part message in MIME format with file attachments.\n\n" .
							"--{$border}\n".$content_type."\n" .
							"Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
				$att_check=preg_split('/,/',$attachment_fields);
				$size_check=preg_split('/,/',$attachment_size);
				$att_run=sizeof($att_check);
				for($i=0;$i<$att_run;$i++)
				{
					$fileatt=$_FILES[$att_check[$i]]['tmp_name'];
					$fileatt_name=$_FILES[$att_check[$i]]['name'];
					$fileatt_type=$_FILES[$att_check[$i]]['type'];
					if (is_uploaded_file($fileatt))
					{
						$file=fopen($fileatt,'rb');
						$data=fread($file,filesize($fileatt));
	 					fclose($file);
						$data=chunk_split(base64_encode($data));
						$message.="--{$border}\n";
						$message.="Content-Type: \"".$fileatt_type."\"; name=\"".$fileatt_name."\"\n";
						$message.="Content-Disposition: attachment; filename=\"".$fileatt_name."\"\n";
						$message.="Content-Transfer-Encoding: base64\n\n".$data."\n\n";
					}
				}
				$message.="--{$border}--\n";
			}
			else
			{
				$extra.=$content_type;
			}
			
			$to = $tomail;

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
			$headers .= "From: no-reply@buttercup.in" . "\r\n";

			// Send the email
			$mailSent = mail($to, $subject, $message, $headers);


			if($send_copy=="yes")
			{
				$copy_message="";
				$copy_fields_check=preg_split('/,/',$send_copy_fields);
				$copy_run=sizeof($copy_fields_check);
				for($i=0;$i<$copy_run;$i++)
				{
					$cur_key=$copy_fields_check[$i];
					$cur_value=$_POST[$cur_key];
					$copy_message.="\n".$cur_key.": ".$cur_value."\n\n";
				}
				$copy_email=$_POST[$copy_tomail_field];
				mail("$copy_email", "$copy_subject", "$copy_message", "From: ".$copy_from."");
			}
			if($thanks_page=="")
			{
				echo "<p>$thanks_page_title</p>";
				echo "<p>$thanks_page_text</p>";
			}
			else
			{
				ob_end_clean();
				$redirect="Location: ".$thanks_page;
				header($redirect);
			}
		}
		else
		{
			if($error_page=="")
			{
				echo "<p>$error_page_title</p>";
				echo $error_message;
				echo "<p>$error_page_text</p>";
			}
			else
			{
				ob_end_clean();
				$redirect="Location: ".$error_page;
				header($redirect);
			}
		}
	}
	else
	{
		echo "<p>Sorry, mailing request came from an unauthorized domain.</p>";
	}
}
else
{
	echo "<p>Error</p>";
	echo "<p>No form data has been sent to the script</p>";
}
if($footer!="")
{
	include($footer);
}
ob_end_flush();
?>
