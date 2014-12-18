<?php

// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Author: xiongjun <xiongjunceplj@163.com> 
// +----------------------------------------------------------------------

namespace Addons\Weather;

use Common\Controller\Addon;

/**
 * 系统环境信息插件
 * @author thinkphp
 */
class WeatherAddon extends Addon {

    public $info = array(
        'name' => 'Weather',
        'title' => '天气预报',
        'description' => '天气预报',
        'status' => 1,
        'author' => 'thinkphp',
        'version' => '0.1'
    );

    public function install() {
        return true;
    }

    public function uninstall() {
        return true;
    }

    //实现的AdminIndex钩子方法
    public function AdminIndex($param) {
        $config = $this->getConfig();
        $this->assign('addons_config', $config);
        if ($config['display'])
            $this->display('widget');
    }

}

