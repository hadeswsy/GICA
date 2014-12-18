<?php

namespace Member\Controller;

/**
 * 文件控制器
 * 主要用于下载模型的文件上传和下载
 */

class FinanceController extends MemberController {
	
	public function index(){
		$this->display();
	}
	public function financestatis(){
		$this->display();
	}
	public function borrowloanstatis(){
		$this->display();
	}
	
}
