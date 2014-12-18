<?php

namespace Addons\Iyo9Table;
use Common\Controller\Addon;

/**
 * 点击成可编辑插件插件
 * @author i友街
 */

    class Iyo9TableAddon extends Addon{

        public $info = array(
            'name'=>'Iyo9Table',
            'title'=>'点击成可编辑插件',
            'description'=>'向着要编辑的位置点击一下，访位置会变成一个可编辑的input标签，编辑好后，鼠标再点击空白地方，即可保存',
            'status'=>1,
            'author'=>'i友街',
            'version'=>'0.1'
        );

        public function install(){
            /* 先判断插件需要的钩子是否存在 */
            $this->getisHook('J_iyo9Table', $this->info['name'], $this->info['description']);
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的J_listTable钩子方法
        public function J_iyo9Table($param){
            $js = ONETHINK_ADDON_PATH . 'Iyo9Table/iyo9Table.js';
            $this->assign('vo', $param);
            $this->assign('js', $js);
            $this->display('iyo9Table');
        }

        /*
         * ===========
         * 如果在自己的项目中，这个函数最好放在function里，否则每个钩子都有这个方法，就有违代码重用原则了
         */
        public function getisHook($str, $addons, $msg=''){
            $hook_mod = M('Hooks');
            $where['name'] = $str;
            $gethook = $hook_mod->where($where)->find();
            if(!$gethook || empty($gethook) || !is_array($gethook)){
                $data['name'] = $str;
                $data['description'] = $msg;
                $data['type'] = 1;
                $data['update_time'] = NOW_TIME;
                $data['addons'] = $addons;
                if( false !== $hook_mod->create($data) ){
                    $hook_mod->add();
                }
            }
        }

    }