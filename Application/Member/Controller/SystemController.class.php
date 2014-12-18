<?php
namespace Member\Controller;
use OT\DataDictionary;
use Think\Controller;
class SystemController extends MemberController {
    public function index(){
    	
        
    $this->display();
    }
        public function withdrawdeposit(){
            
    	
        
    $this->display();
    }
        public function recharge(){
    	
        
    $this->display();
    }
    public function usermailindex(){
        $this->display();

    }
        public function recharge_save(){
        $uid=is_login(); 
        $condition['uid'] =$uid;
        $money=M("z_member_money");
        $money=$money->field('account_money')->where($condition)->select();//余额查询
        
        $m1=M("z_member_money");
        $money=intval ($money[0]['account_money'])+intval ($_POST['account_money']);//余额加充值金额
        $data1['account_money']=$money;
       
        $m=M("z_member_payonline");
        $data['uid']=$uid;
        $data['money']=$_POST['account_money'];
        //保存当前数据对象
        if ($m = $m->where($condition)->add($data)&&$m1 = $m1->where($condition)->save($data1)) { //保存成功
            //成功提示
            $this->success(L('充值成功。->>>>这不是真实金额'));
        } else {
            //失败提示
            $this->error(L('充值失败'));
        }
    }
        public function userbankInfo(){
    	
    $this->display();
    }
    public function userbankset(){
            $uid    =   is_login();
            $m = M('z_member_banks');
            $m_id['uid'] =$uid;
            $m = $m->where($m_id)->select();
            $this->assign('list', $m);
    	
        
    $this->display();
    }
    public function userbankset_save(){
        //从表单中获取来的数据 
        $uid=is_login(); 
        $m=M("z_member_banks");
        $data['bank_num']=$_POST['bankCard'];
        $data['bank_name']=$_POST["bankName"];
        $data['bank_address']=$_POST["subBankName"];
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }
    }
        public function userbasicdata(){
    	
        
    $this->display();
    }
        public function userbasicinfo(){
    	
        
    $this->display();
    }
        public function userchagerwithdraw(){
    	
        
    $this->display();
    }
        public function userchangebankInfo(){
    	
        
    $this->display();
    }
        public function userchangepass(){
    	
        
    $this->display();
    }
        public function userchangephone(){
    	
        
    $this->display();
    }
        public function userfinanceindex(){
    	
        
    $this->display();
    }
        public function userfindpass(){
    	
        
    $this->display();
    }
    public function userfindpassbyphone(){
    	
        
    $this->display();
    }
    public function userfindpaypass(){
    	
        
    $this->display();
    }
    public function userinfoinformset(){
    	
        
    $this->display();
    }
    public function userinfowork(){
    	
        
    $this->display();
    }
    public function usermailbanding(){
            $uid        =   is_login();
            $m = M('ucenter_member');
            $m_id['id'] =$uid;
            $m = $m->where($m_id)->select();
            $this->assign('list', $m);
            
    	
        
    $this->display();
    }
    public function userpapersinfo(){
    	
        
    $this->display();
    }
    public function userrenewalvip(){
    	
        
    $this->display();
    }
    public function userreplaymail(){
    	
        
    $this->display();
    }
    public function userreport(){
    	
        
    $this->display();
    }
    public function userricelist(){
    	
        
    $this->display();
    }
    public function userselfidcard(){
    	
        
    $this->display();
    }
    public function userselfset(){


    	
        
    $this->display();
    }
    public function add(){
        //从表单中获取来的数据 
        $uid=is_login(); 
        $m=M("z_member_info");
        $data['real_name']=$_POST["real_name"];
        $data['idcard']=$_POST["idcard"];
        $data['sex']=$_POST["sex"];
        $data['zy']=$_POST["zy"];
        $data['cell_phone']=$_POST["cell_phone"];
        $data['education']=$_POST["education"];
        $data['income']=$_POST["income"];
        $data['address']=$_POST["address"];
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }

    }
    public function userselfset_2(){
    	
        
    $this->display();
    }
    public function userselfsetok(){
    	
        
    $this->display();
    }
    public function usertrustlevel(){
    	
        
    $this->display();
    }
    public function userwithdrawindex(){
    	
        
    $this->display();
    }
    public function userwithdrawrice(){
    	
        
    $this->display();
    }
}