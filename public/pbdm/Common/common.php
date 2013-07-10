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