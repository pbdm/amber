<?php
/**
 * function pour obtenir le age par le date de birth given
 * @param  [string] $brith [le date de brith]
 * @return [string]        [le age]
 */
function age($birth){
    list($by,$bm,$bd) = explode('-',$birth);
    $cm  = date('n');
    $cd  = date('j');
    $age = date('Y')-$by-1;
    if ($cm > $bm || $cm == $bm && $cd >= $bd) $age++;
    return $age;
}

/**
 * 获取目录的结构
 * @author 李俊 
 * @param  [string] $path [目录路径]
 * @return [array]       [目录结构数组]
 */
function dirtree($path) {
	$handle = opendir($path);
    $itemArray=array();
    while (false !== ($file = readdir($handle))) {
        if (($file=='.')||($file=='..')){
        }elseif (is_dir($path.$file)) {
                try {
                    $dirtmparr=dirtree($path.$file.'/');
                } catch (Exception $e) {
                    $dirtmparr=null;
                };
                $itemArray[$file]=$dirtmparr;
            }else{
                array_push($itemArray, $file);
            }
        }
	return $itemArray;
}

/**
 * 不区分大小写的in_array
 * @param  [string] $needle   [值]
 * @param  [array] $haystack [数组]
 * @return [boolean]           [是否存在]
 */
function in_arrayi($needle, $haystack) {
    return in_array(strtolower($needle), array_map('strtolower', $haystack));
}

/**
 * 转换任意字符串为ut8编码
 * @param  [string] $str [转换前字符串]
 * @return [string]      [转换后字符串]
 */
function to_utf($str){
    return iconv(mb_detect_encoding($str, array('ASCII','GB2312','UTF-8','GBK','BIG5')),'UTF-8',$str);
}

/**
 * 获取代码源文件并输出成代码格式，需要与代码高亮插件配合
 * @param  [string] $path [代码文件目录]
 * @return [string]       [html格式的代码]
 */
function get_code($path){
    $path = CODE_PATH.$path;
    if (file_exists($path) && is_readable ($path)) {
        $fh = fopen($path, "r");
        print "<pre><code>";
        while (!feof($fh)) {
            $line = fgets($fh);
            print htmlspecialchars($line);
        } 
        fclose($fh);
        print "</pre></code>";
    }
}