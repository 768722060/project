<?php
// ͨ��$_GET ��ȡurl�� keyΪjsonp��valueֵ
$callback = $_GET['jsonp'];
$data = '{"a1":"hello","a2":"world"}';

echo $callback."(".$data.")";
?>