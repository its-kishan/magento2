<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
