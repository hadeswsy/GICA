<?php

namespace Addons\Wsearch;
use Common\Controller\Addon;

/**
 * 站外搜索插件
 * @author 蜜耘
 */

    class WsearchAddon extends Addon{

        public $info = array(
            'name'=>'Wsearch',
            'title'=>'站外搜索',
            'description'=>'根据标题进行站外搜索，如百度，谷歌，网盘等',
            'status'=>1,
            'author'=>'蜜耘',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的documentDetailAfter钩子方法
        public function documentDetailAfter($param){
            $this->assign('Wsearch_config', $this->getConfig());
            $this->display('Wsearch');

        }

    }