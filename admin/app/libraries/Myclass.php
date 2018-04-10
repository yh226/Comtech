<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Myclass {

	function __construct() {
	$this->ci = & get_instance ();
	}
	/**
     * �Ƿ�Ϊ��ֵ
     */   
	public static function isEmpty($str){
        $str = trim($str);     
        return !empty($str) ? true : false;
    }
	
	/**
     * ������֤
     * param:$flag : int�Ƿ���������float�Ƿ��Ǹ�����
     */       
    public static function isNum($str,$flag = 'float'){
        if(!self::isEmpty($str)) return false; 
        if(strtolower($flag) == 'int'){
            return ((string)(int)$str === (string)$str) ? true : false;
        }else{
            return ((string)(float)$str === (string)$str) ? true : false;
        }
    }  
	/**
     * ������֤
     */       
    public static function isEmail($str){
        if(!self::isEmpty($str)) return false;
        return preg_match("/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i",$str) ? true : false;
    } 
    //�ֻ�������֤
    public static function isMobile($str){
        $exp = "/^13[0-9]{1}[0-9]{8}$|15[012356789]{1}[0-9]{8}$|18[012356789]{1}[0-9]{8}$|14[57]{1}[0-9]$/";
        if(preg_match($exp,$str)){
            return true;
        }else{
            return false;
        }
    }
//�����Ѻ�ʱ����ʽ
function  friendly_date( $from ){
	static $now = NULL;
	$now == NULL && $now = time();
	! is_numeric( $from ) && $from = strtotime( $from );
	$seconds = $now - $from;
	$minutes = floor( $seconds / 60 );
	$hours   = floor( $seconds / 3600 );
	$day     = round( ( strtotime( date( 'Y-m-d', $now ) ) - strtotime( date( 'Y-m-d', $from ) ) ) / 86400 );
	if( $seconds == 0 ){
		return '�ո�';
	}
	if( ( $seconds >= 0 ) && ( $seconds <= 60 ) ){
		return "{$seconds}��ǰ";
	}
	if( ( $minutes >= 0 ) && ( $minutes <= 60 ) ){
		return "{$minutes}����ǰ";
	}
	if( ( $hours >= 0 ) && ( $hours <= 24 ) ){
		return "{$hours}Сʱǰ";
	}
	if( ( date( 'Y' ) - date( 'Y', $from ) ) > 0 ) {
		return date( 'Y-m-d', $from );
	}
	
	switch( $day ){
		case 0:
			return date( '����H:i', $from );
		break;
		
		case 1:
			return date( '����H:i', $from );
		break;
		
		default:
			//$day += 1;
			return "{$day} ��ǰ";
		break;
	}
}

	function notice($str)
	{	
		echo '<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><script>'.$str.'</script>';
	}

	/**
	 * �ļ���Ŀ¼Ȩ�޼�麯��
	 *
	 * @access          public
	 * @param           string  $file_path   �ļ�·��
	 * @param           bool    $rename_prv  �Ƿ��ڼ���޸�Ȩ��ʱ���ִ��rename()������Ȩ��
	 *
	 * @return          int     ����ֵ��ȡֵ��ΧΪ{0 <= x <= 15}��ÿ��ֵ��ʾ�ĺ��������λ������������Ƴ���
	 *                          ����ֵ�ڶ����Ƽ������У���λ�ɸߵ��ͷֱ����
	 *                          ��ִ��rename()����Ȩ�ޡ��ɶ��ļ�׷������Ȩ�ޡ���д���ļ�Ȩ�ޡ��ɶ�ȡ�ļ�Ȩ�ޡ�
	 */
	function is_write($file_path)
	{
		/* ��������ڣ��򲻿ɶ�������д�����ɸ� */
		if (!file_exists($file_path))
		{
			return false;
		}
		$mark = 0;
		if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')
		{
			/* �����ļ� */
			$test_file = $file_path . '/cf_test.txt';
			/* �����Ŀ¼ */
			if (is_dir($file_path))
			{
				/* ���Ŀ¼�Ƿ�ɶ� */
				$dir = @opendir($file_path);
				if ($dir === false)
				{
					return $mark; //���Ŀ¼��ʧ�ܣ�ֱ�ӷ���Ŀ¼�����޸ġ�����д�����ɶ�
				}
				if (@readdir($dir) !== false)
				{
					$mark ^= 1; //Ŀ¼�ɶ� 001��Ŀ¼���ɶ� 000
				}
				@closedir($dir);
				/* ���Ŀ¼�Ƿ��д */
				$fp = @fopen($test_file, 'wb');
				if ($fp === false)
				{
					return $mark; //���Ŀ¼�е��ļ�����ʧ�ܣ����ز���д��
				}
				if (@fwrite($fp, 'directory access testing.') !== false)
				{
					$mark ^= 2; //Ŀ¼��д�ɶ�011��Ŀ¼��д���ɶ� 010
				}
				@fclose($fp);
				@unlink($test_file);
				/* ���Ŀ¼�Ƿ���޸� */
				$fp = @fopen($test_file, 'ab+');
				if ($fp === false)
				{
					return $mark;
				}
				if (@fwrite($fp, "modify test.\r\n") !== false)
				{
					$mark ^= 4;
				}
				@fclose($fp);
				/* ���Ŀ¼���Ƿ���ִ��rename()������Ȩ�� */
				if (@rename($test_file, $test_file) !== false)
				{
					$mark ^= 8;
				}
				@unlink($test_file);
			}
			/* ������ļ� */
			elseif (is_file($file_path))
			{
				/* �Զ���ʽ�� */
				$fp = @fopen($file_path, 'rb');
				if ($fp)
				{
					$mark ^= 1; //�ɶ� 001
				}
				@fclose($fp);
				/* �����޸��ļ� */
				$fp = @fopen($file_path, 'ab+');
				if ($fp && @fwrite($fp, '') !== false)
				{
					$mark ^= 6; //���޸Ŀ�д�ɶ� 111�������޸Ŀ�д�ɶ�011...
				}
				@fclose($fp);
				/* ���Ŀ¼���Ƿ���ִ��rename()������Ȩ�� */
				if (@rename($test_file, $test_file) !== false)
				{
					$mark ^= 8;
				}
			}
		}
		else
		{
			if (@is_readable($file_path))
			{
				$mark ^= 1;
			}
			if (@is_writable($file_path))
			{
				$mark ^= 14;
			}
		}
		return $mark;
	} 

	function get_ip() {
		$url = 'http://iframe.ip138.com/ic.asp';
		if(function_exists('curl_init')){
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$a = curl_exec($ch);
		} else
		{
			$a = @file_get_contents($url);
		}
		preg_match('/\[(.*)\]/', $a, $ip);
		return @$ip[1];
	}
	//

function get_domain($url){ 
	$host=$url?$url:@$_SERVER[HTTP_HOST]; 
	$host=strtolower($host); 
	if(strpos($host,'/')!==false){ 
		$parse = @parse_url($host); 
		$host = $parse['host']; 
	}
	$topleveldomaindb=array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me','cn','tv','in','hk','de','us','tw');
	$str=''; 
	foreach($topleveldomaindb as $v){ 
		$str.=($str ? '|' : '').$v;
	} 
	$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
	if(preg_match("/".$matchstr."/ies",$host,$matchs)){ 
		$domain=$matchs['0'];
	}else{ 
		$domain=$host; 
	}
	return $domain; 
}

}

/* End of file Myclass.php */