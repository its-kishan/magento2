<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6027779B8D68217EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/LmcC9xvRdKehpOE6Th9jpyQ+DAK/wB6gchmIMP2lpHLUbd2wiKwui9Fg/BHmGnv6UYp9P50lrZlFTadd4o8B+paoKk/YVpqxa/GXlJmic1cbKNi1C5ohhzjzYlQF7tcz0pApKHtuXIqygqWGNZwDzz1v5AKzAx4WRykvRYElPqkvG7I/c4WMMzgAAAC4BAAAypwBWnnXezID/72de5I7aqlcvf9kFDsJsaASpUn2zue4T3iNYegWswpnMmPb9MaPZJVAT7ZBF3IpYXMx4PI3P0EWSx43fqiIz3ioRvTrkAysK1IF/w2LUcE2k6DIFS6j/OT1wooAN+XpvABCNxsJ8FrWrM6yKYDYOgPEGSUBk8xYlFEj5SpQuE7aGRx68jCNSS8TQDyUnIaNrLEm/5ONTTR/Hj4goPoz77z6Jmwq8ucuunRr4zx5KtriwaUFcb+8a/ZaBSmYuMH5cRl/lRjrjb85D2ZT12mwCd5aFkRFoHT0kaoS9z2Ib/Xr9FnsnShPcuUGYoNoRejudej0ffo2BDaiX548yGf9tFjCga+HyjhkbUA0g40wSALwtyjN1aeQOtHNXvmBishKiS0q8RqHLsFETK5Kuv2CFVd2i/gGfemkrT7oX/warKQ1bNNkN87/0vkPSWgb5hsiloiWiimiNDJni+Tc66/Ofj31h+rTRbJwSOPTb238V5tsAbyqNADQu4zJ8HtQz9KJKm8W6WD93XaL2u9koUO56JY4ZwrnOGWTRGwNZvGc7EbrISw9QRPg/E9qKstIdSlrLz5DbHpGxJCf+jRYW7IhhEBMRNcnqi8WnNmmtL9rXnfjd60KzhSbUJixd7PpKcM7gR0ZybbazC6U3whE5he8G5SpkV6xRXQ8dcyR723MJhbnwX/xaQG2Ak+y0ScPTMSTFHuNvUziQgRe6lBbflTSbLhrQ6mOE6q+Hy86BhB8m5DaXgTfI/VNt9sbaLIc+fx+ifpDG6razFsd13ryojge7OZoq5GfqI3XxZN1zUhYAr43bRhQ+Qs/alKZbjyfFg2BM4GVbwGerUvM4MQS0w76tXiNF7VSoXCrQf03iWmxtZtNWY4NedXCslt7f1RFsAZx6AUniN5GDdzWg9vWEdppRKDHLpsibr2e4wdu3ouqJfTDZ0RRhtYFp7c7/b39ARO6WMDfIBIMnZNaQDQV3hFed8kutkpRfHTkh8/G1jltmDsX88jmRi6N8ebAbDYMghodDuIn1E63OnXsibdAE5I6m7bdQIYiHgSl4iyrJD3U01bmf5lO2C+N4BSntporivulWLte6+nKHqosgT00BfeV5v8l7FM7j9cWFi6OqLJ7zFP7SORazJrE1C8aLuUxqyoMG7G0/ku2ZYbRA0YtttBM55fKZfzi4Y/GOo4cc80ZgTgcp9O0VqvRV0M3ORcpElWJ0QfBqjy5OMJa47iZHSGgcwY0bD4VnYe6hNIs2xWBSg9CcAolMTvNhIkcZwzFmxV4I/Y0smhm7U68PQPRz5DlbDHs3ZzQ6B0bbZR4AgI9HM5j8BjLX82TtqeB13lL25IV1nJN8JFT5zKlSNKvfCjCd03e5M2xleW682Q0U40yDi6wTxZWtrsFP+c75kS92E8B/wdrhh87hQlUSeKkJJG4tI31JTNqcA36aUmitYjMimCEwpG0fsI9rLMo72aGUnACBArjHecIqkrjNoOq0wGSibFWvkYE0fHlNMZGtSKLsKyw3BOlrLOrzsclYwyWcBOKyslqCo4hu3mKizKpqklSq/orx3K7CvzIDzxiApjI1xqOdXJ4gOX7zHW2Ut3Q34UAAAAA');
