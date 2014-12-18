<?php

namespace Addons\Statistics;
use Common\Controller\Addon;

/**
 * 通用网站统计插件。
 * @author www.novasoftware.cn
 */

    class StatisticsAddon extends Addon{

        public $info = array(
            'name'=>'Statistics',
            'title'=>'通用网站统计',
            'description'=>'启用插件并设置统计代码，统计功能就可以工作了。支持百度、Google、51.la等所有Javascript的统计代码。',
            'status'=>1,
            'author'=>'www.novasoftware.cn',
            'version'=>'1.0'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //pageFooter hook
        public function pageFooter($param){
        	$config = $this->getConfig();
        	echo '<div class="hidden" style="display: none !important; visibility: hidden !important; opacity: 0 !important; background-position: 1px 1px;>'.$config['code'].'</div>';
        }

    }