<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
