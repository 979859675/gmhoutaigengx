<?php

function getHexGuid($a){
	$r='';
	while($a){
		$r = sprintf("%02X%s",bcmod($a,256),$r);
		$a = bcdiv($a,256);
	}
	return $r;
}

function mima($data,$key) {
    $signbb = md5($data.$key);
    return $signbb;
}
//更多资源下载 www.cn121.com
function exit_notice($message,$errno){
		$return=array(
			'errcode'=>intval($errno),
			'info'=>$message,
		);
		exit(json_encode($return));
		
}

function send_post($url, $data) {
	$options = array(
		'http' => array(
		'method' => 'POST',
		'header' => 'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
		'content' => $data,
		'timeout' => 15 * 60 // 超时时间（单位:s）
		)
	);
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	return $result;
}

function http_post_json($url, $data){
	$headers = array(
		'Content-Type: application/x-www-form-urlencoded; charset=utf-8'
	);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$rtn = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	return array($rtn, $httpCode);
}

function strToHex($str)
{
    $hex = "";
    for ($i = 0; $i < strlen($str); $i++)
        $hex .= dechex(ord($str[$i]));
    $hex = strtoupper($hex);
    return "0x" . $hex;
}
