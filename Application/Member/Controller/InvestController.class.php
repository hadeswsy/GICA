<?php
namespace Member\Controller;
use OT\DataDictionary;
use Think\Controller;
use User\Api\UserApi;
class InvestController extends MemberController {
    public function index(){
        /* 用户登录检测 */
  //       is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
  //       $uid        =   is_login();//获取当前用户UID
  //       $listMember  = M('member');
  //       $condition['uid'] =$uid;
  //       $list = $listMember->where($condition)->select();
        // $this->assign('list', $list);
  //       $this->display();

        is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
        $uid    =   is_login();//获取当前用户UID

        $listMember = M('member');
        $condition['gica_member.uid'] =$uid;
        $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();

        //投资总额查询
        $lists2_uid['investor_uid'] =$uid;
        $lists2    = D('z_borrow_investor')->field('sum(investor_capital)investor_capital')->where($lists2_uid)->order('investor_capital desc')->group('investor_uid')->select();
        $lists3_uid['borrow_uid'] =$uid;
        $lists3    = D('z_borrow_info')->field('sum(borrow_money)borrow_money')->where($lists3_uid)->group('borrow_uid')->select();
        

        $m = M('ucenter_member');//用户头像
        $condition1['gica_ucenter_member.id'] =$uid;
        $m=$m->where($condition1)->select();
        
        $this->assign('list', $list);
        $this->assign('list2', $lists2);
        $this->assign('borrow_money', $lists3);
        $this->assign('list3', $m);
        var_dump($lists2);
        $this->display();
    }
    //文件信息写入数据库
    private function AddFile($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('ucenter_member');
        $condition['id'] =$uid;
        foreach($fileinfo as $vo)
        {
            $data['logo_url']=$vo['savepath'].$vo['savename'];
            // $data['data_name']=$depict[$i];
            // $data['add_time']=$vo['savepath'];
            // $data['deal_time']=$dateline;
            if($file->where($condition)->data($data)->save()){
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
              //  $this->error('写入数据库失败');
            }

        }












    // $upload = new \Think\Upload();// 实例化上传类
    // $upload->maxSize   =     3145728 ;// 设置附件上传大小
    // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    // $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    // $upload->savePath  =     ''; // 设置附件上传（子）目录
    // // 上传文件 
    // $info   =   $upload->upload();
    // if(!$info) {// 上传错误提示错误信息
    //     $this->error($upload->getError());
    // }
    // else{// 上传成功
    //     $info['savepath'].$info['savename'];
    //     var_dump($info);
    //     $model = M('z_member_data_info');
    //     // 取得成功上传的文件信息
    //     $info = $upload->upload();
    //     // 保存当前数据对象
    //     $data['data_url'] = $info[0]['savename'];
    //     // $data['create_time'] = NOW_TIME;
    //     $model->save($data);
    //     var_dump($data);
    //     // $this->success('上传成功！');
    // }
    }
   //文件信息查看
    public function view()
    {
        $file=M('ucenter_member');

        $count=$file->count();

        $pageone=20;

        $orderby['id']='desc';

        $Page= new \Think\Page($count,$pageone);

        $show=$Page->show();

        $data=$file->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('data',$data);

        $this->assign('show',$show);

        $this->display();

    }
    //文件信息管理
    public function manage()
    {
        $file=M('ucenter_member');

        $count=$file->count();

        $pageone=20;

        $orderby['id']='desc';

        $Page= new \Think\Page($count,$pageone);

        $show=$Page->show();

        $data=$file->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('data',$data);

        $this->assign('show',$show);

        $this->display();
    }
    //文件下载
    function download(){
        $id=$_GET['id'];
        $file=M('ucenter_member');
        $data=$file->find($id);
        $filepath=$data['filepath'];
        $file_name=$data['filename'];
        $file_path = "./Uploads/".$filepath.$file_name;
       // echo $file_path;
        //转码，文件名转为gb2312解决中文乱码
        $file_name = iconv("utf-8","gb2312",$file_name);
        $file_path = iconv("utf-8","gb2312",$file_path);
        $fp = fopen($file_path,"r") or exit("文件不存在");
         //定义变量空着每次下载的大小
        $buffer = 1024;
       //得到文件的大小
        $file_size = filesize($file_path);
             //header("Content-type:text/html;charset=gb2312");
       //会写用到的四条http协议信息
        header("Content-type:application/octet-stream");
        header("Accept-Ranges:bytes");//可以忽略
        header("Content-Length: ".$file_size);//原文这里是Accept-Length经查阅http协议无此项
        header("Content-Disposition:attachment;filename=".$file_name);
//字节技术器，纪录当前现在字节数
        $count = 0;
        while(!feof($fp) && $file_size-$count>0){
//从$fp打开的文件流中每次读取$buffer大小的数据
            $file_data = fread($fp,$buffer);
            $count+=$buffer;
//将读取到的数据读取出来
            echo $file_data;
        }
//关闭文件流
        fclose($fp);
    }
  //文件编辑页面
    public function  updateFilePage()
    {
        $id=is_login();

        $model=M("ucenter_member");

        $data=$model->find($id);

        // echo $model->getLastSql();
        $this->assign('data',$data);

        $this->display();
    }
//修改文件信息
    public  function  updateFile()
    {
        $model=M("z_member_data_info");
        $data['uid']=is_login();//获取当前用户UID
        var_dump($data['uid']);
        $data['data_url']=$_POST['file'];
        // $data['depict']=$_POST['depict'];

        $num=$model->save($data);

        if($num > 0)
            $this->success("修改成功");

        else
        {
            $this->error("修改失败");
        }

    }
    //删除文章
    public  function  deleteFile()
    {
        $id=$_GET['id'];

        $model=M("ucenter_member");



        $data=$model->find($id);
        $filepath=$data['filepath'];
        $file_name=$data['filename'];
        $file_path = "./Uploads/".$filepath.$file_name;

        if(unlink($file_path))
        {
            $num=$model->delete($id);
            if($num > 0)
            {


                $this->success("删除成功","/fileupload/index.php/Home/Index/manage");

            }
        }


        // $this->assign('data',$data);
        //$this->display();
    }
    public function test(){
    $data = I('post.all_school');
    $this->ajaxReturn($data);
    }
    public function investindex(){
        $uid = is_login();//获取当前用户UID
        $borrow_info = M('z_borrow_info');
        $condition['investor_uid'] =$uid;
        $borrow_info=$borrow_info->select();

        $this->assign('list',$borrow_info);
        $this->display();
    }
    public function borrowmanager(){
        $uid = is_login();//获取当前用户UID
        $borrow_info = M('z_borrow_info');
        $condition['investor_uid'] =$uid;
        $borrow_info=$borrow_info->select();

        $this->assign('list',$borrow_info);
        $this->display();
    }
    public function borrowprotocol(){
        $this->display();
    }

}