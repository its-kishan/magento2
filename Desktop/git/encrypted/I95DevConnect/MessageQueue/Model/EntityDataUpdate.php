<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6027779B8D68217EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/LmcC9xvRdKehpOE6Th9jpyQ+DAK/wB6gchmIMP2lpHLUbd2wiKwui9Fg/BHmGnv6UYp9P50lrZlFTadd4o8B+paoKk/YVpqxa/GXlJmic1cbKNi1C5ohhzjzYlQF7tcz0pApKHtuXIqygqWGNZwDzz1v5AKzAx4WRykvRYElPqkvG7I/c4WMMzgAAAAYAgAA5Mkfx75oQabHpcwTHTqOCRf55np4IWmlfnFfZ/f+124qtOyrAdXq0zbdElCVh+lK8cEmsFPJrLP7Wn97wRoMZxMnSA7Yp/Tr2W4w92vPVAN++SZwy/PAj0FT+GC1s//BjEHwbew2bgOwFaI74fBE4RI8H7IEtK+TkuP/JdpDgTz2WUj232sQgYhINL6p5yVw3jxWf1lbZgBQXq2iGywZjRb1uU7Vewa0bm/N5nRj6ZVgbbW5ybDiu/jkY5lELrs4Ii81qzNh8aV5RlgFpI1ezxe9hUlPNm5HJWqxtqgUNxQBAEOTejzTW3uHwZ/uWSShF8H2b29AZA9j7lrSdD7JxdpN3JlWacoo2jJmE075QAZOewKU96EIH8naRqVB7JKLOAsZeMxRJMVP+BIr9zhIyIYJJUI3Iovkk/4S/8sM5mnW1uT5QQbzb5DbjKLydCPQuP0YPyxoKWpiw/5vBFrh3ikUFsgOx7PdUzK/uT+4tAkgXwCOCSORqEFvKoffK73/GV/BAau/6Dy6Q8On9UXrSOVQNSGEiBjdwHnDqc4aPWTShcuZDq5N0uIyIi8rDlnG2Sn9GSJS8TNs+E7THvsdPotpTeWGiw21W4QGRRq1wRQVD4KVsX6O0dL82QH2RDy0rmcX33V1lb1T5HABsLyKly2zXZY6O7Y6fcKC+gUK009OCMh1iyQ5UYt62jXCgoyPhSNC6gmHPFQAAAAA');
