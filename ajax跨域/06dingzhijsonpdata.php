<?php
// 通过$_GET 获取url中 key为jsonp的value值
$callback = $_GET['jsonp'];
$data = '{"a1":"hello","a2":"world"}';

echo $callback."(".$data.")";
?>