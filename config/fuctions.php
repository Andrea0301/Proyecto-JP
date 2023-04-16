<?php
function getFolderproyect(){
if (strpos(__DIR__,'/') !== false){
    $folder = str_replace('/xampp/htdocs/','/', __DIR__);
}else{
    $folder = str_replace ('C:\\xampp\\htdocs\\','/', __DIR__);
}
$folder = str_replace('config', '', $folder);
return $folder;

}




?>