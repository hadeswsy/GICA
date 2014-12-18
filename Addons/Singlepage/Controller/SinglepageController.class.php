<?php

namespace Addons\Singlepage\Controller;
use Home\Controller\AddonsController;

class SinglepageController extends AddonsController{
    public $SingModel;
    public function add() { 
       $id=I('id',0,'intval'); 
       if($id!=0){
            $info=$this->SingModel->where("id='$id'")->find();
            $this->assign('info',$info);
           
            $this->assign('id',$id);
       }
       $this->assign('template',$temp);   

       
       $this->display(T('Addons://Singlepage@Singlepage/edit'));
    }
    public function check() {
        $model=M("{$this->getPreFix}addons");
        $result=$model->where("name='Singlepage'")->find();
        if(empty($result)) $this->error('该插件未安装或不存在！', Cookie('__forward__'));
        $temp=str_replace('Singlepage/edit.html','Single_template',T('Addons://Singlepage@Singlepage/edit'));
    }
    public function __construct() {
        parent::__construct();
        $this->SingModel=D('Addons://Singlepage/Singlepage');
        $this->check();
    }
    public function del() {
       if(IS_GET){ 
           $id=I('id',0,'intval');
           $model=D('Addons://Singlepage/Singlepage');
           if($model->del($id)){
              $this->success('删除成功',Cookie('__forward__'));
           }else{
              $this->error('删除失败',Cookie('__forward__'));  
           }
       }else{
            $this->error('格式错误',Cookie('__forward__'));  
       }
       
    }
    public function off() {
        if(IS_GET){
           
            $id=I('id',0,'intval');
            if($this->SingModel->off($id)){
                $this->success('禁用成功',COOKIE('__forward__'));
            }else{
                $this->error('已经禁用中！请不要重复操作。',COOKIE('__forward__'));
            }

        }else{
        
                $this->error('格式不正确',Cookie('__forward__'));     
        }

    }

    public function open() {
        if(IS_GET){
           
            $id=I('id',0,'intval');
            if($this->SingModel->open($id)){
                $this->success('启用成功',COOKIE('__forward__'));
            }else{
                $this->error('已经是启用中！请不要重复操作。',COOKIE('__forward__'));
            }

        }else{
        
                $this->error('格式不正确',Cookie('__forward__'));     
        }

    }

    public function update() {
     
        if(IS_POST){
            $id=I('id',0,'intval');
          
           
            if($id==0){
              
                if($this->SingModel->User_add() ){
                   
                    $this->success('添加成功', Cookie('__forward__'));
                }else{
                    
                    $this->error('添加失败', Cookie('__forward__'));
                }

            }else{
                if($this->SingModel->User_update()){
                    $this->success('更新成功', Cookie('__forward__'));
                }else{
                    $this->error('更新失败', Cookie('__forward__'));
                }
                
            }

        }else{
           $this->error('格式不正确',Cookie('__forward__'));
        }
    }

    public function savestatus(){
		$status = I('get.status');
		$ids = I('post.id');
	
		if($status == 1){
			foreach ($ids as $id)
			{
				$this->SingModel->open($id);
			}
			$this->success('成功启用该广告位',Cookie('__forward__'));
		}else{
			foreach ($ids as $id)
			{
				$this->SingModel->off($id);
			}
			$this->success('成功禁用该广告位',Cookie('__forward__'));
		}
	
	}
    public function delAll() {
       $ids = I('post.id');
       foreach($ids as $id) {
        $this->SingModel->del($id);   
       }
       $this->success('删除成功',Cookie('__forward__'));
    }
    

    
}
