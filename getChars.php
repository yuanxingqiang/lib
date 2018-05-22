<?php
/**
 * Created by PhpStorm 随机获取字符串的函数库.
 * User: Yuan
 * Date: 2018/5/22
 * Time: 15:33
 */

/**
 * @param int $length 要获取验证码的长度
 * @param int $type 获取验证码的类型：1为数字类型；2为字母类型；3为数字加字母类型
 * @return string 返回的验证码
 */
function getVerificationCode($length=4,$type=1){
    $chars='abcdefghijklmnopqrstuvwxyz0123456789';
    switch ($type){
        case '1':
            $chars=substr($chars,26);
            break;
        case '2':
            $chars=substr($chars,0,26);
            break;
        case '3':
            break;
    }
    $charsArray = str_split($chars);
    $verificationCode='';
    for($i=0;$i<$length;$i++){
        $verificationCode.=$charsArray[mt_rand(0,strlen($chars)-1)];
    }
    return $verificationCode;
}