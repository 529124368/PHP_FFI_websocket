# PHP_FFI_websocket
利用PHP7.4的FFi特性调用外部dll(动态链接库)启动websocket服务器

## 运行
1. PHP版本 >= PHP7.4
2. 因为是dll文件 需要windows系统 (下载xammp)
3. PHP 安装 FFI扩展 (最新版xammp 自带ffi扩展，修改php.ini 将 #extension=ffi 的#去掉重新保存PHP.ini)
   php -m 确认
4. cli模式运行
  php websocket.php 

dll 源码
>https://github.com/529124368/golang_webscoket


