<?php

namespace Addons\Pagination;
use Common\Controller\Addon;

/**
 * 智能分页插件
 * @author Vace(ocdo@qq.com)
 */

    class PaginationAddon extends Addon{

        public $info = array(
            'name'=>'Pagination',
            'title'=>'智能分页',
            'description'=>'使用js分页,目前包含3种样式',
            'status'=>1,
            'author'=>'Vace(ocdo@qq.com)',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的datalist_end钩子方法
        /**
         * param中参数,钩子调用
         *     {:hook('datalist_end',1)}
         *     {:hook('datalist_end',24)}
         *     {:hook('datalist_end',array('count'=>24,'limit'=>5))}
         * param['count']=>100,//总记录数,count(data)
         * param['limit']=>20, //每页记录数
         * @param  [type] $param [description]
         * @return [type]        [description]
         */
        protected static $static=0;//在一个页面支持多次调用
        public function datalist_end(&$param){
            self::$static++;
            //参数解析

            $config = $this->getConfig();
            $gets = I('get.',array());
            $nowpage = 1;
            if($config['page_name'] && isset($gets[$config['page_name']])){
                $nowpage = $gets[$config['page_name']];
                unset($gets[$config['page_name']]);
            }

            if(is_int($param)){
                $count = $param;
            }else{
                $config = array_merge($config,$param);
                $count = isset($config['count'])?$config['count']:0;
            }
            $count = ($count>$config['limit'])?$count:'Null';
            
            $this->assign('vcount',$count);
            $this->assign('vpageid',self::$static);
            $this->assign('pageconfig',$config);
            $this->assign('currentPage',$nowpage);
            $this->assign('baseUrl',U('',$gets,''));
            $this->display('page');
        }

    }