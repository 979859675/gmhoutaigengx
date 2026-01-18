<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
ini_set('date.timezone','Asia/Shanghai');
session_start();
//==================================================
$key='// 有分享 www.cn121.com 欢迎来访！ 勿改';
//==================================================

    $_SESSION['gmbt'] ='WWW.CN121.COM';
	$gmbt = '星云记';  //标题	
	$gmcodeb = '121121';  //GM码
	$gmkey="8ee08fa5f536da63bc95e633a5113b19";
	$sa="%2F%2F%20%E6%9C%89%E5%88%86%E4%BA%AB%20www.cn121.com%20%E6%AC%A2%E8%BF%8E%E6%9D%A5%E8%AE%BF%EF%BC%81%20%E5%8B%BF%E6%94%B9";
	$xname="角色名";// 界面显示的 授权游戏角色名 这里方便统一
	$disables=array();
	$vip='xyj_';
	$frefresh=3;//防刷新间隔 秒
    $title   = '系统邮件';
    $contents = '星云记-系统官方给您发邮件了！';
	$yzfvip=array(//自行修改VIP权限
	'1'=>'VIP1只充值',   
	'2'=>'VIP2充值+物品',
	);
	/*
	 * 区服相关
	 */
	$quarr=array(
		'1'=>array(
			'name'=>'有分享1区',
			'db_ip'=>'127.0.0.1',
			'db_port'=>3306,
			'db_name1'=>'game_gm',
			'db_name'=>'game',
			'db_user'=>'root',
			'db_pswd'=>'123456',
			'db_server'=>40,// 区服端口
			'gm_url'=>'http://127.0.0.1:9090/api/gm',
			'gm_user'=>'admin',
			'gm_pass'=>'cn121.com',
            'hidde'=>false // false是开 true是关
		),
      	'2'=>array(
			'name'=>'有分享2区',
			'db_ip'=>'127.0.0.1',
			'db_port'=>3306,
			'db_name1'=>'game_gm',
			'db_name'=>'game2',
			'db_user'=>'root',
			'db_pswd'=>'123456',
			'db_server'=>41,// 区服端口
			'gm_url'=>'http://127.0.0.1:9090/api/gm',
			'gm_user'=>'admin',
			'gm_pass'=>'cn121.com',
            'hidde'=>false // false是开 true是关
		),
	);

include_once 'conn.php';	