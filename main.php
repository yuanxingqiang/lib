<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/5/21
 * Time: 16:02
 */

include_once 'documentTools.php';
include_once './calculator.php';
include_once 'getDay&Date.php';
include_once 'getChars.php';
header('Content-Type:text/html;charset=utf-8');

echo getFileExtName2('a.php');
echo '<hr/>';
echo getFileExtName9('./abc/dse/sde/a.bcc');
echo '<hr/>';
echo calculate(10,'*',3);
echo '<hr/>';
echo dayDelimit('啥玩意儿这是','瞅啥瞅','瞅你咋地');
echo '<hr/>';
echo getVerificationCode(4,3);