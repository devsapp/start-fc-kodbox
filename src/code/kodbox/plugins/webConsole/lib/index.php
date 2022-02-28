<?php

// 登录认证;
include('../../../app/api/KodSSO.class.php');
KodSSO::check('webConsole');


$NO_LOGIN = true;
$commandAlias = array(
	'll'	=> 'ls -al',
	'la'	=> 'ls -al',
	'cls'	=> 'clear',
	'ps'	=> 'ps -el',
	'.'		=> 'cd ../',
	'..'	=> 'cd ../../',
);
$commandStyle = "";
include('./webconsole.php.txt');