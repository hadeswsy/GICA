<?php

namespace Addons\Links;
use Common\Controller\Addon;
use Think\Db;
/**
 * 友情连接插件
 * @author cepljxiongjun
 */

    class LinksAddon extends Addon{

        public $info = array(
            'name'=>'Links',
            'title'=>'友情连接',
            'description'=>'友情连接插件',
            'status'=>1,
            'author'=>'cepljxiongjun',
            'version'=>'0.1'
        );
        
        public $addon_path = './Addons/Links/';
        
        /**
         * 配置列表页面
         * @var unknown_type
         */
        public $admin_list = array(
        		'listKey' => array(
        				'title'=>'站点名称',
        				'status'=>'显示状态',
        				'level'=>'优先级',
        				'create_time'=>'开始时间',
        		),
        		'model'=>'Links',
        		'order'=>'level desc,id asc'
        );
        public $custom_adminlist = 'adminlist.html';
 
        /**
         * (non-PHPdoc)
         * 安装函数
         * @see \Common\Controller\Addons::install()
         */
		public function table_name(){
			$db_prefix = C('DB_PREFIX');
            $table_name = "{$db_prefix}links";
			return $table_name;
		}
        public function install(){
            $sql=<<<SQL
CREATE TABLE IF NOT EXISTS `{$this->table_name()}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` char(80) NOT NULL DEFAULT '' COMMENT '站点名称',
  `link` char(140) NOT NULL DEFAULT '' COMMENT '链接地址',
  `level` int(3) unsigned NOT NULL DEFAULT '0' COMMENT '优先级',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态（0：禁用，1：正常）',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='友情连接表';
SQL;
            D()->execute($sql);
            if(count(M()->query("SHOW TABLES LIKE '".$this->table_name()."'")) != 1){
                session('addons_install_error', ',links表未创建成功，请手动检查插件中的sql，修复后重新安装');
                return false;
            }
            return true;
        }

        /**
         * (non-PHPdoc)
         * 卸载函数
         * @see \Common\Controller\Addons::uninstall()
         */
        public function uninstall(){
			$db_prefix = C('DB_PREFIX');
            $sql = "DROP TABLE IF EXISTS `".$this->table_name()."`;";
            D()->execute($sql);
            return true;
        }      
        
        //实现的pageFooter底部钩子
        public function indexExpand($param){
        	$list = D('Addons://Links/Links')->linkList();
        	if(!$list)
        		return ;
			$this->assign('list',$list);
			$this->assign('link',$param);
			$this->display('widget');
        }              
}