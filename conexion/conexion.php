<?php

$debug = true;

if($debug){
  $pdo = new PDO(
  'mysql:host=127.0.0.1;dbname=net;charset=utf8',
  'root',
  ''
  );
}
else{
   $pdo = new PDO(
    'mysql:host=127.0.0.1;dbname=uejpedu_mundonet;charset=utf8',
    'uejpedu_hotel',
    'hotel123090'
  );
}

