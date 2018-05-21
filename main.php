<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/5/21
 * Time: 16:02
 */

include_once('documentTools.php');
header('Content-Type:text/html;charset=utf-8');
echo getFileExtName2('a.php');
echo '<hr/>';
echo getFileExtName6('./abc/dse/sde/a.abc');
