<?php
/**
 * User: Andy
 * Date: 2018/8/26
 * Time: 1:35
 */
$page = isset($_GET['p']) ? $_GET['p']: 1;
$page = min($page, 5);
$page = max(1, $page);

$data =[];

for($i = 1; $i <= 100; $i ++) {
    $data[] = ['title'     => '这是第'.$page.'的数据'.$i];
}

echo json_encode($data);