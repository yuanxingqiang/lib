<?php
/**
 * Created by PhpStorm.
 * User: Yuan
 * Date: 2018/5/22
 * Time: 14:46
 */

/**
 * @param $a number 运算的第一个参数
 * @param $op string 运算符
 * @param $b number 运算的第二个参数
 * @return float|int|null|string 运算结果
 */
function calculate($a,$op,$b){
    $r = null;
    if(!is_numeric($a) || !is_numeric($b)){
        return "参数必须为数值类型";
    }
    switch ($op){
        case '+':
            $r = $a + $b;
            break;
        case '-':
            $r = $a - $b;
            break;
        case '*':
            $r = $a * $b;
            break;
        case '/':
            if($b==0){
                return "除数不能为零";
            }
            $r = $a / $b;
            break;
    }
    return $r;
}