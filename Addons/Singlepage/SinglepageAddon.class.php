<?php

namespace Addons\Singlepage;
use Common\Controller\Addon;

/**
 * 单页管理插件
 * @author 众联网通
 */

    class SinglepageAddon extends Addon{

        public $info = array(
            'name'=>'Singlepage',
            'title'=>'单页管理',
            'description'=>'主要用于管理单页',
            'status'=>1,
            'author'=>'众联网通',
            'version'=>'0.1'
        );
        public $addon_path = './Addons/Singlepage/';

        public $admin_list = array(

        		'listKey' => array(
        				'title'=>'页面标题',
        				'wordkey'=>'页面关键字',
                        'filename'=>'单页模板文件名'
                        
        		),
        		'model'=>'Singlepage',
        		'order'=>'id asc'
        );
        public $custom_adminlist = 'adminlist.html';

     
       

        public function get_TablePrefix() {
            Return C('DB_PREFIX');
        }

        public function install(){
           $SQL=<<<eof
            create table `{$this->get_TablePrefix()}singlepage`(
               `id` int(11) unsigned PRIMARY KEY AUTO_INCREMENT COMMENT '主键',
               `title`    varchar(60) NOT NULL DEFAULT '' COMMENT '页面标题',
               `wordkey`  varchar(100) NOT NULL DEFAULT '' COMMENT '页面关键字',
               `filename` varchar(100) NOT NULL DEFAULT '' COMMENT '单页模板文件名',
                `status`  CHAR(1) NOT NULL DEFAULT 1 COMMENT '是否开启 1为开启0为禁止'  
 
           )engine myisam charset utf8;              

eof;
           D()->execute($SQL);
           if(count(M()->query("SHOW TABLES LIKE '{$this->get_TablePrefix()}singlepage'")) !=1 ){

               session('addons_install_error', "{$this->get_TablePrefix()}singlepage表未创建成功，请手动检查插件中的sql，修复后重新安装");
               Return false;
           }

           Return true;
           

        }

        public function uninstall(){
     
           $sql="DROP TABLE IF EXISTS {$this->get_TablePrefix()}singlepage";
           D()->execute($sql);
           if(count(M()->query("SHOW TABLES LIKE '{$this->get_TablePrefix()}singlepage'")) >0 ){
                session('addons_uninstall_error', '{$this->get_TablePrefix()}singlepage表删除失败');
                Return false;
           }
           Return true; 
           
        }

        //实现钩子方法
        public function AdminIndex() {
            
        }



    }