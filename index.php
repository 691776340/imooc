<?php
// test mysql connect
$res = mysqli_connect('127.0.0.1', 'ludongdong', 'ludongdong', 'imooc');

if ($res) {
   echo 'mysql链接成功';
} else {
   echo 'mysql连接失败' . mysqli_connet_error();
}

// test redist connect



// test memcache connect

