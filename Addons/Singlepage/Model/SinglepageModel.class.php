<?php

namespace Addons\Singlepage\Model;
use Think\Model;

/**
 * Singlepage模型
 */

class SinglepageModel extends Model{
    public function User_update() {
        $data=$this->create();
        if($this->save($data)) Return true;
        Return false;
    }

    public function User_add() {
        $data=$this->create();
        if($this->add($data)) Return true;
        Return false;
        
    }

    public function del($id) {
        if($this->where("id='$id'")->delete()) Return true;
        Return false;

    }

    public function off($id) {
        $data['id']=$id;
        $data['status']=0;
        if($this->save($data)) Return true;
        Return false;
        
    }
    public function open($id) {
        $data['id']=$id;
        $data['status']=1;
        if($this->save($data)) Return true;
        Return false;
        
    }
}
