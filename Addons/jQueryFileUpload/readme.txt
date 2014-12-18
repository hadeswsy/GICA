2014-04-28 v1.0
====================
使用方法：
1、将文件解压到Addons文件夹下。
2、在oneThink后台扩展里面添加钩子jqFileUpload,然后到插件管理安装插件，选择视图。
3、在模板页面调用{:hook('jqFileUpload')}即可。
=====================
注意事项：
1、{:hook('jqFileUpload')}不能写在其他form元素里面。
2、图片上传默认的处理类是Addons/jQueryFileUpload/server/php/UploadHandler.php。
默认上传路径是Addons/jQueryFileUpload/server/php/files。
如果你想修改图片处理的地方可以修改插件目录下面的upload.html最后面的JS代码。
具体的处理方式可参照UploadHandler.php。
=====================
 $('#fileupload').fileupload({
    	url:'__ADDONROOT__/server/php/'
    });
这个是处理上传图片的URL
=====================
 $.ajax({
        url: $('#fileupload').fileupload('option', 'url'),

这个url是获取图片信息展示的地址,默认是和上面一样。
=====================
自己写的时候必须返回他设定好的格式才能解析。
{"files":[{"name":"png.png","size":80268,"type":"image\/png","url":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/files\/png.png","thumbnailUrl":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/files\/thumbnail\/png.png","deleteUrl":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/?file=png.png","deleteType":"DELETE"}]}

大概是这个样子，可以用firebug看例子返回的内容。
=====================
加了两个设置参数，可以设置前台展示图片的高度和宽度。
=====================
主要对原插件的代码进行提取，以及对CSS的修改兼容oneThink后台样式。
默认的上传处理对部分中文名可能会处理成乱码。