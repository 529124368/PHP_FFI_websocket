<?php
/**
 * PHP 7.4  FFI
 * 
 * cgo to write dll for PHP start websocket serve
 * 
 */

 echo 'PHP websocket Demo',PHP_EOL;

 //FFI 注册动态链接库
$ffi = FFI::cdef(
    'void startWebsocket();',
    'goWebsocket.dll'
);

//启动websocke服务器
$ffi->startWebsocket();
