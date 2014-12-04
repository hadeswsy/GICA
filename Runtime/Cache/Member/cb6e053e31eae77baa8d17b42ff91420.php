<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
    	<!-- one样式 -->
    
    <!--<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>-->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
    <!-- <link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet"> -->

	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/static/jquery.form.js"></script>
	<!-- 引入弹窗 -->
	<!--<script type="text/javascript" src="/Public/static/ymPrompt-4.0-B-20090302/ymPrompt.js"></script>-->
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />
	<!-- 引入弹窗样式 -->
    <!--<link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />-->
    <!--<link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>-->
    <!--<script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>-->
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>
</head>
<body>
	<!-- 头部 -->
	<!--header-->
<div class="topline_box1">
	<div class="top_line">
		<div class="top_phone">
			4888-888-888
		</div>
			<div class="topline_right">
				<ul>
					<li>
						<a href="javascript:void(0);" class="xsrw"></a>
					</li>
					<li>
						<a href="javascript:void(0);" class=" tipxia">策划中的活动</a>
					</li>
					<!--<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官A群:888888888</a>
							<a>官B群:666666666</a>
						</div>
					</li>

					<?php if(is_login()): ?><li><a href="<?php echo U('Member/Index/index');?>"><?php echo get_username();?></a></li>
                                <li><a href="<?php echo U('Home/User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('Home/User/logout');?>">退出</a></li>
					<?php else: ?>

					<li>
						<a href="<?php echo U('Home/User/register');?>" class="mfzc">免费注册</a>
					</li>
					<li>
						<a href="<?php echo U('Home/User/login');?>" class="ljdl"> 立即登录</a>
					</li><?php endif; ?>
				</ul>
			</div>
	</div>
</div>
<div class="header">
	<div class="logo">
		<a href=""><img src="/Public/static/rzg_images/img/logo.gif"/>
		</a>
	</div>
	<div class="nav">
	    <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

<!-- header end-->、
<script>
	//alert("dafdadfafasfasfa");
	//$(function() {
	//alert("123464677");

	//  alert("1234567");
	//  $("#gfq").mouseover(function(){
	//  alert("123456789flajfalfj");
	//	 $("#rzggf").show();
	// });
	//  $("#gfq").mouseout(function(){
	//  alert("123456789flajfalfj");
	// $("#rzggf").hide();
	// });
    //Q群号滑动效果
	$("#gfq").hover(function() {
		$("#rzggf").slideToggle();
	});
	//});
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	 

<block name="body">
		 <!-- 引用头部公共部分  -->
		<div class="nymain"><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wdzh">
				<div class="l_nav">
					 <!-- 引用我的帐号主页左边栏  -->
					<div class="box">
	<div class="til">
		<h2>
			个人中心
		</h2>
	</div>
	<ul>
		<li id="li_1">
			<a href="<?php echo U('Member/index');?>" >我的主页</a>
		</li>
		<li id="li_16">
			<a href="<?php echo U('Userinfo/userselfset');?>">基本认证</a>
		</li>
		<li id="li_3">
			<a href="javascript:void(0);" class="shigong">融资认证</a>
		</li>
		
		<li id="li_5">
			<a href="javascript:void(0);" class="shigong">安全设置</a>
		</li>
        <li id="li_121"><a href="javascript:void(0);" class="shigong">安全中心</a></li>
		<li id="li_2">
			<a href="javascript:void(0);" class="shigong">充值提现</a>
		</li>
		<li id="li_4">
			<a href="javascript:void(0);" class="shigong">站内信</a>
		</li>
		<li id="li_6">
			<a href="<?php echo U('Friends/friends');?>" class="shigong">好友管理</a>
		</li>
<li id="li_123"><a href="javascript:void(0);" class="shigong">通知设置</a></li>
	</ul>
</div>
<div class="box">
	<div class="til">
		<h2>
			借款管理
		</h2>
	</div>
	<ul>
		<li id="li_7" class="fir">
			<a href="javascript:void(0);" class="shigong">还款管理</a>
		</li>
		<li id="li_8">
			<a href="javascript:void(0);" class="shigong">已发布的借款</a>
		</li>
		<li id="li_9">
			<a href="javascript:void(0);" class="shigong">贷款统计</a>
		</li>
	</ul>
</div>
<div class="box">
	<div class="til">
		<h2>
			理财管理
		</h2>
	</div>
	<ul>
		<li id="li_10">
			<a href="javascript:void(0);" class="shigong">我的投标</a>
		</li>
		<li id="li_11">
			<a href="javascript:void(0);" class="shigong">我关注的借款</a>
		</li>
		<li id="li_12">
			<a href="javascript:void(0);" class="shigong">理财统计</a>
		</li>
		<li id="li_13"><a href="javascript:void(0);" class="shigong">自动投标</a></li>
	</ul>
</div>

      <div class="box">
      <div class="til"><h2>债权管理</h2>
      </div>
      <ul><li id="li_14"><a href="javascript:void(0);" class="shigong">债权转让</a></li>
			<li id="li_15"><a href="javascript:void(0);" class="shigong">债权竞拍</a></li>
</ul>
</div>

				</div>
				<div class="r_main" style="border: none; margin: 0; width: 761px">
					<div class="box box2" style="border-bottom: none;">
						<h2 class="grisnd">
							我的个人信息
						</h2>
						<div class="box-main">
							<div style="overflow: hidden; ">
								<div class="pic_info">
									<div class="pic"><?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["logo_url"] == ''): ?><img src="/Public/static/rzg_images/default-img.jpg" width="128" height="128">
											<?php elseif($vo["logo_url"] != ''): ?>
											<img src="Uploads/<?php echo ($vo["logo_url"]); ?>" width="128" height="128"><?php endif; endforeach; endif; else: echo "" ;endif; ?>
											
									</div>
									<p>
										<a href="javascript:void(0);" id="test2" class="shigong1">更换头像</a>
										<!-- <a href="javascript:void(0);" id="test1">更换头像</a> --><!-- <input type="file"  name="file[]"><input  type="submit"  value="上传"> -->
									</p>
								</div>
								<div class="xx_info">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<th align="right">
												用户名：
											</th>
											<td>
												<span id="u"><?php echo get_username();?></span>
											</td>
										</tr>
										<tr>
											<th align="right">
												注册时间：
											</th>
											<td>
												<?php echo (date('Y-m-d H:i:s',$vo["reg_time"])); ?>
											</td>
										</tr>
										
										<tr>
											<th align="right">
												会员积分：
											</th>
											<td>
												<img src="/Public/static/rzg_images/ico_r_1.gif"onclick=qvip();;;;;;;;;;;;style="cursor: pointer;" />
											</td>
										</tr>
										
<!-- 									<tr>
											<th align="right">
												个人统计：
											</th>
											<td>
												<s:if test="#request.homeMap.borrowNum !=''">${homeMap.borrowNum}</s:if>
												<s:else>0</s:else>
												条借款记录，
												<s:if test="#request.homeMap.investNum !=''">${homeMap.investNum}</s:if>
												<s:else>0</s:else>
												条投标记录
											</td>
										</tr> -->
									</table>

								</div>
								<div class="hy_info">
									<?php if($vo["status"] == 1): ?><a href="<?php echo U('Userinfo/userrenewalvip');?>" class="vipbtn" target="_self">会员续费</a>
									<?php elseif($vo["status"] == 0): ?>
										<a href="<?php echo U('Userinfo/bevip');?>" class="vipbtn" target="_self">成为会员</a><?php endif; ?>
										<p style="padding-left: 13px">
											会员到期：&nbsp;&nbsp;
											<span><?php echo (date('Y-m-d H:i:s',$vo["time_limit"])); ?></span>
										</p>
										<p style="padding-left: 0px">
											最后登陆时间：&nbsp;&nbsp;
											<span style="color:#000"><?php echo (date('Y-m-d H:i:s',$vo["last_login_time"])); ?></span>
										</p>
										<p style="padding-left: 0px">
											最后登录IP：&nbsp;&nbsp;
											<span style="color:#000"><?php echo get_client_ip();?></span>
										</p>
										<div style="padding-left: 0px;overflow:hidden;width:500px;">
											<p style="float:left;">所属的客服：</p>
											<span style="float:left;color:#B70000;padding:0 0 0 18px;"><?php echo ($vo["customer_name"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
											<span style="float:left;padding:0 5px;">QQ</span>
											 <!-- WPA Button Begin  -->
											<div style="float:left;margin-top:3px;">
											<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNjA2MV8xNTkyMzRfNDAwMDkxMTgwNl8"></script>
											</div>
											 <!-- WPA Button End  -->
										</div>
										<p></p>
								</div>
								 <!-- 认证管理  -->
								<div class="gr_rzgl"><?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($i % 2 );++$i;?><table>
										<tr>
											<th align="right">
												认证管理：
											</th>
											 <!-- 邮箱认证 -->
											<td>
											    <?php if($vs["email_status"] == 0): ?><a href="<?php echo U('Userinfo/usermailbanding');?>"><img
															src="/Public/static/rzg_images/img/h_yx_pic.jpg" title="邮箱未认证" />
													</a>
												<?php elseif($vs["email_status"] == 1): ?>
												     <a href="<?php echo U('Userinfo/usermailbanding');?>"><img
															src="/Public/static/rzg_images/img/l_yx_pic.jpg" title="邮箱已认证" />
													</a><?php endif; ?>
											</td>
											<td>
												&nbsp;&nbsp;
											</td>
											 <!-- 手机认证 -->
											<td><?php if($vs["phone_status"] == 0): ?><a href="<?php echo U('Userinfo/userchangephone');?>"><img
															src="/Public/static/rzg_images/img/h_sj_pic.jpg" title="手机未认证" />
													</a>
												<?php elseif($vs["phone_status"] == 1): ?>
												     <a href="<?php echo U('Userinfo/userchangephone');?>"><img
															src="/Public/static/rzg_images/img/l_sj_pic.jpg" title="手机已认证" />
													</a><?php endif; ?>
											</td>
											<td>
												&nbsp;&nbsp;
											</td>
											 <!-- 身份证认证  -->
											<td><?php if($vs["id_status"] == 0): ?><a href="<?php echo U('Userinfo/userselfset');?>">
													<img src="/Public/static/rzg_images/img/h_sfz_pic.jpg" title="身份证未认证" />
												</a>
												<?php elseif($vs["id_status"] == 1): ?>
												     <a href="<?php echo U('Userinfo/userselfset');?>">
													<img src="/Public/static/rzg_images/img/l_sfz_pic.jpg" title="身份证已认证" />
												    </a><?php endif; ?>
											</td>
											<td>
												&nbsp;&nbsp;
											</td>

											<!-- 银行卡认证 -->
											<td><?php if($vs["credit_status"] == 0): ?><a href="<?php echo U('Userinfo/userbankset');?>">
													<img src="/Public/static/rzg_images/img/h_yhk_pic.jpg" title="银行卡未认证" />
												</a>
												<?php elseif($vs["credit_status"] == 1): ?>
												     <a href="<?php echo U('Userinfo/userbankset');?>">
													<img src="/Public/static/rzg_images/img/l_yhk_pic.jpg" title="银行卡已认证" />
												    </a><?php endif; ?>
											</td>
											<td>
												&nbsp;&nbsp;
											</td>
											 <!-- VIP认证 -->
											<td><?php if($vs["video_status"] == 0): ?><a href="<?php echo U('Userinfo/userrenewalvip');?>">
													<img src="/Public/static/rzg_images/img/h_vip_pic.jpg" title="VIP未认证" />
												</a>
												<?php elseif($vs["video_status"] == 1): ?>
												     <a href="<?php echo U('Userinfo/userrenewalvip');?>">
													<img src="/Public/static/rzg_images/img/l_vip_pic.jpg" title="VIP已认证" />
												    </a><?php endif; ?>
											</td>
											<td>
												&nbsp;&nbsp;
											</td>
										</tr>
									</table><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<br />


							</div>
							<br/>
							<div class="tips" style="width: 90%; margin: 0 auto">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<th>
											<img src="/Public/static/rzg_images/022713_28.jpg" width="12" height="12" />
											温馨提示：
										</th>
										<td>
											未读站内信
											<a href="javascript:void(0);" target="_self">（0）</a>封
										</td>
										<td>
											本月待还款
											<?php if($vs["money_collect"] != ''): ?><a href="javascript:void(0);" target="_self">（<?php echo ($vo["money_collect"]); ?>）</a>个
											<?php elseif($vs["money_collect"] == ''): ?>
											<a href="javascript:void(0);" target="_self">（无）</a><?php endif; ?>
										</td>
										<td>
											本月待收款
											<?php if($vs["money_collect"] != ''): ?><a href="javascript:void(0);" target="_self">（<?php echo ($vo["money_collect"]); ?>）</a>个
											<?php elseif($vs["money_collect"] == ''): ?>
											<a href="javascript:void(0);" target="_self">（无）</a><?php endif; ?>
										</td>
									</tr>
									<tr>
										<td>
											&nbsp;
										</td>
										<td>
											逾期待还款
											<?php if($vs["money_collect"] != ''): ?><a href="javascript:void(0);" target="_self">（<?php echo ($vo["money_collect"]); ?>）</a>个
											<?php elseif($vs["money_collect"] == ''): ?>
											<a href="javascript:void(0);" target="_self">（无）</a><?php endif; ?>
										</td>
										<td>
											等待审核借款
											<?php if($vs["money_collect"] != ''): ?><a href="javascript:void(0);" target="_self">（<?php echo ($vo["money_collect"]); ?>）</a>个
											<?php elseif($vs["money_collect"] == ''): ?>
											<a href="javascript:void(0);" target="_self">（无）</a><?php endif; ?>
										</td>
										<td>
											上传资料
											<?php if($vs["money_collect"] != ''): ?><a href="javascript:void(0);" target="_self">（<?php echo ($vo["money_collect"]); ?>）</a>个
											<?php elseif($vs["money_collect"] == ''): ?>
											<a href="javascript:void(0);" target="_self">（无）</a><?php endif; ?>
										</td>
									</tr>
								</table>

							</div>
						</div>
					</div>
					<div class="box" style="border-bottom: none;">
						<div class="box-main" style="padding-left: 70px;">
							<div class="mid">
								<ul>
									<li>
										<a href="<?php echo U('Userinfo/userchagerwithdraw');?>" target="_self"><img
												src="/Public/static/rzg_images/022713_32.jpg" width="32" height="35" /> </a>
										<br />
										<a href="<?php echo U('Userinfo/userchagerwithdraw');?>" target="_self">我要充值</a>
									</li>
									<li>
										<a href="<?php echo U('Userinfo/userchagerwithdraw');?>" target="_self"><img
												src="/Public/static/rzg_images/ti_34.jpg" width="32" height="35" /> </a>
										<br />
										<a href="<?php echo U('Userinfo/userchagerwithdraw');?>" target="_self">我要提现</a>
									</li>
									<li>
										<a href="<?php echo U('Home/Finance/index');?>" target="_self"><img
												src="/Public/static/rzg_images/022713_36.jpg" width="32" height="35" /> </a>
										<br />
										<a href="<?php echo U('Home/Finance/index');?>" target="_self">我要理财</a>
									</li>
									
									<li>
										<a href="#"><img
												src="/Public/static/rzg_images/022713_38.jpg" width="32" height="35" /> </a>
										<br />
										<a href="#">我要还款</a>
									</li>
									<li>
										<a href="#" target="_self"><img
												src="/Public/static/rzg_images/022713_40.jpg" width="32" height="35" /> </a>
										<br />
										<a href="#" target="_self">待收款</a>
									</li>
									<li>
										<a href="#"><img
												src="/Public/static/rzg_images/022713_42.jpg" width="32" height="35" /> </a>
										<br />
										<a href="#">资金流水</a>
									</li>
									<li>
										<a href="<?php echo U('Home/Borrow/index');?>" target="_self"><img
												src="/Public/static/rzg_images/022713_44.jpg" width="32" height="35" /> </a>
										<br />
										<a href="<?php echo U('Home/Borrow/index');?>" target="_self">我要借款</a>
									</li>
								</ul>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box">
						<h2 class="otherh2">
							账户详情：
						</h2>
						<div class="box-main">
							<table border="0" cellpadding="0" cellspacing="0" class="zhtab">
								<tr>
									<th colspan="3" align="left">
										账户总汇：
									</th>
								</tr>
								<tr>
									<td>
										账户总额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["account_money"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										可用余额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["account_money"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										冻结金额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_freeze"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								<tr>
									<td>
										总收益：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										利息收益：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										其他收益：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								<tr>
									<th colspan="3" align="left">
										投资总汇：
									</th>
								</tr>
								<tr>
									<td>
										已收总额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										已收本金：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										已收利息：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								<tr>
									<td>
										待收总额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										待收本金：￥
										<?php if($vo["account_money"] != ''): echo ($vo["back_money"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										待收利息：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								<tr>
									<th colspan="3" align="left">
										借款总汇：
									</th>
								</tr>
								<tr>
									<td>
										已还总额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										已还本金：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										已还利息：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								<tr>
									<td>
										待还总额：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										待还本金：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
									<td>
										待还利息：￥
										<?php if($vo["account_money"] != ''): echo ($vo["money_collect"]); ?>
										<?php elseif($vo["account_money"] == 1): ?>
										0<?php endif; ?>
									</td>
								</tr>
								
								
								<tr>
									<th colspan="3" align="left">
										最近还款：
									</th>
								</tr>
								<tr>
									<td>
										最近还款日：
										<s:if test="#request.repayMap.minRepayDate == ''">无</s:if>
									</td>
									<td>
										最近还款金额：
										<s:if test="#request.repayMap.totalSum != ''">
											<fmt:formatNumber value="${repayMap.totalSum}" type="number"
												pattern="￥0.00" />
										</s:if>
										<s:else>0.00</s:else>
									</td>
									<td>
										&nbsp;
									</td>

								</tr>
							</table>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
		 <!-- 引用底部公共部分  -->
		<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
		<script type="text/javascript"src="script/jbox/jquery.jBox-2.3.min.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>

 <!--<script type="text/javascript">
 function validate(){
   document.getElementByIdx_x('myform').submit();
 }
 window.load=validate();
 </script>-->
<script>
$('#test1').on('click', function(){
    layer.prompt({title: '随便上传个东东，并确认',type: 2}, function(file){   
    	$.ajax({
type: "post",
url: "<?php echo U('Member/index/test');?>",
data: "all_school=" + all_school,
beforeSend: function() {
	alert(file);
},
error: function(request) {
},
success: function(data) {
}
});
    	  
});
});
</script>
<script>
	$('#test2').on('click', function(){
		// layer.msg('正在施工，无法更换');


    $.layer({
        type: 1,
        title: [
            '图片上传', 
            'background:#2B2E37; height:40px; color:#fff; border:none;' //自定义标题样式
        ],  //不显示默认标题栏
        offset : ['250px', ''],
        shade: [1], //不显示遮罩
        area: ['260px', '100px'],
        page: {html: '<form action="/index.php?s=/Member/Index/upload" enctype="multipart/form-data" method="post"><input type="file"  name="filename" value=""><input  type="submit"  value="上传"></from>'},
    });
 });

</script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!--底部快捷导航 开始-->
<div class="bottom_box bottom_box1">
	<div class="bottom">
		<div class="bottom_con1">
			<div class="bottom_left">
				<div class="db_menu">
					<!-- <a href="<?php echo U('Member/index/test');?>" class="tipshang">关于我们</a> -->
					<a href="javascript:void(0);" class="tipshang">关于我们</a>
					<a href="javascript:void(0);" class="tipshang">法律法规</a>
					<a href="javascript:void(0);" class="tipshang">新手指引</a>
					<a href="javascript:void(0);" class="tipshang">诚聘英才</a>
					<a href="javascript:void(0);" class="tipshang">联系我们</a>
					<a href="javascript:void(0);" class="tipshang">问答</a>
					<a href="javascript:void(0);" class="tipshang">网站地图</a>
				</div>
				<div class="db_gzwm">
					<p class="gzwm">
						关注我们
					</p>
					<a class="xlwb tipshang" href="javascript:void(0);">新浪微博</a>
					<a class="gfwx" href="javascript:void(0);" id="id2">关注微信</a>
					<a class="scbz" href="javascript:void(0);"onclick=AddFavorite('工合财富', location.href);>收藏本站</a>
				</div>
			</div>
			<div class="bottom_right">
				<p>
					客服热线\工作时间 9:30-17.30
				</p>
				<div class="kfdh">
					4000-888-888
				</div>
				
			</div>
		</div>
		<!-- 友情链接 -->
		<div class="bottom_con3">
        <h4>友情链接</h4>
        <ul>
                <li><a target="_blank" href="http://www.gopay.com.cn/" >国付宝</a>   </li>
				<li><a target="_blank" href="http://www.p2peye.com">网贷天眼</a></li>
				<li><a target="_blank" href="http://www.wangdaizhijia.com/">网贷之家</a> </li>
				<li><a target="_blank" href="http://www.shzfsoft.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.wangdaicaifu.com/">网贷财富</a> </li>
				<li><a target="_blank" href="http://www.wdlm.cn/">网贷联盟</a> </li>
				<li><a target="_blank" href="http://www.erongtu.com/">融途网</a> </li>
				<li><a target="_blank" href="http://www.p2pxing.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.p2pzhinan.com/">P2P网贷指南</a> </li>
				<li><a target="_blank" href="http://www.wangdai3.com/">网贷第三方</a> </li>
          </ul>
        </div>
		
		
		<div class="bottom_con2">
		Copyright © 2014 工合财富（www.ghjj.cn）版权所有 广东省工合股权基金有限公司 | 
			<a href="http://www.miitbeian.gov.cn">备案号：粤ICP备88888888号</a> &nbsp;
	<script type="text/javascript">
 	$('.shigong').on('click', function(){
     layer.msg('前方页面正在施工ing...', 2, 0);
     area: ['310px', '130px']
     });

 	$('.tipshang').on('click', function(){
    layer.tips('此处正在施工ing...', this, {
        style: ['background-color:#0FA6D8; color:#fff', '#0FA6D8'],
        maxWidth:150
    });
    });
	$('.tipxia').on('click', function(){
     	layer.tips('非常感谢大家对工合财富的支持，正因为你们，才让稳步的我们有了大大的关注。活动策划中，2015加油！', this, {
        guide: 2,
        maxWidth:150,
        time: 4
    });
 	 
    });

 	</script>



			<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://"
			: " http://");
	document
			.write(unescape("%3Cscript src='"
					+ _bdhmProtocol
					+ "hm.baidu.com/h.js%3F0d153ad81f03058ce80c0c3c697b77b5' type='text/javascript'%3E%3C/script%3E"));
</script>

			<script type="text/javascript"
				src="http://tajs.qq.com/stats?sId=34570481" charset="UTF-8"></script>

		</div>

		<div class="bottom_aqpic">
			<script id="ebsgovicon"
				src="https://cert.ebs.gov.cn/govicon.js?id=d49f3614-19ad-47df-a3bf-4b8bf872e48b&width=52&height=70&type=1"
				type="text/javascript" charset="utf-8"></script>
			 &nbsp;
			<a href="http://webscan.360.cn/index/checkwebsite/url/www.ubanks.cn"><img
					border="0" style="width: 100px; height: 50px;"
					src="http://img.webscan.360.cn/status/pai/hash/8fd610857e7a8668e59488f645830bca" />
			</a> &nbsp;
			<a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1305828394"><img
					alt="" src="/Public/static/rzg_images/wzzx.jpg" style="width: 100px; height: 50px;">
			</a>&nbsp;
			<a id='___szfw_logo___'
				href='https://search.szfw.org/cert/l/CX20140729008585008681'
				target='_blank'><img style="width: 100px; height: 50px;"
					src='https://search.szfw.org/cert.png?l=CX20140729008585008681'>
				&nbsp; <a key="53f6a580efbfb04a7b49c161" logo_size="124x47"
				logo_type="realname" href="http://www.anquan.org"><script
						src="http://static.anquan.org/static/outer/js/aq_auth.js"></script>
			</a>
		</div>

	</div>
</div>

<!--底部footer 结束-->
<!-- <script type="text/javascript" src="script/jqueryV172.js"></script> -->
<!-- <script type="text/javascript" src="script/xl.js"></script> -->
<script type='text/javascript'>
	(function() {
		document.getElementById('___szfw_logo___').oncontextmenu = function() {
			return false;
		}
	})();
</script>
<script type="text/javascript">
	//收藏本站
	function AddFavorite(title, url) {
		try {
			window.external.addFavorite(url, title);
		} catch (e) {
			try {
				window.sidebar.addPanel(title, url, "");
			} catch (e) {
				alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
</script>
<!-- <script type="text/javascript" src="/Public/static/rzg_js/jquery.js"></script> -->
 <script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>

<div style="display: none" id=testID>
	<P>
		<img src="/Public/static/rzg_images/img/weixin.jpg" width="250" height="250" />
	</P>
	打开微信，点击底部的″发现″，使用″扫一扫″即可关注融资谷官方微信.
</div>
<script type=text/javascript>
	var environment = {
		userVo : '',
		role : '',
		userId : '',
		basePath : '',
		userCash : ''
	};
</script>
<script type="text/javascript">
	$("#id2").click(
			function() {
				tipsWindown("关注融资谷官方微信", "id:testID", "250", "300", "true", "",
						"true", "id");
			});

	// 关注微信
	var showWindown = true;
	var templateSrc = "http://leotheme.cn/wp-content/themes/Dreamy";
	function tipsWindown(title, content, width, height, drag, time, showbg,
			cssName) {
		$("#windown-box").remove();
		var width = width >= 950 ? this.width = 950 : this.width = width;
		var height = height >= 527 ? this.height = 527 : this.height = height;
		if (showWindown == true) {
			var simpleWindown_html = new String;
			simpleWindown_html = "<div id=\"windownbg\" style=\"height:"
					+ $(document).height()
					+ "px;;filter:alpha(opacity=0);opacity:0;z-index: 999901\"><iframe style=\"width:100%;height:100%;border:none;filter:alpha(opacity=0);opacity:0;\">__tag_149$151_</div>";
			simpleWindown_html += "__tag_150$25_";
			simpleWindown_html += "__tag_151$25_<h2>__tag_151$55_<span id=\"windown-close\">鍏抽棴__tag_151$90_</div>";
			simpleWindown_html += "__tag_152$25_<div id=\"windown-content\">__tag_152$88_</div>";
			simpleWindown_html += "__tag_153$25_";
			$("body").append(simpleWindown_html);
			show = false;
		}
		contentType = content.substring(0, content.indexOf(":"));
		content = content.substring(content.indexOf(":") + 1, content.length);
		switch (contentType) {
		case "text":
			$("#windown-content").html(content);
			break;
		case "id":
			$("#windown-content").html($("#" + content + "").html());
			break;
		case "img":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_172$12_");
			});
			$.ajax( {
				error : function() {
					$("#windown-content").html("__tag_178$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html("__tag_182$7_");
				}
			});
			break;
		case "url":
			var content_array = content.split("?");
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_193$12_");
			});
			$.ajax( {
				type : content_array[0],
				url : content_array[1],
				data : content_array[2],
				error : function() {
					$("#windown-content").html("__tag_202$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html(html);
				}
			});
			break;
		case "iframe":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_215$12_");
			});
			$
					.ajax( {
						error : function() {
							$("#windown-content").html("__tag_223$9_</p>");
						},
						success : function(html) {
							$("#windown-content")
									.html(
											"<iframe src='/Public/static/rzg_js//"
													+ content
													+ " width=\"100%\" height=\""
													+ parseInt(height)
													+ "px"
													+ "\" scrolling=\"auto\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">__tag_233$92_");
						}
					});
		}
		$("#windown-title h2").html(title);
		if (showbg == "true") {
			$("#windownbg").show();
		} else {
			$("#windownbg").remove();
		}
		;
		$("#windownbg").animate( {
			opacity : "0.5"
		}, "normal");
		$("#windown-box").show();
		if (height >= 527) {
			$("#windown-title").css( {
				width : (parseInt(width) + 22) + "px"
			});
			$("#windown-content").css( {
				width : (parseInt(width) + 17) + "px",
				height : height + "px"
			});
		} else {

			$("#windown-title").css( {
				width : (parseInt(width) + 10) + "px"
			});
			$("#windown-content").css( {
				width : width + "px",
				height : height + "px"
			});
		}

		var cw, ch, est = document.documentElement.scrollTop;
		if (self.innerHeight) {
			cw = self.innerWidth;
			ch = self.innerHeight;
		} else if (document.documentElement
				&& document.documentElement.clientHeight) {
			cw = document.documentElement.clientWidth;
			ch = document.documentElement.clientHeight;
		} else if (document.body) {
			cw = document.body.clientWidth;
			ch = document.body.clientHeight;
		}
		var isIE6 = false;
		if (isIE6) {
			$("#windown-box").css( {
				left : "50%",
				top : (parseInt((ch) / 2) + est) + "px",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		} else {
			$("#windown-box").css( {
				left : "50%",
				top : "50%",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		}
		;
		var Drag_ID = document.getElementById("windown-box"), DragHead = document
				.getElementById("windown-title");

		var moveX = 0, moveY = 0, moveTop, moveLeft = 0, moveable = false;
		if (isIE6) {
			moveTop = est;
		} else {
			moveTop = 0;
		}
		var sw = Drag_ID.scrollWidth, sh = Drag_ID.scrollHeight;
		DragHead.onmouseover = function(e) {
			if (drag == "true") {
				DragHead.style.cursor = "move";
			} else {
				DragHead.style.cursor = "default";
			}
		};
		DragHead.onmousedown = function(e) {
			$("#windown-box").css( {
				opacity : "0.5"
			}, "normal");
			if (drag == "true") {
				moveable = true;
			} else {
				moveable = false;
			}
			e = window.event ? window.event : e;
			var ol = Drag_ID.offsetLeft, ot = Drag_ID.offsetTop - moveTop;
			moveX = e.clientX - ol;
			moveY = e.clientY - ot;
			document.onmousemove = function(e) {
				if (moveable) {

					e = window.event ? window.event : e;
					var x = e.clientX - moveX;
					var y = e.clientY - moveY;
					if (x > 0 && (x + sw < cw) && y > 0 && (y + sh < ch)) {
						Drag_ID.style.left = x + "px";
						Drag_ID.style.top = parseInt(y + moveTop) + "px";
						Drag_ID.style.margin = "auto";
					}
				}
			}
			document.onmouseup = function() {
				moveable = false;
				$("#windown-box").css( {
					opacity : "1"
				}, "normal");
			};
			Drag_ID.onselectstart = function(e) {
				return false;
			}
			$("#windown-content").attr("class", "windown-" + cssName);
			var closeWindown = function() {
				$("#windownbg").remove();
				$("#windown-box").fadeOut("slow", function() {
					$(this).remove();
				});
			}
			if (time == "" || typeof (time) == "undefined") {
				$("#windown-close").click(function() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow", function() {
						$(this).remove();
					});
				});
			} else {
				setTimeout(closeWindown, time);
			}
		}
	}
</script>-->
<!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript"
 	src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNjA2MV8xNTgyNTlfNDAwMDkxMTgwNl8"></script>-->
<!-- WPA Button End -->
<!-- 弹窗脚本 -->
<script type="text/javascript">
		function cn(){
			ymPrompt.setDefaultCfg({title:'标题', message:"内容",okTxt:' 确 定 ',cancelTxt:' 取 消 ',closeTxt:'关闭',minTxt:'最小化',maxTxt:'最大化'});
		}
		function en(){
			ymPrompt.setDefaultCfg({title:'Default Title', message:"Default Message",okTxt:' OK ',cancelTxt:' Cancel ',closeTxt:'Close',minTxt:'Minimize',maxTxt:'Maximize'});
		}
		
		function slideHd(){
			ymPrompt.alert('看到效果了吗？');
		}

		function getInput(tp){
			if(tp!='ok') return ymPrompt.close();
			var v=$('myInput').value;
			if(v=='')
				alert('请输入您的名字！')
			else{
				alert('你输入的值为：'+v)
				ymPrompt.close();
			}
		}
		function getButtons(){
			var btnObjs=ymPrompt.getButtons(),arr=[];
			for(var i=0;i<btnObjs.length;i++)
				arr.push('按钮'+(i+1)+"内容:"+document.createElement("DIV").appendChild(btnObjs[i].cloneNode(true)).parentNode.innerHTML);
			alert(arr.join('\n\n'));
			ymPrompt.close();
		}
		function autoClose(){
			alert('三秒钟自动关闭');
			setTimeout(function(){ymPrompt.close()},3000)
		}
		function handlerIframe(){
			alert(ymPrompt.getPage().contentWindow.document.body.innerHTML);
			ymPrompt.close();
		}
		function noTitlebar(){
			alert('提示：除了可以通过增加按钮来控制，还可以在子页面中调用该页面的ymPrompt.close方法来关闭');
		}
		var Alert=ymPrompt.alert;
		function cancelFn(){
			Alert("点击了'取消'按钮");
		}
		function okFn(){
			Alert("点击了'确定'按钮");
		}
		function closeFn(){
			Alert("点击了'关闭'按钮");
		}
		function handler(tp){
			if(tp=='ok'){
				okFn();
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function testHd(tp){
			Alert('你点击的按钮的标志为：'+tp);
		}
		function handler2(tp){
			if(tp=='ok'){
				ymPrompt.confirmInfo("保存成功!是否打印税票？",null,null,"问询提示",function(tp){tp=='ok'?ticketPrevie("print"):loadImposeInfo()})
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function ticketPrevie(xx){
			Alert(xx)
		}
		function loadImposeInfo(){
			Alert("exit")
		}

		function stateHd(tp){
			ymPrompt[tp]();
		}
	</script>

	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->