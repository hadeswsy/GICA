<?php
namespace Member\Controller;
use OT\DataDictionary;
use Think\Controller;
use Member\Controller\MemberController;


/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class FriendsController extends MemberController {
	
	public function index(){
		$this->display();
	}
	public function friends() {
		$uid=is_login();
		print_r("打印ID值：".$uid);
		$this->display();
	}
}