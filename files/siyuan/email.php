<?php
header("Content-Type: text/html; charset=utf-8");

//引入发送邮件类
require("assets/email/smtp.php"); 
//使用qq邮箱服务器
$smtpserver = "smtp.qq.com";
//qq邮箱服务器端口 
$smtpserverport = 465;
//你的qq服务器邮箱账号
$smtpusermail = "huangpan1997@qq.com";
//收件人邮箱
$smtpemailto = "huangpan1997@qq.com";

//你的邮箱账号(去掉@qq.com)
$smtpuser = "huangpan1997";//你的qq邮箱去掉后面的qq.com
//你的邮箱密码
$smtppass = "sxeojjzrdnngdiab"; //你的qq邮箱SMTP的授权码，千万不要填密码！！！

//邮件主题 
$mailsubject = "测试邮件发送";
//邮件内容 
$mailbody = "PHP+MySQL";
//邮件格式（HTML/TXT）,TXT为文本邮件 
$mailtype = "TXT";
//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
//是否显示发送的调试信息 
$smtp->debug = TRUE;
//发送邮件
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 

?>