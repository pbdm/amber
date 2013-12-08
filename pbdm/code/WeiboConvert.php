<?php
class BaseConvert {

	const raw_map	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";//base62

	const weibo_map	= "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";//base62 weibo.com

	public static function WeiboEncode($str){
		static $map = self::weibo_map;
		static $base = null;
		if($base === null)
			$base = strlen($map);

		$out = '';
		$len = ceil(strlen($str)/7)*7;
		$str = str_pad($str, $len, '0', STR_PAD_LEFT);
		$list = str_split($str, 7);
		foreach($list as $row){
			if($out){
				$out .= str_pad(self::encode($row, $map, $base), 4, '0', STR_PAD_LEFT);
			}else{
				$out = self::encode($row, $map, $base);
			}
		}
		return $out;
	}

	public static function WeiboDecode($str){
		static $map = null;
		static $base = null;
		if($map === null)
			$map = array_flip(str_split(self::weibo_map));
		if($base === null)
			$base = strlen(self::weibo_map);

		$out = '';
		$len = ceil(strlen($str)/4)*4;
		$str = str_pad($str, $len, '0', STR_PAD_LEFT);
		$list = str_split($str, 4);
		foreach ($list as $row){
			if($out){
				$out .= str_pad(self::decode($row, $map, $base), 7, '0', STR_PAD_LEFT);
			}else{
				$out = self::decode($row, $map, $base);
			}
		}
		return $out;
	}

	public static function encode($str, $map, $base) {
		$out = '';
		do{
			$n = $str%$base;
			$str = floor($str/$base);
			$out = $map[$n] . $out;
		}while ($str);
		return $out;
	}

	public static function decode($str, $map, $base) {
		$out = 0;
		$len = strlen($str);
		for($i=0;$i<$len;$i++){
			$out += $map[$str[$i]] * pow($base, $len-$i-1);
		}
		return $out;
	}

}
