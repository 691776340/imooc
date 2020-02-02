<?php
// test mysql connect
$res = mysqli_connect('127.0.0.1', 'ludongdong', 'ludongdong', 'imooc');

if ($res) {
   echo 'mysql链接成功';
} else {
   echo 'mysql连接失败' . mysqli_connet_error() . '<br/>';
}

// test redist connect
$redis = new Redis();
if (empty($redis)) {
    exit('没有安装redis扩展');
}

//



// test memcache connect

