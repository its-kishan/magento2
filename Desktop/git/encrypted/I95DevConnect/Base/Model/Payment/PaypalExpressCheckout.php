<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6027779B8D68217EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/LmcC9xvRdKehpOE6Th9jpyQ+DAK/wB6gchmIMP2lpHLUbd2wiKwui9Fg/BHmGnv6UYp9P50lrZlFTadd4o8B+paoKk/YVpqxa/GXlJmic1cbKNi1C5ohhzjzYlQF7tcz0pApKHtuXIqygqWGNZwDzz1v5AKzAx4WRykvRYElPqkvG7I/c4WMMzgAAAAwBAAAS+RwyrbPNVPtB6nYIzSro2IkIKs35gBLCUWJKj0SccmkLUodGYFSBy5vgB85YGcm9dvdI8u6VedcIImyCFj9HexnO6XKDmH7QR7kxPcqJxwT0TK0tU1jKcCYxRrXe9+l/yKbNC8wqEyje9YiyTbF51z78TWdFZPI3a1uHr+MLovPYM4vQsR0gCzvS4awlZU48flMUFvL9BIbsVDEU8syUsvr84RCynq9tZJYSoVtvxOjB0qDK809zlvzQqFg4LqeIvPWEomBLdGDik9Wlzb0hP5/Gy3nYyOkfex2uvLp30pMPC2ta3qgpNVq+kzPQntFvESBRXqmmyVJUO00EkegUCWLkMTmxI9ce1SRTiuVpMLySZmO5Z5raPpz1XbCM6AzfADD0NpmJ0NQYhfXNzUQMilyl2Ox1fZULMvteNrkZJSetUS+fRd8gRfwYtOJfAHCR/lT5Oqr3/b1Czmqjhvjm7JDxQHn3q2md4wbjAEKzoNDvQZMAnk09jBrl7alUmSxRdfYTS7eY6TAv2KMMyz8lRbR5epFE8E+hqexaOQb6fMJRwMlD+UkRIyllcgH9nWsosSMo+T1/W7XXqen0T2qQ++GZacEpbvduWg1egP7ldbdVKZOSmHshuOFq+ndYKS1GgQfWMCVbRzU/aSQtUghfe9DKOjKaC+W+MJIy0MP8RBysJRSJGII8MfPMZOrHWDYfo175RFmyg6bkDqv3ldk4q9hrAnV4UzZfnYQR/abr2gJ58BxCYgz6JB4//k7ONpXRVn1TgBSG9iZBn40oeShYlqJDqcqbpsGYHlhrxQ9En3t7w5o6ukQR5GfwaGJc+fYSgv+XZDMfJvK1+XMEKOAFycf9+Pc35M6ARlPf0kuk4dAmOFFHd4WyrtpFmA8QtWK3PrTIEUxpYtQwmHdPoH6dWPZLhHBvQV8PwhQkE4qaQjWUGnqeAaBhOKtTFmOyzZ9cc5e9jv9S2qrU7kckTP0Cn83cMjrbR8gzoEB1+hZ7UUeL3WXazO2YQpC5d3zNJbzHuU5vy3kf6Ep94I60Ui8GULUgHhIU9SWbDU/Ssdk8uws+T6v1ceNAKg2QH6ibz3t/8v3YjE6Rph15LTARB1nIKKNuCNEGgfDjKcMNQnkFpolwe5dKrfKb5PRLCRN6Ggn8PNLw8woyYzypSAtOk2UQ4sAvXxBX4tW7hcfsy3LhNOjuiB7BkybtqKWrRhdzLhkQ7FX/RucstyNCbxHKZUvCOpjCsL9RYQ213w4BlpiZrBAzKe67SLdyuYSFMMgP9pMkLlNc4XrcFvyxoi+STjR597/Pk9HYUS8yCQIlpH9YEJwxrQpiAVT0Pklyp13i0MKoavTaZyjmHQpncZThmmxnuw4g0c58QRHmpC8D5rV6oJ6nFUMFwHViZqa+24GarNPjK9MjwG+RNWzUOAvBu5rlQAAAAA=');
