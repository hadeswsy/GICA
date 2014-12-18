<?php

namespace Addons\MultiLang;
use Common\Controller\Addon;

/**
 * 多语言实现插件
 * @author flutesing(www.flutesing.com)
 */

    class MultiLangAddon extends Addon{

        public $info = array(
            'name'=>'MultiLang',
            'title'=>'多语言实现',
            'description'=>'多语言实现，需要lang文件支持，需要MultiLangModel.class.php支持',
            'status'=>1,
            'author'=>'flutesing(www.flutesing.com)',
            'version'=>'2014.5.6'
        );
        
        public function app_begin(){
            $langConfig = array(
                            'LANG_SWITCH_ON' => true,   // 开启语言包功能
                            'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
                        );
            $langConfig = array_merge($langConfig,$this->getConfig());
            C($langConfig);
            B('Behavior\CheckLang'); 
        }
        
        public function langSwitch(){
            $langs = explode(',',C('LANG_LIST')) ; 
            $get = I('get.');
            $this->assign('langs',$langs);
            $this->assign('get',$get);
            $this->display('menu');
        }
        
        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }
    }