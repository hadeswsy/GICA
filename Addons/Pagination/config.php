<?php
return array(
	'page_name'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'分页页码前分页参数,写了路由可忽略:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'tip'=>'如(p/1,page/29)中的p和page值的设定',
		'value'=>'p',			 //表单的默认值
	),
	'limit'=>array(
		'title'=>'每一页显示数量',
		'type'=>'text',
		'tip'=>'默认为20,可在钩子中动态传入',
		'value'=>'20'
		),
	'page_prev'=>array(
		'title'=>'上一页名称',
		'type'=>'text',
		'tip'=>'默认为<<',
		'value'=>'<<'
		),
	'page_next'=>array(
		'title'=>'下一页名称',
		'type'=>'text',
		'tip'=>'默认为>>',
		'value'=>'>>'
		),
	'page_skin'=>array(
		'title'=>'分页皮肤',
		'type' =>'select',
		'options'=>array(
			'light'=>'浅色风格',
			'dark'=>'黑色风格',
			'compact'=>'简洁风格'
			)
		)
);
					