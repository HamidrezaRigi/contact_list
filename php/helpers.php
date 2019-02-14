<?php

function dd(...$params)
{
    foreach ($params as $param) {
        echo '<code class="dd">';
//        echo 'file: ' . __FILE__, '<br />';
//        echo 'line: ' . __LINE__, '<br />';
        var_dump($param);
        echo '</code>';
    }
    exit;
}