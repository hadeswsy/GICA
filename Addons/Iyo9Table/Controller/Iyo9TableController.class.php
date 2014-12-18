<?php
// +----------------------------------------------------------------------
// | pubphp [ 让phper不再重复的造轮子 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.pubphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 誉恒 <376136620@qq.com>
// +----------------------------------------------------------------------
// | Date: 2014-05-29 16:06:51
// +----------------------------------------------------------------------

namespace Addons\Iyo9Table\Controller;
use Home\Controller\AddonsController;

/**
 * 控制器注释说明
 * @author 誉恒 <376136620@qq.com>
 */

class Iyo9TableController extends AddonsController{

    /**
     * ajax配置排序
     * @author i友街 <376136620@qq.com>
     */
    public function ajax(){
        $val = I('val');  // 传过来编辑的数据
        $id  = I('id');  // 传过来编辑的数据id

        $i_table = I('table');  //必须给的参数 要操作的数据表
        $i_map   = I('map');  //有默认值 条件字段
        $i_field = I('field'); //有默认值 数据字段

        $table = $i_table;
        $map   = empty( $i_map ) ? 'id' : $i_map;
        $d     = empty( $i_field ) ? 'sort' : $i_field;

        /* 检查输入的值是否合法 */
        if (!preg_match("/^[0-9]+$/", $val)){
            $result['status'] = 0;
        }

        $data[$d] = $val;
        $res = M($table)->where("$map=$id")->save($data); 
        if($res === false){
            $result['status'] = 0;
        }else{
            $result['status'] = 1;
            $result['data']   = $val;
        }
        $this->ajaxReturn($result);
    }
}