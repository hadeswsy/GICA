<?php

namespace Addons\EasyGo;
use Common\Controller\Addon;

/**
 * EasyGo输入框增强插件插件
 * @author che1988  zhuxiulai@qq.com
 */

    class EasyGoAddon extends Addon{

        public $info = array(
            'name'=>'EasyGo',
            'title'=>'EasyGo输入框增强插件',
            'description'=>'EasyGo是一个让输入框增强的一个插件，现在有取色器，时间选择器，地图选择器等等',
            'status'=>1,
            'author'=>'che1988',
            'version'=>'0.1'
        );

        public function install(){
            /* 先判断插件需要的钩子是否存在 */
            $hook_mod = M('Hooks');
            $where['name'] = 'EasyGo';
            $gethook = $hook_mod->where($where)->find();
            if(!$gethook || empty($gethook) || !is_array($gethook)){
                $data['name'] = 'EasyGo';
                $data['description'] = 'EasyGo输入框增强';
                $data['type'] = 1;
                $data['update_time'] = NOW_TIME;
                $data['addons'] = "EasyGo";
                if( false !== $hook_mod->create($data) ){
                    $hook_mod->add();
                }
            }
			return true;
        }

        public function uninstall(){
            return true;
        }
		
		/* 显示文档模型编辑页插件扩展信息表单 */
		public function EasyGo($param = array()){
			$this->assign('param',$param);
			$this->assign('config', $this->getConfig());
			/* $param[0] 选择器类型
			** 1：颜色  2：时间
			*/
			switch($param['0']){
				case 1://颜色选择器
					if(!isset($param['2']) || $param['2']==1){
						$this->display('Color/content1');
					}elseif($param['2']==2){
						$this->display('Color/content2');
					}	
					break;
				case 2://时间选择器
					if(!isset($param['2']) || $param['2']==1){
						$this->display('Date/content1');
					}elseif($param['2']==2){
						
					}
					break;
				case 3://地图坐标选择器
					if(!isset($param['2']) || $param['2']==1){
						$this->display('Map/content1');
					}elseif($param['2']==2){
						
					}
			}
			
		}


    }