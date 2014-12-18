<?php
return array(
//	'random'=>array(//配置在表单中的键名 ,这个会是config[random]
//		'title'=>'是否开启随机:',//表单的文字
//		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
//		'options'=>array(		 //select 和radion、checkbox的子选项
//			'1'=>'开启',		 //值=>文字
//			'0'=>'关闭',
//		),
//		'value'=>'1',			 //表单的默认值
//	),
    'lang_list' => array(
        'title' => '支持语言列表',
        'type'  => 'text',
        'value' => 'zh-cn',
        'tip'   => '需要在模块含有lang包，并且模板已修改支持'
    ),
    'default_lang'  => array(
        'title' => '默认语言',
        'type'  => 'text',
        'value' => 'zh-cn',
        'tip'   => '默认语言需在语言列表中'
    ),
    'var_language' => array(
         'title' => '默认语言切换变量',
        'type'  => 'text',
        'value' => 'lang',
    ),
    'btn-style'  => array(
        'title' => '语言切换按钮样式',
        'type'  => 'radio',
        'options' => array(
            'btn-default' => 'btn-default',
            'btn-primary' => 'btn-primary',
            'btn-success' => 'btn-success',
            'btn-info' => 'btn-info',
            'btn-warning' => 'btn-warning',
            'btn-danger' => 'btn-danger',
        ),
        'value' => 'btn-default',
        'tip' => '语言切换菜单样式表来自Bootstrap'
    ),

);
					