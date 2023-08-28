<?php require_once "../vendor/autoload.php" ; 

use Nigromante\Framework\Application;
use Nigromante\Framework\Session;

$t2 = '{"database":{"DB_HOST":"mysql","DB_NAME":"DbGuitar","DB_USER":"user","DB_PASS":"test"},"session":{"DB_HOST":"mysql","DB_NAME":"DbGuitar","DB_USER":"user","DB_PASS":"test","SESSION_TTL":"10","SESSION_KEY":"BASS"}}' ; 
$config = json_decode( $t2, true ) ; 


$t1 = '{"SERVER":{"REDIRECT_STATUS":"200","HTTP_HOST":"localhost:8080","HTTP_USER_AGENT":"Mozilla\/5.0 (X11; Linux x86_64; rv:109.0) Gecko\/20100101 Firefox\/116.0","HTTP_ACCEPT":"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,*\/*;q=0.8","HTTP_ACCEPT_LANGUAGE":"es-CL,es;q=0.8,en-US;q=0.5,en;q=0.3","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_CONNECTION":"keep-alive","HTTP_COOKIE":"wp-settings-1=editor%3Dtinymce; wp-settings-time-1=1687197496; _gcl_au=1.1.2057599899.1687917127; _ga_GE3TZNPQQ4=GS1.1.1687923830.2.0.1687923830.0.0.0; _ga=GA1.1.1188115608.1687917127; _ga_NE9ZKVVS38=GS1.1.1687923830.2.0.1687923830.60.0.0; _fbp=fb.0.1687917128497.847403532; pmaUser-1=3NHVZUlYxy9ED0UIxIPLJ3gw00q2kpMXxZUzKzmsOJvOOLqQfs1dKnIntSM%3D; pma_lang=es; my_wikiUserName=User; BASS=9fb38c2dbcd61fdd76ece5a636a91713","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_SEC_FETCH_DEST":"document","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_USER":"?1","PATH":"\/usr\/local\/go\/bin:\/usr\/local\/sbin:\/usr\/local\/bin:\/usr\/sbin:\/usr\/bin:\/sbin:\/bin","SERVER_SIGNATURE":"Apache\/2.4.57 (Debian) Server at localhost Port 8080<\/address>\n","SERVER_SOFTWARE":"Apache\/2.4.57 (Debian)","SERVER_NAME":"localhost","SERVER_ADDR":"192.168.48.6","SERVER_PORT":"8080","REMOTE_ADDR":"192.168.48.1","DOCUMENT_ROOT":"\/var\/www\/html","REQUEST_SCHEME":"http","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"\/var\/www\/html","SERVER_ADMIN":"webmaster@localhost","SCRIPT_FILENAME":"\/var\/www\/html\/index.php","REMOTE_PORT":"58154","REDIRECT_URL":"\/backend","GATEWAY_INTERFACE":"CGI\/1.1","SERVER_PROTOCOL":"HTTP\/1.1","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\/backend","SCRIPT_NAME":"\/index.php","PHP_SELF":"\/index.php","REQUEST_TIME_FLOAT":1693185070.470696,"REQUEST_TIME":1693185070,"argv":[],"argc":0},"GET":[],"POST":[],"REQUEST":{"wp-settings-1":"editor=tinymce","wp-settings-time-1":"1687197496","_gcl_au":"1.1.2057599899.1687917127","_ga_GE3TZNPQQ4":"GS1.1.1687923830.2.0.1687923830.0.0.0","_ga":"GA1.1.1188115608.1687917127","_ga_NE9ZKVVS38":"GS1.1.1687923830.2.0.1687923830.60.0.0","_fbp":"fb.0.1687917128497.847403532","pmaUser-1":"3NHVZUlYxy9ED0UIxIPLJ3gw00q2kpMXxZUzKzmsOJvOOLqQfs1dKnIntSM=","pma_lang":"es","my_wikiUserName":"User","BASS":"9fb38c2dbcd61fdd76ece5a636a91713"}}';
$ENV_VARS = json_decode( $t1 ) ; 




Session::Start( $config ) ;





$app = new Application( $config );

$app->run() ;
