<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6027779B8D68217EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/LmcC9xvRdKehpOE6Th9jpyQ+DAK/wB6gchmIMP2lpHLUbd2wiKwui9Fg/BHmGnv6UYp9P50lrZlFTadd4o8B+paoKk/YVpqxa/GXlJmic1cbKNi1C5ohhzjzYlQF7tcz0pApKHtuXIqygqWGNZwDzz1v5AKzAx4WRykvRYElPqkvG7I/c4WMMzgAAACwAwAAYhqbS5oySOoaNK3JC2gMr+xjDOFTLe0pVDX9DpqgAPW1Y6w1sRJSPlENEyBOfxOeThcMpJkUs+G+SWYQZY/XdSTuCU1k6R700NDoF5zFSTr6B1P7vOUY8Rnh8eOgB6rbfD1tffFgufaJI1ZFdi43ae68zTz1cDNS2whtmWDs6KqHrhyxx0nCgMVCdSniLPNJB7vgCDb8akpb654NK5sSvzJkPELNvsMcSD39r+C62TDX43bgY6McYiI2Wh6ttvvSPHjJSWHEf4/UWEqxZjTRDUSZYnZuXJ5o6Z/xAEjTydmV4sab8/TRoLAewmz4zDMwteVhKWw4xbHBwHlx/Hd8I4OjaZ3J0KazwcNhW+vjsNomf5EpZ7kTjMdOp102Jo0oo0Ox8+XTxY0x2E2Jma7KafJAcSMdp/FT7OITtruKw+Bb5fchL6BGeH3OKB2tddJu0F/z9lUi2cEYB7QZl6Gj1YT8xA+k2PeHoSA8tz51wD4Rncs95k1VWKmzuCMI8pxKifSHTNoYU2W3ZS5TgD6OuZ3UmfdR2NqhWxD4Kj/zUxjfFD3gDAoS3nfNMy0cTM5lLYvtXkLqLlczXtc0OERZFBxwaY/t7wigCj5wGa0i2ndy6YHeJr7s7fz9McrMV+IFD6Z/UP9qX5jvvlYbl3V+5tBjGgHFCvrZCs9u44Nuwdj/jnnMGnej3Mg85AXsIGuQLs5PbrLoyeFyEfbZDqtDAmZDRoAdOIjC6JuSeJKE6WS3Af3KRpkb5gQ/p0/RF/VIT1N1QzqH05FhEFDRLMm/1gFs3gtQkqhuH2X2DdcBF7wV+cpJa3nYQaXuQIEN1zoYU/36DYRgcZO20ivp4kKKhZV0CeAlC1QlMYhTu3M5WaOIaAGoqs/kMwYzZHvgOSrImmyTYQ+hhaHZewoWfIEyb1pAzvgCMNwCgdzRuauOmzQdJe23NyrP+WfpP7I4Swef4Ejkgla/XGIq4kyzWP7zL6wG67+qEMndFZGv/cRwz1PkgaFF06oVsKSAdLYsak8rsOSW0R44k0dw7o+wB3+00iNA1diCPK2RGlQXFs2CdAXpXPbvEq/Qicfv+yO5ZMmVml5SXeJfZwgCoWCm0hzH6uN/cX3kFx5Z2SNr+jxkv4s5MfBujyv/yQM3me86kNbebLyMewFLsJdMhZZ4VjlRvHszjC+pZcwTmAWrcj7QJyp9PvqH6p8BMYTEXdR2reKJsvCQxBR0M7cNCeNzfbFW2HqhDoSR+biyIkIcOH7dI+gAAAAA');
