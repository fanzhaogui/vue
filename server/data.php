<?php
/**
 * User: Andy
 * Date: 2018/8/26
 * Time: 1:35
 */

$data = array(

    'category'  => 'vue入门学习',
    'article'   => array(
        [
            'title'     => '对照着jquery来学vuejs系列',
            'author'    => 'andy'
        ],
        [
            'title'     => '对照着jquery来学vuejs系列',
            'author'    => 'andy2'
        ],
    )
);

echo json_encode($data);