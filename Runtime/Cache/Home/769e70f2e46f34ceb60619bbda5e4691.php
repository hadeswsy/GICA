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
	 

       <!-- 透明登录层 -->
  <div class="trans-login-div absolute white" style="width:300px; height:262px; z-index:2; top:-300px; ">
    <div class="opacity-div absolute wp100" style="height:262px; background:#000;filter: alpha(opacity=20);-moz-opacity: 0.2; opacity: 0.2;  z-index:-1;"></div>
    
    <div id="unknown-user" class="hide" >
    <s:if test="#session.user ==null">
      <div style="padding:35px 30px;">
       <h4>融资谷年化收益</h4>
    <p class="sy_font1">12%-20%</p>
    <p class="sy_font2"><b>60</b>倍活期存款收益,<b>6</b>倍银行定期收益</p>
    <p class="bj"></p>
    <a href="cellPhoneinit.htm" class="ljzc" >立即注册</a> 
    <a class="ljdl" href="login.htm">已有账号？立即登录</a> 
   </div>

    </s:if>
    <s:else>
       <div  style="padding:35px 27px;">
      <h4>欢迎来融资谷投资理财！</h4>
      <p class="sy_font2" style="margin:15px 0 8px 0;">您当前登录的账号是：<a href="home.htm" style="font-size:16px;color:#ff8a00;">${user.userName}</a></p>
      <p class="sy_font2" style="margin:0 0 20px 0;">我在融资谷赚了：<b style="font-size:16px;">￥${accmountStatisMap.earnSum }</b></p>
      <p class="bj"></p>
      <a href="home.htm" class="ljzc" >进入我的账户</a> 
 </div>
    </s:else>
     </div>
  </div>
  <div class="pg-header-banner">
    <div id="full-screen-slider">
      <ul id="slides">
                    <li
                        style="background: url('/Public/static/rzg_images/banner9.jpg') no-repeat center top">
                        <a href="#" ></a>
                    </li>
                    <li
                        style="background: url('/Public/static/rzg_images/banner8.jpg') no-repeat center top">
                        <a href="sxxl.htm" target="_blank"></a>
                    </li>
                    
                   <li
                        style="background: url('/Public/static/rzg_images/banner1.jpg') no-repeat center top">
                        <a href="#"  target="_blank" ></a>
                    </li>
                    
                    <li
                        style="background: url('/Public/static/rzg_images/banner2.jpg') no-repeat center top">
                        <a href="newguide.htm"></a>
                        <a href="tenthousand.htm"></a>
                    </li>
                    
                    <li
                        style="background: url('/Public/static/rzg_images/banner3.jpg') no-repeat center top">
                        <a href="share.htm"  target="_blank"></a>

                    </li>
                    <li
                        style="background: url('/Public/static/rzg_images/banner4.jpg') no-repeat center top">
                        <a href="#"  target="_blank"></a>
                    </li>
                    
                    <li
                        style="background: url('/Public/static/rzg_images/banner6.jpg') no-repeat center top">
                        <a href="mtbdaaa.htm"  target="_blank"></a>
                    </li>
                    <li
                        style="background: url('/Public/static/rzg_images/banner7.jpg') no-repeat center top">
                        <a href="xycl.htm"  target="_blank"></a>
                    </li>
                    
      </ul>
    </div>
  </div>
        <!-- banner end -->
        <!-- wzgg start -->
        <div class="i_con1">
            <div class="icon1_left">
                <div class="i_tzlc">
                    <div class="pic">
                        <a href="newhelp.htm"> </a>
                    </div>
                    <div class="font">
                        注册成为会员，充值后选择优质借款项目进行投资，将闲散资金借给有需要的人，获得年化12%-20%的投资收益。
                    </div>
                </div>
                <div class="i_jkrz">
                    <div class="pic">
                        <a href="borrowhelp.htm"></a>
                    </div>
                    <div class="font">
                        如果你现在需要资金周转，可以向我们提交借款申请，通过考察、资料审核、办理借款手续后手续后，可以及时解决资金问题。
                    </div>
                </div>
                <div class="i_aqbz">
                    <div class="pic">
                        <a href="safety.htm"> </a>
                    </div>
                    <div class="font">
                        我们的客户来自于公司业务一手客户及银行合作推荐客户，借助于银行大数据风控团队及自身专业的风控体系，更有第三方担保公司兜底，让您放心投资。
                    </div>
                </div>
            </div>
             <!-- 网站公告 -->
            <div class="icon1_right">
                <div class="wzgg_title">
                    <p style="float:left;" ><img src="/Public/static/rzg_images/img/wzgg.jpg" /> </p>
                    <a class="more" style="float:right;text-decoration:underline;color:#666;" href="<?php echo U('Article/lists?category='.get_category_name(2));?>" target="_blank">更早>></a>
                </div>
                <ul class="font">
                    <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li style="overflow: hidden">
                            <a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div>
        </div>
        <!-- wzgg end -->
        <!-- tzlb strat -->
        <div class="i_con2">
                <br />
                <br />
            <div class="icon1_left">
                <div class="title_bj">
                    <h4>
                        <a href="finance.htm">投资列表</a>
                    </h4>
                </div>
                <div class="lctab">
                    <ul id="lastestborrow">
                    <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 标开始 -->
                                <li>
                                    <?php if($vo["borrow_status"] == 0): ?><div class="bottm"><a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">立即投标</a></div>
                                    <?php elseif($vo["borrow_status"] == 2): ?>
                                        <div class="bottm2"><a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">初审中</a></div>
                                    <?php elseif($vo["borrow_status"] == 4): ?>
                                        <div class="bottm2"><a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">复审中</a></div>&nbsp;
                                    <?php elseif($vo["borrow_status"] == 6): ?>
                                        <div class="bottm2"><a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">还款中</a></div>&nbsp;
                                    <?php elseif($vo["borrow_status"] == 7): ?>
                                        <div class="bottm2">
                                        <a href="<?php echo U('Finance/invest?id='.$vo['id']);?>">已完成</a>
                                        </div>&nbsp;<?php endif; ?>


                                    <div class="list_txt">
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <th colspan="3" align="left">
                                                    <a href="financeDetail.htm?id=${finance.id}" target="_blank">
                                                        <shove:sub value="#finance.borrowTitle" suffix="..."
                                                            size="15" /> </a>
                                                <span class="list_txtjl"><span><?php echo ((isset($vo["reward_num"]) && ($vo["reward_num"] !== ""))?($vo["reward_num"]):"0.00"); ?>
<!--                                                     <s:if test="#finance.excitationType==2">
                                                        <span class="list_txtjl"><span>￥${finance.excitationSum
                                                                }</span> </span>
                                                    </s:if>
                                                    <s:if test="#finance.excitationType==3">
                                                        <span class="list_txtjl"><span>${finance.excitationSum
                                                                }%</span> </span>
                                                    </s:if> -->
                                                </th>
                                            </tr>
                                            <tr>
                                                <h2><?php echo ($vo["borrow_name"]); ?></h2>
                                            </tr>
                                            <tr>
                                                <td width="180">
                                                    借款金额：
                                                    <span>￥ <?php echo (money_upper($vo["borrow_money"])); ?> </span>
                                                </td>
                                                <td width="180">
                                                    年利率：
                                                    <span>￥ <?php echo ($vo["borrow_interest_rate"]); ?></span>
                                                </td>
                                                <td width="170">
                                                    借款期限：
                                                    <span><?php echo ($vo["borrow_duration"]); ?> <s:property value="#finance.deadline"
                                                            default="0" /> <s:if test="%{#finance.isDayThe ==1}">个月</s:if>
                                                        <s:else>天</s:else> </span>
                                                </td>
                                                   <td width="170">
                                                    发标时间：
                                                    <span><?php echo (date('Y-m-d',$vo["add_time"])); ?></span>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>借款类型：
                                                        <img src="/Public/static/rzg_images/ico_7.jpg" title="本息保障,推荐标" />
<!--                                                     <s:if test="#finance.borrowWay ==1">
                                                    借款类型：净值借款
                                                        <img src="/Public/static/rzg_images/neiye1_53.jpg" title="净值借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==2">
                                                    借款类型： 秒还借款
                                                        <img src="/Public/static/rzg_images/ico_1.jpg" title="秒还借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==4">
                                                    借款类型：实地考察借款
                                                        <img src="/Public/static/rzg_images/tubiao2.png" title="实地考察借款" />
                                                    </s:if>
                                                    <s:if test="#finance.borrowWay ==5">
                                                     借款类型：机构担保借款
                                                        <img src="/Public/static/rzg_images/ico_7.jpg" title="本息保障,推荐标" />
                                                    </s:if>
                                                    <s:if test="#finance.isDayThe ==2">
                                                     借款类型： 天标
                                                        <img src="/Public/static/rzg_images/neiye1_67.jpg" title="天标" />
                                                    </s:if>
                                                    <s:if test="#finance.hasPWD ==1">
                                                    借款类型：
                                                        <img src="/Public/static/rzg_images/lock.png" title="投标时需要填写密码" />
                                                   </s:if>
                                                    <s:if test="#finance.auditStatus ==3">
                                                    借款类型：
                                                        <img src="/Public/static/rzg_images/neiye1_62.jpg" title="该用户通过抵押认证" />
                                                    </s:if> -->
                                                </td>
                                                <td>
                                                    <div>
                                                        <div style="float: left;">
                                                            借款进度：
                                                        </div>
                                                        <div class="progeos">
                                                            <div
                                                                style="width: <s:property value="#finance.schedules" default="0"/>%"></div>
                                                        </div>
                                                        <div style="float: left;">
                                                            <span> <s:property value="#finance.schedules"
                                                                    default="0" /> %</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    完成投标：<?php echo ($vo["has_borrow"]); ?>
                                                    <span> <s:property value="#finance.investNum"
                                                            default="---" /> </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="clear: both"></div>
                                </li>
                            <!-- 标结束 --><?php endforeach; endif; else: echo "" ;endif; ?>
                            <li style="text-align: center;">
                               <div class="page"> <?php echo ($page); ?></div><!-- 没有数据 -->
                            </li>
                    </ul>
                </div>
            </div>
            <div class="icon2_right">
                <div class="mtbd">
                    <div class="tz_title">
                        <h3>
                            <a href="initMediaReport.htm">
                            
                            行业动态
                        </h3>
                    </div>
                    <ul class="font">
                       <?php if(is_array($lists1)): $i = 0; $__LIST__ = $lists1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo U('Article/detail?id='.$list1['id']);?>"><?php echo ($list1["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>                   
                    </ul>
                    <a class="more"  href="<?php echo U('Article/lists?category='.get_category_name(40));?>" target="_blank">点击查看更多</a>
                </div>
                <br />
                <div class="lcfyb">
                    <div class="tz_title">
                        <h3>
                            理财风云榜
                        </h3>
                        <ul>
                            <li onclick="javascript:checkTime(0)" id="touzi_now" class="cur">
                                全部
                            </li>
                            <li onclick="javascript:checkTime(1)" id="touzi_year">
                                年
                            </li>
                            <li  id="touzi_quarter"  onclick="javascript:checkTime(2)">
                                季
                            </li> 
                            <li onclick="javascript:checkTime(3)" id="touzi_month">
                                月
                            </li>
                            <li onclick="javascript:checkTime(4)" id="touzi_week">
                                周
                            </li>
                            <li onclick="javascript:checkTime(5)" id="touzi_tian">
                                天
                            </li>
                        </ul>
                    </div>
                    <div id="touzib">
                        <ul class="tz_main" id="investRank">
                            <s:if test="#request.rankList!=null || #request.rankList.size>0">
                                <?php if(is_array($lists2)): $i = 0; $__LIST__ = $lists2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list2): $mod = ($i % 2 );++$i;?><li>
                                        <span><?php echo ($list2["investor_uid"]); ?></span><span class="dj_ico"><?php echo ($list2["investor_capital"]); ?></span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </s:if>
                            <s:else>
                                <li style="text-align: center;">
                                    暂无排名
                                </li>
                            </s:else>
                        </ul>
                    </div>
                </div>
                <br />
                
                
                <!-- 计算器开始 -->
                <div class="i_syjsq">
                    <div class="tz_title">
                        <h3>
                            收益计算器
                        </h3>
                    </div>
                    <ul class="font">
                        <li>
                            <a href="incometools.htm">收益计算器</a>
                            <span>算算能赚多少钱</span>
                        </li>
                        <li><a href="#">自动投资</a> <span>省心省力快速投资</span></li>
                        <li>
                            <a href="cpitools.htm">CPI跟踪器</a><span>齐心协力跑赢CPI</span>
                        </li>
                        <li>
                            <a href="socialtools.htm">身价计算器</a><span>你也能成为大富翁</span>
                        </li>
                        <li>
                            <a href="comparetools.htm">收益对比器</a><span>好不好比比就知道</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="i_con3">
            <div class="title_bj">
                <h4>
                    媒体报道
                </h4>
            </div>

            <div class="i_mtbdcon">

                <span class="mtbd_pic_prev" id="s3_k_c_abq_d_prev"></span>
                <div id="s3_k_c_abq_d" class="i_mtbdpic">
                    <ul>
                        <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                        <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                                                <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                                                <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                                                <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                                                <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                                                <li>
                        <a href="#"> <img src="/Public/static/rzg_images/logo_hqcj.jpg" width="130" height="52" /> </a>
                        </li>
                    </ul>
                </div>
                <span class="mtbd_pic_next" id="s3_k_c_abq_d_next"></span>

            </div>
            <script>
          jQuery("#s3_k_c_abq_d").jCarouselLite({
          btnNext: "#s3_k_c_abq_d_next",
          btnPrev: "#s3_k_c_abq_d_prev",
          auto:1000,
          speed:1000,
          visible:6,
          scroll:1
          });
          </script>
        </div>
        <!-- 引用底部公共部分 -->
        <script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
        <script type="text/javascript"
            src="script/jbox/jquery.jBox-2.3.min.js"></script>
        <script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>
        <script>
        // banner图片乱换效果
     
   $(function(){
    var numpic = $('#slides li').size()-1;
    var nownow = 0;
    var inout = 0;


    $('#slides li').eq(0).siblings('li').css({'display':'none'});

    var ulstart = '<div id="main_pagination"><ul id="pagination">',
        ulcontent = '',
        ulend = '</ul></div>';
    ADDLI();
    var pagination = $('#pagination li');
    var paginationwidth = $('#pagination').width();
    $('#pagination').css('margin-left',(40-paginationwidth))
    
    pagination.eq(0).addClass('current')
        
    function ADDLI(){
        //var lilicount = numpic + 1;
        for(var i = 0; i <= numpic; i++){
            ulcontent += '<li>' + '<a href="#">' + (i+1) + '</a>' + '</li>';
        }
        
        $('#slides').after(ulstart + ulcontent + ulend);    
    }

    pagination.click(function(){
        var changenow = $(this).index();
        
        $('#slides li').eq(nownow).css('z-index','1');
        $('#slides li').eq(changenow).css({'z-index':'0'}).show();
        pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
        $('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(changenow).fadeIn(500);});
        nownow = changenow;
    });
    
    pagination.mouseenter(function(){
        inout = 1;
    })
    
    pagination.mouseleave(function(){
        inout = 0;
    })
    
    function GOGO(){
        
        var NN = nownow+1;
        
        if( inout == 1 ){
            } else {
            if(nownow < numpic){
            $('#slides li').eq(nownow).css('z-index','1');
            $('#slides li').eq(NN).css({'z-index':'0'}).show();
            pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
            $('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(NN).fadeIn(500);});
            nownow += 1;

        }else{
            NN = 0;
            $('#slides li').eq(nownow).css('z-index','1');
            $('#slides li').eq(NN).stop(true,true).css({'z-index':'0'}).show();
            $('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(0).fadeIn(500);});
            pagination.eq(NN).addClass('current').siblings('li').removeClass('current');

            nownow=0;

            }
        }
        setTimeout(GOGO, 3000);
    }
    setTimeout(GOGO, 3000); 

});
        
</script>
        </script>
        <script type="text/javascript">
    $(function(){
        dqzt(0);
        var tim;
        $("#scrollleft ul").css("width",$("#scrollleft li").length*125);
        function scrooatu(){
            clearTimeout(tim);
        $("#scrollleft").animate({scrollLeft:$("#scrollleft").scrollLeft()+122},"slow",function(){
            $("#scrollleft").animate({scrollLeft:0},0);
            $("#scrollleft li:first").appendTo($("#scrollleft ul"));
            });
        
        tim = setTimeout(scrooatu,3000);
        }
        scrooatu();
        $("#code").bind('keyup', function(event){
               if (event.keyCode=="13"){
                  login();  
               }
            }); 
        $("#scrollleft").hover(function(){
            clearTimeout(tim);
        },
        function(){
            setTimeout(scrooatu,1000);
        });
    
    });
    //初始化
    function switchCode(){
        var timenow = new Date();
            $("#codeNum").attr("src","admin/imageCode.htm?pageId=userlogin&d="+timenow);
        };
    $(document).ready(function(){
        $("#email").focus(function(){
            $("#email").val("");
        });
        $("#code").focus(function(){
            $("#code").val("");
        });
        
        });
    function login(){
         $(this).attr('disabled',true);
         $('#btn_login').attr('value','登录中...');
            var param = {};
            param["paramMap.pageId"] = "userlogin";
            param["paramMap.email"] = $("#email").val();
            param["paramMap.password"] = $("#password").val();
            param["paramMap.code"] = $("#code").val();
            param["paramMap.afterLoginUrl"]="${afterLoginUrl}";
           $.post("logining.htm",param,function(data){
                if(data == 1){
                       window.location.href='index.jsp';
                }else if (data == 2) {
                     $('#btn_login').attr('value','登录');
                    alert("验证码错误!");
                    switchCode();
                     $("#btn_login").attr('disabled',false); 
                } else if (data == 3) {
                     $('#btn_login').attr('value','登录');
                    alert("用户名或密码错误!");
                     switchCode();
                     $("#btn_login").attr('disabled',false); 
                } else if (data == 4) {
                 $('#btn_login').attr('value','登录');
                    $("#s_email").attr("class", "formtips onError");
                    alert("该用户已被禁用!");
                     switchCode();
                     $("#btn_login").attr('disabled',false); 
                }
           });

        };
         function checkTime(num){
             if(num==0){
                 $('#touzi_now').attr('class','cur');
                 $('#touzi_year').attr('class','');
                 $('#touzi_quarter').attr('class','');
                 $('#touzi_month').attr('class','');
                 $('#touzi_week').attr('class','');
             }else if (num==1){
                 $('#touzi_now').attr('class','');
                 $('#touzi_year').attr('class','cur');
                 $('#touzi_quarter').attr('class','');
                 $('#touzi_month').attr('class','');
                 $('#touzi_week').attr('class','');
             }else if (num==2) {
                 $('#touzi_now').attr('class','');
                 $('#touzi_year').attr('class','');
                 $('#touzi_quarter').attr('class','cur');
                 $('#touzi_month').attr('class','');
                 $('#touzi_week').attr('class','');
            }else if (num==3){
                $('#touzi_now').attr('class','');
                 $('#touzi_year').attr('class','');
                 $('#touzi_quarter').attr('class','');
                 $('#touzi_month').attr('class','cur');
                 $('#touzi_week').attr('class','');
            }else if (num==4){
                $('#touzi_now').attr('class','');
                 $('#touzi_year').attr('class','');
                 $('#touzi_quarter').attr('class','');
                 $('#touzi_month').attr('class','');
                 $('#touzi_week').attr('class','cur');
            }else if (num==5){
                $('#touzi_now').attr('class','');
                 $('#touzi_year').attr('class','');
                 $('#touzi_quarter').attr('class','');
                 $('#touzi_month').attr('class','');
                 $('#touzi_tian').attr('class','cur');
            }
             var param = {};
             param["paramMap.number"] = num;
             $.post("investRank.htm",param,function(data){
                    $("#touzib").html(data);
            });
        }
         function  checkTou(id,type){
             var param = {};
             param["id"] = id;
             $.shovePost('financeInvestInit.htm',param,function(data){
               var callBack = data.msg;
               if(callBack !=undefined){
                 alert(callBack);
               }else{
                   if(type==2){
                            var url = "subscribeinit.htm?borrowid="+id;
                             $.jBox("iframe:"+url, {
                                    title: "我要购买",
                                    width: 450,
                                    height: 450,
                                    buttons: {  }
                                    });
                    }else{
                         window.location.href= 'financeInvestInit.htm?id='+id;
                   }
               }
             });
         }
          function closeMthod(){
                window.jBox.close();
                window.location.reload();
            }
</script>
        <script type="text/javascript">
    $(function(){
            var self=$("#scroll ul")
            var sd=null;
            var leng=parseInt($("#scroll ul").css("width",self.find("li").length*459).css("width"));
            $("#scroll ul").css("width",self.find("li").length*459);
                function scrollatuo(){
                clearTimeout(sd);
                if($("#scroll").scrollLeft()>=leng-490){
                    $("#scroll").animate({scrollLeft:0},"slow");
                    $(".control a").removeClass("cur")
                    $(".control a:first").addClass("cur")
                    sd=setTimeout(scrollatuo,3000);
                }
                else{
                $("#scroll").animate({scrollLeft:$("#scroll").scrollLeft()+459},"slow",function(){
                        var insd=parseInt($("#scroll").scrollLeft()/459);
                $(".control a").removeClass("cur")
                $(".control a").eq(insd).addClass("cur")
                });}        
                sd=setTimeout(scrollatuo,3000);
            
                }
            sd=setTimeout(scrollatuo,1000);
            //控制区
            $(".control a").hover(function(){
                var sf=$(".control a").index(this);
                $("#scroll").animate({scrollLeft:459*sf},"slow");
                clearTimeout(sd);
                $(".control a").not(this).removeClass("cur")
                $(this).addClass("cur");
            },function(){
                    sd=setTimeout(scrollatuo,3000); 
            });
            //选项卡
            $("#second-tal li").click(function(){
            var sd=$("#second-tal li").index(this);
        
            $(".job-list").hide();
            $(".job-list").eq(sd).show();
            $("#second-tal li").removeClass("cur");
            $(this).addClass("cur");
            })
            
        })
</script>
        <!-- tzlb end -->
        
        <script>
var creditType = '';

Number.prototype.numFormat = function() {  
   var res = this.toString();  
   res = res.split('').reverse().join('').replace(/(\d{3})/g, '$1,').split('').reverse().join('');  
   if (res.length > 0) {  
       if (res.charAt(0) == ',') {  
           res = res.substr(1);  
       }  
   }  
   res = res.replace('.,','.');  
   return res;  
}; 

function showLoginDiv(){
    //弹出透明登陆框
    $(".user-name").html($("#user-name").html());
    $("#unknown-user").toggle(!$("#user-name").html());
    $("#logged-in-user").toggle(!!$("#user-name").html());
    $(".opacity-div").css("height",(!$("#user-name").html() ? "262x": "200px"));
    $(".trans-login-div").css({"right":($(window).width()-1000)/2})
                         .animate({"top":"180px"}, 1500, function(){
                            $(this).animate({"top":"180px"},500);
                         });
}

$(document).ready(function(){
    rxdai.isLogin(rxdai.changStatus);   
    setTimeout(showLoginDiv, 500);
    //rxdai.borrow.list();
    rxdai.borrow.info();
     //判断是否为ie，返回true则代表是   
    if (browser() == "IE 6.0") { document.getElementById("ieversion").innerHTML = '6'; document.getElementById("ie6-warning").style.display = "block"; }; if (browser() == "IE 7.0") { document.getElementById("ieversion").innerHTML = '7'; document.getElementById("ie6-warning").style.display = "block"; };   

    $(".friend-link").live("click", function(){
        var index = $(".friend-link").index(this);
        $(".friend-link").css({"background":"", "color":""}).eq(index).css({"background":"#303030", "color":"#d1d1d1"});
        $(".friend-link-detail").addClass("hide").eq(index).removeClass("hide");
    });

}) 
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