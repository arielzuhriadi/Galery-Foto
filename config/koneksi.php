<?php
$hostname = 'localhost';
$userdb = 'root';
$passdb = '';
$namedb ='galery';

$koneksi = mysqli_connect($hostname, $userdb, $passdb, $namedb);


if ($koneksi){
    echo "";

}else{
    echo "tidak terhubung";
}


?>