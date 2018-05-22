<?php
/**
 * Created by PhpStorm.获取如期时间函数库
 * User: Yuan
 * Date: 2018/5/22
 * Time: 15:16
 */

/**
 * @param string $a 年和月之间的分隔符
 * @param string $b 月和日之间的分隔符
 * @param string $c 日后面的分隔符
 * @return string 根据输入的分隔符输出的日期结果
 */
function dayDelimit($a='年',$b='月',$c='日'){
    $dateArray=array('日','一','二','三','四','五','六');
    $date = date('w');//获取当前日期为周几，0为周日，6为周六
    return date('Y'.$a.'m'.$b.'d').' 周'.$date;
}