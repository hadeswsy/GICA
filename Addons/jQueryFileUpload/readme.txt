2014-04-28 v1.0
====================
ʹ�÷�����
1�����ļ���ѹ��Addons�ļ����¡�
2����oneThink��̨��չ������ӹ���jqFileUpload,Ȼ�󵽲������װ�����ѡ����ͼ��
3����ģ��ҳ�����{:hook('jqFileUpload')}���ɡ�
=====================
ע�����
1��{:hook('jqFileUpload')}����д������formԪ�����档
2��ͼƬ�ϴ�Ĭ�ϵĴ�������Addons/jQueryFileUpload/server/php/UploadHandler.php��
Ĭ���ϴ�·����Addons/jQueryFileUpload/server/php/files��
��������޸�ͼƬ����ĵط������޸Ĳ��Ŀ¼�����upload.html������JS���롣
����Ĵ���ʽ�ɲ���UploadHandler.php��
=====================
 $('#fileupload').fileupload({
    	url:'__ADDONROOT__/server/php/'
    });
����Ǵ����ϴ�ͼƬ��URL
=====================
 $.ajax({
        url: $('#fileupload').fileupload('option', 'url'),

���url�ǻ�ȡͼƬ��Ϣչʾ�ĵ�ַ,Ĭ���Ǻ�����һ����
=====================
�Լ�д��ʱ����뷵�����趨�õĸ�ʽ���ܽ�����
{"files":[{"name":"png.png","size":80268,"type":"image\/png","url":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/files\/png.png","thumbnailUrl":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/files\/thumbnail\/png.png","deleteUrl":"http:\/\/127.0.0.1\/myonetk\/Addons\/jQueryFileUpload\/server\/php\/?file=png.png","deleteType":"DELETE"}]}

�����������ӣ�������firebug�����ӷ��ص����ݡ�
=====================
�����������ò�������������ǰ̨չʾͼƬ�ĸ߶ȺͿ�ȡ�
=====================
��Ҫ��ԭ����Ĵ��������ȡ���Լ���CSS���޸ļ���oneThink��̨��ʽ��
Ĭ�ϵ��ϴ�����Բ������������ܻᴦ������롣