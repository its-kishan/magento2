<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
