<?php
/**
 * 文件操作函数库
 * @author Yuan
 * @time 2018-5-21 15:35:00
 */

/**
 * 输入文件名（可带路径），获取改文件的拓展名（之一）
 * @param string $fileName 文件的名称（可带路径）
 * @return string  文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:38:00
 */
function getFileExtName1($fileName){
    return strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
}


/**
 * 输入文件名（可带路径），获取文件的拓展名（之二）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
function getFileExtName2($fileName){
    return strtolower(substr($fileName,strripos(SfileName,'.')));
}