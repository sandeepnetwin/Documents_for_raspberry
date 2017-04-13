<?php
//socket_set_timeout($socket, 0, 500);
//ini_set('default_socket_timeout',30);
//$cmd = '0x02 0x00 0x01 0x15 0x80';
$cmd  = $_REQUEST['code'];

$result = array();
if(empty($cmd))
{
	$result = array("msg"=> "error","result"=> "please enter command code");
	
}else
{	
	$tmp =  exec("gcc var/www/html/a4p.c -o cmdsend ");
	$tmp2 = exec("./cmdsend $cmd");
	$tmp2 = trim(str_replace("ans:"," ",$tmp2));
	$result = array("msg"=> "success","result"=> $tmp2);
}
echo json_encode($result);
?>