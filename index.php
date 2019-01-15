<?php
header('Content-type:text/html;charset=utf8');
echo '现在的时间：'.date('Y-m-d H:i:s');
echo '<br>';
echo '<br>';
echo '来访者的IP地址：'.$_SERVER["REMOTE_ADDR"];
?>
