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
    return strtolower(substr($fileName,strripos($fileName,'.')+1));
}

/**
 * 输入文件名（可带路径），获取文件的拓展名（之三）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
function getFileExtName3($fileName){
    $nameArray = explode('.',$fileName);
    return strtolower($nameArray[count($nameArray)-1]);
}

/**
 * 输入文件名（可带路径），获取文件的拓展名（之四）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
function getFileExtName4($fileName){
    $nameArray = str_split($fileName);
    $fileExtName = '';
    for($i = count($nameArray)-1; $i>=0 ; $i--){
        if($nameArray[$i]=='.'){
            break;
        }
        $fileExtName = $nameArray[$i].$fileExtName;
    }
    return strtolower($fileExtName);
}

/**
 * 输入文件名（可带路径），获取文件的拓展名（之五）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
function getFileExtName5($fileName){
    //使用正则，待补
}

/**
 * 输入文件名（可带路径），获取文件的拓展名（之六）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
function getFileExtName6($fileName){
    $nameArray = explode('.',$fileName);
    return strtolower(end($nameArray));
}

/**
 * 输入文件名（可带路径），获取文件的拓展名（之二）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
/**
 * 输入文件名（可带路径），获取文件的拓展名（之二）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
/**
 * 输入文件名（可带路径），获取文件的拓展名（之二）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */
/**
 * 输入文件名（可带路径），获取文件的拓展名（之二）
 * @param string $fileName 文件的名称（可带路径）
 * @return string 文件的拓展名
 * @author Yuan
 * @time 2018-5-21 15:49:00
 */

