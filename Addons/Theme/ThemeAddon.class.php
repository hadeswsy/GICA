<?php
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
namespace Addons\Theme;
use Common\Controller\Addon;

/**
 * 系统环境信息插件  修改来自http://www.onethink.cn/topic/2383.html
 * @author 443721842@qq.com
 */
class ThemeAddon extends Addon{

    public $info = array(
        'name'=>'Theme',
        'title'=>'系统主题',
        'description'=>'系统主题',
        'status'=>1,
        'author'=>'443721842@qq.com',
		'url'=>'443721842@qq.com',
        'version'=>'0.1'
    );

    public function install(){
        return true;
    }

    public function uninstall(){
        return true;
    }
	
	
    public function path(){
        if(!defined('DEFAULT_MODULE'))
            define('DEFAULT_MODULE', 'Home');
        if(!defined('FRONT_THEME_PATH')){
            if(C('VIEW_PATH')){ // 视图目录
                define('FRONT_THEME_PATH',   C('VIEW_PATH').DEFAULT_MODULE.'/');
            }else{ // 模块视图
                define('FRONT_THEME_PATH',   APP_PATH.DEFAULT_MODULE.'/'.C('DEFAULT_V_LAYER').'/');
            }
        }
    }
    //实现的AdminIndex钩子方法
    public function AdminIndex($param){
        $config = $this->getConfig();
        $this->assign('addons_config', $config);
        if($config['display']){
		$this->path();
        $themes = glob(FRONT_THEME_PATH . '*'); 
        if ($themes) {
            $activated = 0;
            $result = array();
            foreach ($themes as $key => $theme) {
                $themeFile = $theme . '/theme.ini';
                if(file_exists($themeFile)){
                    $info = parse_ini_file($themeFile);
                    $info['name'] = basename($theme);
                    if ($info['activated'] = (C('FRONT_THEME') == $info['name'])) {
                        $activated = $key;
                    }
                }
                $screen = glob($theme . '/screen*.{jpg,png,gif,bmp,jpeg,JPG,PNG,GIF,BMG,JPEG}', GLOB_BRACE);
                if ($screen) {
                    $info['screen'] =  FRONT_THEME_PATH.$info['name']."/".basename(current($screen));
					//U(ltrim(FRONT_THEME_PATH,'.').$info['name'].'/'.basename(current($screen)) , '', false);
                } else {
                    $info['screen'] =  APP_PATH.'admin/'.C('DEFAULT_V_LAYER').'/theme/noscreen.png';
                }
                $result[$key] = $info;
            }
            $this->assign('activated', $activated);
            $this->assign('list', $result);
        }

        $this->display('index');
        }
    }
}