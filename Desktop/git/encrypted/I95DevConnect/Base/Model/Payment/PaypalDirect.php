<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
