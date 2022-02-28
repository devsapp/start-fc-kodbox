<?php
class webConsolePlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regist(){
		$this->hookRegist(array('user.commonJs.insert'=> 'webConsolePlugin.echoJs'));
	}
	public function echoJs(){
		$this->echoFile('static/main.js');
	}
}