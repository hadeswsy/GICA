<?php

namespace Addons\documentNav;
use Common\Controller\Addon;

/**
 * 文章目录结构导航插件
 * @author che1988
 */

    class documentNavAddon extends Addon{

        public $info = array(
            'name'=>'documentNav',
            'title'=>'文章目录结构导航',
            'description'=>'提取文章的结构，创建描点位置，并且自动生成左侧导航，快速定位你的文章位置。默认是提取H1',
            'status'=>1,
            'author'=>'che1988',
            'version'=>'1.0'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的documentDetailAfter钩子方法
        public function documentDetailAfter($param){
            $this->assign('addons_config', $this->getConfig());
            $this->display('pagenav');
        }

    }