<?php

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class BorrowController extends HomeController {
	
	// 系统首页
	public function index() {
		$this->display ();
	}
	// 
	public function papersinfo() {
		$uid = is_login ();
        $m=M("z_member_data_info");
        $condition['uid'] =$uid;
        $condition['type'] =2;
        $m=$m->where($condition)->select();
        // var_dump($m);

        $this->assign('list',$m);
		$this->display ();
	}
	public function circulation() {
		$this->display ();
	}
	public function circulation_save() {
		// 从表单中获取来的数据
		$uid = is_login ();
		$m = M ( "z_borrow_info" );
		$data ['borrow_name'] = $_POST ['borrow_name'];
		$data ['borrow_money'] = $_POST ["borrow_money"];
		$data ['borrow_interest_rate'] = $_POST ["borrow_interest_rate"];
		$data ['borrow_use'] = $_POST ["borrow_use"];
		$data ['borrow_duration'] = $_POST ["collect_day"];
		$data ['borrow_min'] = $_POST ["borrow_min"];
		$data ['borrow_max'] = $_POST ["borrow_max"];
		$data ['collect_time'] = $_POST ["collect_time"];
		$data ['repayment_type'] = $_POST ["repayment_type"];
		$data ['reward_vouch_rate'] = $_POST ["reward_vouch_rate"];
		$data ['borrow_info'] = $_POST ["borrow_info"];
		$data ['borrow_status'] = 0;
		$data ['borrow_uid'] = $uid;
		$data ['add_time'] = time ();
		$data ['add_ip'] = get_client_ip ();
		$condition ['uid'] = $uid;
		// 保存当前数据对象
		if ($m = $m->where ( $condition )->add ( $data )) { // 保存成功
		                                                    // 成功提示add_time
			$this->success ( L ( '发布审核已提交' ) );
		} else {
			// 失败提示
			$this->error ( L ( '发布失败' ) );
		}
	}
	/**
	 * 新增页面初始化
	 */
	public function circulation_add() {
		$listBorrow = M ( 'z_borrow_info' );
		$data ['borrow_uid'] = $this->uid;
		$data ['borrow_name'] = $_POST ['title'];
		$data ['borrow_name'] = $_POST ['title'];
		$data ['borrow_name'] = $_POST ['title'];
		$data ['borrow_name'] = $_POST ['title'];
		$data ['borrow_name'] = $_POST ['title'];
		// $data['borrow_interest'] = getBorrowInterest($data['repayment_type'],$data['borrow_money'],$data['borrow_duration'],$data['borrow_interest_rate']);
		// $data['borrow_fee'] = getFloatValue($fee_rate*$data['borrow_money'],2);
		$data ['borrow_status'] = 0;
		$data ['add_time'] = time ();
		$data ['add_ip'] = get_client_ip ();
		$data ['total'] = ($data ['repayment_type'] == 1) ? $data ['borrow_duration'] : "1";
		// $data['content'] = I('post.content');
		// $data['cid'] = I('post.cid');
		// $model_id = I('get.model_id');
		// $model = M('Model')->field('title,name,field_group')->find($model_id);
		// $this->assign('model',$model);
		// $this->assign('info', array('model_id'=>$model_id));
		// $this->meta_title = '新增属性';
		var_dump ( $data );
		
		if ($listBorrow->add ( $data )) {
			$this->success ( L ( '已提交发布，审核结果请注意查收邮箱!' ) );
		} else {
			$this->error ( L ( '对不起，提交不成功。' ) );
		}
	}
	public function detail($id = 0, $p = 1) {
		/* 标识正确性检测 */
		if (! ($id && is_numeric ( $id ))) {
			$this->error ( '投标ID错误！' );
		}
		
		/* 页码检测 */
		$p = intval ( $p );
		$p = empty ( $p ) ? 1 : $p;
		
	
		$map = array (
				'id' => $id 
		);
		$listBorrow = M ( 'z_borrow_info' );
		$list = $listBorrow->where ( $map )->select ();
		$this->assign ( 'list3', $list );
	
		$this->display ();
	}
	// 上传
	private function AddFile($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_member_data_info');
        $condition['uid'] =$uid;

        foreach($fileinfo as $vo)
        {
            $data['data_url']=$vo['savepath'].$vo['savename'];
            $data['uid']=$uid;
            $data['add_time']=time();
            $data['type']=2;
            // $data['deal_time']=$dateline;
	            if($file->where($condition)->data($data)->add($data)){
	                //
	                $i++;
	            }else{
	                  return false;
	            }
        }

        return true;
    }
     //上传
    public function upload(){
        $config=array(
            'maxSize'=>100*1024*1024*1024,
            'mimes'=>array(),
            'rootPath'=>'./Uploads/',
            'ext'=>array(),
            'autoSub'=>true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $depict=$_POST['depict'];
       $info   =   $upload->upload(); // 上传文件
        if(!$info){// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{// 上传成功

          //  var_dump($info);
            if($this->AddFile($info,$depict))//写入数据库
            {
                $this->success('上传成功！');
            }
            else{
               $this->error('写入数据库失败');
            }
        }
    }
	
}