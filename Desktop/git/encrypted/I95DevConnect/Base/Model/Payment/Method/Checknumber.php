<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
